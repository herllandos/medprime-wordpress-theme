jQuery(function ($) {

    let mediaUploader;

    $('#medprime-upload-photo').on('click', function (e) {

        e.preventDefault();

        if (mediaUploader) {
            mediaUploader.open();
            return;
        }

        mediaUploader = wp.media({
            title: 'Selecionar Foto',
            button: {
                text: 'Usar esta foto'
            },
            multiple: false
        });

        mediaUploader.on('select', function () {

            const attachment = mediaUploader.state().get('selection').first().toJSON();

            $('#doctor_photo').val(attachment.id);

            $('#doctor-photo-preview').html(
                '<img src="' +
                attachment.sizes.thumbnail.url +
                '" style="max-width:150px;border-radius:12px;">'
            );

        });

        mediaUploader.open();

    });

});