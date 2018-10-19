function submitForm() {
    var title = $('#title').val();
    var image = $('#image').val();
    var content = tinyMCE.get('content').getContent({format: 'raw'});
    var status = $('input[name=status]:checked').val();
    var urlParams = new URLSearchParams(window.location.search);
    var id = urlParams.get('id');


    console.log("title = " + title, "content = " + content, "status = " + status);
    $.ajax({
        url: 'submitPostEdition.php',
        type: 'post',
        data: {
            'title': title,
            'image': image,
            'content': content,
            'status': status,
            'id': id,
        },
        success: function () {
            alert('article sauvegardé');
            location.replace(document.referrer);
        }
    });
}