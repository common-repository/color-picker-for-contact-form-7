jQuery( document ).ready(function() {
    console.log( "backend ready!" );

    jQuery('.defaultcolorvalue').each(function(index, value) {
        var back_name =  jQuery(this).attr("name");
        // var back_defaultcolor =  jQuery(this).attr("class");
        // console.log(back_name);

        // var mybackPicker = new JSColor("#"+back_id, {format:'rgba'});
        var mybackPicker = new JSColor("input[name="+ back_name +"]");

        mybackPicker.option('previewSize', 50);

        mybackPicker.option({
            'width': 140,
            'position': 'bottom',
            'backgroundColor': '#333'
        });
   
      });
    jQuery('.backgroundcolor').each(function(index, value) {
        var back_color =  jQuery(this).attr("name");
        // console.log(back_color);

        // var mybackPicker = new JSColor("#"+back_id, {format:'rgba'});
        var mybackPicker = new JSColor("input[name="+ back_color +"]");

        mybackPicker.option('previewSize', 50);

        mybackPicker.option({
            'width': 140,
            'position': 'bottom',
            'backgroundColor': '#333'
        });
   
      });
});