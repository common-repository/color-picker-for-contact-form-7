jQuery( document ).ready(function() {
    // console.log( "ready!" );
     // jQuery(".cpfcf7_colorpicker").hide();
    var multiple = 1;
    jQuery('.colorpicker_input_class').each(function(index, value) {
        if(multiple == 1){
            
            var name =  jQuery(this).attr("name");
            var defaultcolor =  jQuery(this).attr("defaultcolor");
            var color_format =  jQuery(this).attr("color_format");
            var back_color =  jQuery(this).attr("back_color");
            var max_width =  jQuery(this).attr("width");
            var width = parseInt(max_width);
            var max_height =  jQuery(this).attr("height");
            var height = parseInt(max_height);
            var box_padding =  jQuery(this).attr("padding");
            var padding =  parseInt(box_padding);
            var preview_size =  jQuery(this).attr("preview_size");
            var field_preview_size =  parseInt(preview_size);
            var box_position =  jQuery(this).attr("box_position");

            var myPicker = new JSColor("input[name="+ name +"]", {format: color_format});

            myPicker.option('previewSize', field_preview_size);

            myPicker.option({
                'width': width,
                'height': height,
                'position': box_position,
                'backgroundColor': back_color,
                'padding': padding, 
            });
        }else {
            jQuery(this).closest('.cpfcf7_colorpicker').html("<p>Multiple Color Picker is Valid in pro version of color picker for contact form 7 <a href='https://topsmodule.com/product/color-picker-for-contact-form-7/' target='_blank'>Click here Get Pro Version</a></p>");
        }
        multiple++;
    });
});