
jQuery(document).ready(function($){
 
 
    jQuery("#upload_image_button").click(function(e){uploadJsWordpress(e,"upload_image")});

 
    

    function uploadJsWordpress(e,input) {
 
        e.preventDefault();
 
        //If the uploader object has already been created, reopen the dialog
        if (custom_uploader) {
            custom_uploader.open();
            return;
        }
 
        //Extend the wp.media object
        var custom_uploader = wp.media.frames.file_frame = wp.media({
            title: "Scegli l'immagine",
            button: {
                text: 'Seleziona'
            },
            multiple: false
        });
 
        //When a file is selected, grab the URL and set it as the text field's value
        custom_uploader.on('select', function() {
            attachment = custom_uploader.state().get('selection').first().toJSON();
            $('#'+input).val(attachment.url);
            $('#preview_'+input).attr("src",attachment.url);
        });
 
        //Open the uploader dialog
        custom_uploader.open();
 
    };

 
});