function submitForm(){    
    var title = $('#title').val();
    var content = $('#email').val();
    var status = $('input[name=status]').val();    
    $.ajax({
        async: false,
        url: 'submitPostCreation.php',
        type: 'post',
        data: {
            'title' : title,
            'content' : content,
            'status' : status           
        },
        success: function(){
            alert('article sauvegardé');           
        }
    });
}
