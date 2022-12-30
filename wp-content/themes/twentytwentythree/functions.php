<?php
if(!function_exists('service_posts_function')){
	function service_posts_function() {
		$service_posts_array = array();
		$service_return_array = '';
		if(!empty($_POST) && !empty($_POST['json_val'])){
			/*$service_posts_array = array(
				array(
					'post_title' => 'Our new post',
					'post_content' => 'This is the content of our new post.',
					'post_status' => 'publish',
					'post_type'=>'service-center',
					'taxonomy' => 'Car Service Center',
					'address' => 'Mrs Polly Jones<br/>c/o  Henry Roth<br/>50 Oakland Ave,#206<br/>A city, Florida,<br/>United Status of AMERICA',
					'phone' => '+1 (650) 513-0514',
				),
				array(
					'post_title' => 'Our new post 1',
					'post_content' => 'This is the content of our new post.',
					'post_status' => 'publish',
					'post_type'=>'service-center',
					'taxonomy' => 'Mobile Service Center',
					'address' => '',
					'phone' => '',
				),
				array(
					'post_title' => 'Our new post 2',
					'post_content' => 'This is the content of our new post.',
					'post_status' => 'publish',
					'post_type'=>'service-center',
					'taxonomy' => 'Mobiles & Accessories',
					'address' => 'Mrs Polly Jones<br/>c/o  Henry Roth<br/>50 Oakland Ave,#206<br/>A city, Florida,<br/>United Status of AMERICA',
					'phone' => '+1 (650) 513-0514',
				)
			);*/
			
			
			/*echo "<pre>";
		print_r(json_decode(str_replace('\"','"',$_POST['jaon_val'])));
		echo "</pre>";*/
		
			$service_posts_array = json_decode(stripslashes($_POST['json_val']), true);
			
			foreach($service_posts_array as $val_state){
				$state = term_exists( $val_state['state'], 'states-and-city' );
				if ( empty($state) ) {
					//$state = wp_insert_term( $val_state['state'], 'states-and-city' );
				}
				if(!empty($val_state['states'])){
					foreach($val_state['states'] as $val_city){
						if(!empty($val_city['city'])){
							$city = term_exists( $val_city['name'], 'states-and-city' );
							if ( empty($city) ) {
								//$city = wp_insert_term( $val_state['state'], 'states-and-city', array( 'parent' => $state['term_id'], ) );
							}
							foreach($val_city['city'] as $val){
								
								$service_posts_array = array(
									'post_title' => $val['serviceCenter'],
									'post_content' => 'This is the content of our new post.',
									'post_status' => 'publish',
									'post_type'=>'service-center',
									'address' => $val['address'],
									'phone' => '+1 (650) 513-0514',
								);
							}
						}
					}
				}
				/*$post_id = wp_insert_post( $val );	
				if( $post_id ){
					$exchange = term_exists( $val['taxonomy'], 'service-center-category' );
					if ( empty($exchange) ) {
						$exchange = wp_insert_term( $val['taxonomy'], 'service-center-category' );
					}
					wp_set_post_terms( $post_id, array( $exchange['term_id'] ), 'service-center-category', false ); 
					//wp_set_post_terms( $post_id, array( (int) $exchange['term_id'] ), 'service-center-category', false );
					
					if(!empty($val['address'])){
						if ( ! add_post_meta( $post_id, 'address', $val['address'], true ) ) { 
						   update_post_meta ( $post_id, 'address', $val['address'] );
						}
					}
					if(!empty($val['phone'])){
						if ( ! add_post_meta( $post_id, 'phone', $val['phone'], true ) ) { 
						   update_post_meta ( $post_id, 'phone', $val['phone'] );
						}
					}
					
					$service_return_array .= "<div>".$val['post_title'] ." : Post successfully published!</div><br>";
				} else {
					$service_return_array .= "<div>".$val['post_title'] ." : Something went wrong, try again.</div><br>";
				}*/
			}
		}
		$form = '';
		$form .= '<form action="" method="post">';
			$form .= '<div class="mess">';
				$form .= $service_return_array;
			$form .= '</div>';
			$form .= '<div class="">';
				$form .= '<textarea name="json_val"></textarea>';
			$form .= '</div>';
			$form .= '<div class="">';
				$form .= '<input type="submit" name="submit" value="Submit" />';
			$form .= '</div>';
		$form .= '</form>';
		return $form;
	}
	add_shortcode('service-posts', 'service_posts_function');
}