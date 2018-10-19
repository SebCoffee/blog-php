function submitForm() {
    var title = $('#title').val();
    var content = $('#email').val();
    var image = $('#image').val();
    var status = $('input[name=status]').val();
    $.ajax({
        url: 'submitPostCreation.php',
        type: 'post',
        data: {
            'title': title,
            'image': image,
            'content': content,
            'status': status
        },
        success: function () {
            alert('article sauvegardé');
            location.replace(document.referrer);
        }
    });
}
