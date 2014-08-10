jQuery(document).ready(function($) {

    tinymce.create('tinymce.plugins.wpbgfycat_plugin', {
        init : function(ed, url) {
                // Register command for when button is clicked
                ed.addCommand('wpbgfycat_insert_shortcode', function() {
                    selected = tinyMCE.activeEditor.selection.getContent();

                    if( selected ){
                        //If text is selected when button is clicked
                        //Wrap shortcode around it.
                        content =  '[gfycat data_id="'+selected+'"]';
                    }else{
                        content =  '[gfycat data_id=""]';
                    }

                    tinymce.execCommand('mceInsertContent', false, content);
                });

            // Register buttons - trigger above command when clicked
            ed.addButton('wpbgfycat_button', {title : 'Insert gfycat shortcode', cmd : 'wpbgfycat_insert_shortcode', image: url + '../../img/gfycat-btn.png' });
        },   
    });

    // Register the TinyMCE plugin
    tinymce.PluginManager.add('wpbgfycat_button', tinymce.plugins.wpbgfycat_plugin);
});
