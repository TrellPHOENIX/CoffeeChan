    //Edit Post
    $("#editBtn").click(function () {
        const title = $('#title').val()
        const category = $('#category').val()
        const text = $('#text').val()
        const image = $('#image').val()
    $.ajax({
        url: '/includes/edit.php',
        type: 'POST',
        cache: false,
        data: {title, category, text, image},
        dataType: 'html',
        success: function (data) {
            if (data == 'ready') {
                $('#errorSpan').hide()
                location.href = '/'
            } else {
                $('#errorSpan').show()
                $('#errorSpan').text(data)
            }
        }
    })
})