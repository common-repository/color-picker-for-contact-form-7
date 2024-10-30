<?php 
add_action( 'wpcf7_init' , 'cpfcf7_add_form_tag_colorpicker' , 10, 0 );
function cpfcf7_add_form_tag_colorpicker() {
	wpcf7_add_form_tag( array( 'color_picker', 'color_picker*' ), 'cpfcf7_colorpicker_tag_handler',array('name-attr' => true) );
}


function cpfcf7_colorpicker_tag_handler($tag){
	if ( empty( $tag->name ) ) {
		return '';
	}

	$validation_error = wpcf7_get_validation_error( $tag->name );

	$class = wpcf7_form_controls_class( $tag->type );

	if ( $validation_error ) {
		$class .= ' wpcf7-not-valid';
	}

	$atts = array();

	$class = $atts['class'] = $tag->get_class_option( $class );
	$id = $atts['id'] = $tag->get_id_option();
	$defaultcolor = $tag->get_option('defaultcolor', '', true);
	$color_format = $tag->get_option( 'color_format', '', true );
	$back_color = $tag->get_option('back_color', '', true);
	$max_width = $tag->get_option('width', 'signed_int', true);
	$max_height = $tag->get_option('height', 'signed_int', true);
	$box_padding = $tag->get_option('padding', '', true);
	$preview_size = $tag->get_option( 'preview_size', '', true );
	$box_position = $tag->get_option( 'box_position', '', true );

	if ( $tag->has_option( 'readonly' ) ) {
		$atts['readonly'] = 'readonly';
	}

	if ( $tag->is_required() ) {
		$atts['aria-required'] = 'true';
	}

	if ( $validation_error ) {
		$atts['aria-invalid'] = 'true';
		$atts['aria-describedby'] = wpcf7_get_validation_error_reference(
			$tag->name
		);
	} else {
		$atts['aria-invalid'] = 'false';
	}


	$atts['name'] = $tag->name;
	$atts['type'] = 'hidden';

	$atts = wpcf7_format_atts( $atts );
	
	
	$html ='<div class="cpfcf7_colorpicker">
				<input id="'.$id.'" type="text" name="'.$tag->name.'"  class="'.$class.' colorpicker_input_class" value="'.$defaultcolor.'" color_format="'.$color_format.'" back_color="'.$back_color.'" width="'.$max_width.'" height="'.$max_height.'" padding="'.$box_padding.'" preview_size="'.$preview_size.'" box_position="'.$box_position.'">
        	</div>';
	return $html;
}