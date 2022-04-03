<?php
/**
 * Flatsome functions and definitions
 *
 * @package flatsome
 */

require get_template_directory() . '/inc/init.php';


/**
 * Note: It's not recommended to add any custom code here. Please use a child theme so that your customizations aren't lost during updates.
 * Learn more here: http://codex.wordpress.org/Child_Themes
 *
*/



if(!function_exists('search_filter')){
	function search_filter($atts, $content = null){
		ob_start();
		?>
		<?php
		
		$args = array( 
		'post_type' => 'diachi',
		'post_status' => 'publish',   
		'posts_per_page' => 10, 	
		);
		
		$the_query = new WP_Query( $args );
		
		?>
		
		<form class="search-form">
		<table style="width:200%">
		<tr >
			<td style="width:35%">
			<p><select name="s" id="text_field"></p>
			<option >Chon Tỉnh Thành</option>
			<option value="Long An">Long An</option>
			<option value="TP.HCM">TP.HCM</option>
			</select></td>
			<td>
			<input type="text" placeholder="Enter City" style="width:80%">
		
			<button type="submit" style="background-color: #315377;  color: white;  margin: 10px">search</button></td>
		</tr>
		</table>
		</form>
		<div class="list"></div>
		<?php
		
		return ob_get_clean();
	}
	add_shortcode('search_filter', 'search_filter');
}

function script_footer(){
	?>
	<script>
	jQuery(document).ready(function($){

		$('.search-form').submit(function(e){
			e.preventDefault();
			const keyword = $(this).find('#text_field').val();
			console.log('submit', keyword);
			
			const data = {
				action: 'search_ajax',
				keyword
			}
                $.ajax({
                    type : "post", //Phương thức truyền post hoặc get
                    dataType : "json", //Dạng dữ liệu trả về xml, json, script, or html
                    url : '<?php echo admin_url('admin-ajax.php');?>', //Đường dẫn chứa hàm xử lý dữ liệu. Mặc định của WP như vậy
                    data : data,
                    context: this,
                    beforeSend: function(){
                        //Làm gì đó trước khi gửi dữ liệu vào xử lý
                    },
                    success: function(response) {
                        //Làm gì đó khi dữ liệu đã được xử lý
                        if(response.data) {
                            $('.list').html(response.data);
                        }
                        else {
                            alert('Đã có lỗi xảy ra');
                        }
                    },
                    error: function( jqXHR, textStatus, errorThrown ){
                        //Làm gì đó khi có lỗi xảy ra
                        console.log( 'The following error occured: ' + textStatus, errorThrown );
                    }
                })
 
            })
			
	})
	</script>
	<?php
}
add_action('wp_footer','script_footer');

add_action( 'wp_ajax_search_ajax', 'search_ajax' );
add_action( 'wp_ajax_nopriv_search_ajax', 'search_ajax' );
function search_ajax() {
	
	ob_start();
 
    $keyword = isset($_POST['keyword']) ? $_POST['keyword'] : '';
	$args = array( 
		'post_type' => 'diachi',
		'post_status' => 'publish',   
		'posts_per_page' => 10, 	
		);
		
	if($keyword){
		$args['s'] = $keyword;
	}
	
	$the_query = new WP_Query( $args );
	
	if ( $the_query->have_posts() ) :
		while ( $the_query->have_posts() ) : $the_query->the_post();
		  // Do Stuff
		  
		  the_content();
		endwhile;
		endif;

		// Reset Post Data
		wp_reset_postdata();

    $respone = ob_get_clean();
    echo json_encode(array(
      'data' => $respone,
    ));
    die();
}