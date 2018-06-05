 

$(function () {
    //TinyMCE
    tinymce.init({
        selector: "textarea#tinymce",
        theme: "modern",
        height: 300,
        plugins: [
            'advlist autolink lists link image charmap print preview hr anchor pagebreak',
            'searchreplace wordcount visualblocks visualchars code fullscreen',
            'insertdatetime media nonbreaking save table contextmenu directionality',
            'emoticons template paste textcolor colorpicker textpattern imagetools',
        ],
        toolbar1: 'insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image',
        toolbar2: 'print preview media | forecolor backcolor emoticons',
        entity_encoding : "raw",
        image_advtab: true,
        
        file_browser_callback: function(field_name, url, type, win) {
                console.log("field name: " +field_name+" url : "+url+" type: " + type +"win :" + win);
                var filebrowser = "http://www.termoelektrik.net/panel/giris_yonetim/upload" ;
                tinymce.activeEditor.windowManager.open({
                title : "Resim Seçiniz",
                width : 520,
                height : 400,
                url : filebrowser,
                resizable: "yes",
                buttons: [{
                text: 'Ekle',
                onclick: function () {
                    //.. do some work
                    tinymce.activeEditor.windowManager.close();
                }
                }, {
                    text: 'Çıkış',
                    onclick: 'close'
                }],
                }, {
                window : win,
                input : field_name
                });
                return false;
                
        }
    });

    tinymce.suffix = ".min";
    tinyMCE.baseURL = '/public/admin/plugins/tinymce';

});