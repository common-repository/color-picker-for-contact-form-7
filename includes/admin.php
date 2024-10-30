<?php 
add_action('wpcf7_admin_init','cpfcf7_colorpicker_select_tag_generator');
function cpfcf7_colorpicker_select_tag_generator($post){
    if (!class_exists('WPCF7_TagGenerator')) {
        return;
    }
    $tag_generator = WPCF7_TagGenerator::get_instance();
    $tag_generator->add( 'color_picker', __( 'color_picker', 'color-picker-field-with-contact-form-7' ) , 'cpfcf7_tag_generator_colorpicker' );
}


function cpfcf7_tag_generator_colorpicker($contact_form, $args = '' ){
	$args = wp_parse_args( $args, array() );
	
	$wpcf7_contact_form = WPCF7_ContactForm::get_current();
	$contact_form_tags = $wpcf7_contact_form->scan_form_tags();
	$type = 'color_picker';
	$description = __( "Generate a form-tag for a Input colorpicker.", 'color-picker-field-with-contact-form-7' );
	?>
	<div class="control-box">
		<fieldset>
			<legend><?php echo esc_attr($description); ?></legend>
			<table class="form-table">
				<tr>
					<th>
						<label for="<?php echo esc_attr( $args['content'] . '-filed_type' ); ?>"><?php echo esc_html( __( 'Field type', 'color-picker-field-with-contact-form-7' ) ); ?></label>
					</th>
					<td>
						<input type="checkbox" name="required" class=" required_files" required>
						<label><?php echo esc_html( __( 'Required Field', 'color-picker-field-with-contact-form-7' ) ); ?></label>
					</td>
				</tr>
				<tr>
                    <th scope="row">
                        <label for="<?php echo esc_attr($args['content'] . '-defaultcolor'); ?>"><?php echo esc_html(__('Default value (optional)', 'color-picker-field-with-contact-form-7')); ?>
                        </label>
                        <br>
                    </th>
                    <td>
                        <input type="text" name="defaultcolor" class="defaultcolorvalue oneline option" id="<?php echo esc_attr($args['content'] . '-defaultcolor'); ?>" value="#b5428d" />
                         <p class="description">
	                        <?php echo esc_html(__(' Give default color value.', 'color-picker-field-with-contact-form-7')); ?><br/><?php echo esc_html( __( 'e.g.(#2d7d84)', 'color-picker-field-with-contact-form-7' ) ); ?>
	                     </p>
                    </td>
                </tr>
                <tr>
					<th><?php echo esc_html( __( 'Name', 'color-picker-field-with-contact-form-7' ) ); ?></th>
					<td>
						<input type="text" name="name">
					</td>
				</tr>
				<tr>
					<th scope="row"><label for="<?php echo esc_attr( $args['content'] . '-id' ); ?>"><?php echo esc_html( __( 'Id Attribute', 'color-picker-field-with-contact-form-7' ) ); ?></label></th>
					<td><input type="text" name="id" class="colorpicker_id oneline option" id="<?php echo esc_attr( $args['content'] . '-id' ); ?>" /></td>
				</tr>
				<tr>
					<th scope="row"><label for="<?php echo esc_attr( $args['content'] . '-class' ); ?>"><?php echo esc_html( __( 'Class Attribute', 'color-picker-field-with-contact-form-7' ) ); ?></label></th>
					<td><input type="text" name="class" class="colorpicker_value oneline option" id="<?php echo esc_attr( $args['content'] . '-class' ); ?>" /></td>
				</tr>
				<tr>
			        <th scope="row"><label for="<?php echo esc_attr( $args['content'] . '-color_format' ); ?>"><?php echo esc_html( __( 'Color Picker Format', 'color-picker-field-with-contact-form-7' ) ); ?></label>
			        </th>
			        <td>
			            <input type="radio" name="color_format" id="<?php echo esc_attr( $args['content'] . '-color_format' );?>" value="rgba" class="option" checked><?php echo esc_html( __( 'Rgba', 'color-picker-field-with-contact-form-7' ) ); ?>
			            <input type="radio" name="color_format" id="<?php echo esc_attr( $args['content'] . '-color_format' );?>" value="hex" class="option"><?php echo esc_html( __( 'Hex', 'color-picker-field-with-contact-form-7' ) ); ?> 
			        </td>
		      	</tr> 
				<tr>
                    <th scope="row"><label for="<?php echo esc_attr($args['content'] . '-back_color'); ?>"><?php echo esc_html(__('Color Popup Background Color', 'color-picker-field-with-contact-form-7')); ?>
                        </label></th>
                    <td><input type="text" name="back_color" class="backgroundcolor oneline option" id="<?php echo esc_attr($args['content'] . '-back_color'); ?>" value="#333" /></td>
                </tr>
				<tr class="font-size">
                    <th scope="row"><label for="<?php echo esc_attr($args['content'] . '-width'); ?>"><?php echo esc_html(__('Color Popup Width', 'color-picker-field-with-contact-form-7')); ?>
                        </label></th>
                    <td><input type="number" id="<?php echo esc_attr($args['content'] . '-width'); ?>" name="width" class="width oneline option" value="180">
                    </td>
                </tr>
            	<tr class="font-size">
                    <th scope="row"><label for="<?php echo esc_attr($args['content'] . '-height'); ?>"><?php echo esc_html(__('Color Popup Height', 'color-picker-field-with-contact-form-7')); ?>
                        </label></th>
                    <td><input type="number" id="<?php echo esc_attr($args['content'] . '-height'); ?>" name="height" class="height oneline option" value="180">
                    </td>
                </tr>
                <tr class="font-size">
                    <th scope="row"><label for="<?php echo esc_attr($args['content'] . '-padding'); ?>"><?php echo esc_html(__('Color Popup Padding', 'color-picker-field-with-contact-form-7')); ?>
                        </label></th>
                    <td><input type="number" id="<?php echo esc_attr($args['content'] . '-padding'); ?>" name="padding" class="padding oneline option" value="18">
                    </td>
                </tr>
                <tr>
			        <th scope="row"><label for="<?php echo esc_attr($args['content'] . '-preview_size'); ?>"><?php echo esc_html(__('Preview Size', 'color-picker-field-with-contact-form-7')); ?>
                        </label></th>
			        <td><input type="number" id="<?php echo esc_attr($args['content'] . '-preview_size'); ?>" name="preview_size" class="preview_size oneline option" value="80">
                    </td>
			    </tr>
			    <tr>
                	<th scope="row"><label for="<?php echo esc_attr($args['content'] . '-box_position'); ?>"><?php echo esc_html( __( 'Select Position', 'color-picker-field-with-contact-form-7' )); ?></label></th>
                    <td>
                        <input type="radio" name="box_position" id="<?php echo esc_attr( $args['content'] . '-box_position' );?>" value="left" class="option" checked><?php echo esc_html( __( 'Left', 'color-picker-field-with-contact-form-7' ) ); ?>
			            <input type="radio" name="box_position" id="<?php echo esc_attr( $args['content'] . '-box_position' );?>" value="right" class="option"><?php echo esc_html( __( 'Right', 'color-picker-field-with-contact-form-7' ) ); ?> 
			            <input type="radio" name="box_position" id="<?php echo esc_attr( $args['content'] . '-box_position' );?>" value="top" class="option"><?php echo esc_html( __( 'Top', 'color-picker-field-with-contact-form-7' ) ); ?> 
			            <input type="radio" name="box_position" id="<?php echo esc_attr( $args['content'] . '-box_position' );?>" value="bottom" class="option" checked><?php echo esc_html( __( 'Bottom', 'color-picker-field-with-contact-form-7' ) ); ?> 
                    </td>
                </tr>

			</table>
		</fieldset>
	</div>
	<div class="insert-box"> 
		<input type="text" name="<?php echo esc_attr($type); ?>" class="tag code" readonly="readonly" onfocus="this.select()" />
		<div class="submitbox">
			<input type="button" class="button button-primary insert-tag" value="<?php echo esc_attr( __( 'Insert Tag', 'color-picker-field-with-contact-form-7' ) ); ?>" />
		</div>
		<br class="clear" />
		<p class="description mail-tag">
			<label for="<?php echo esc_attr( $args['content'] . '-mailtag' ); ?>"><?php echo sprintf( esc_html( __( "To use the value input through this field in a mail field, you need to insert the corresponding mail-tag (%s) into the field on the Mail tab.", 'color-picker-field-with-contact-form-7' ) ), '<strong><span class="mail-tag"></span></strong>' ); ?>
				<input type="text" class="mail-tag code hidden" readonly="readonly" id="<?php echo esc_attr( $args['content'] . '-mailtag' ); ?>" />
			</label>
		</p>
	</div>
	<?php
	}
?>