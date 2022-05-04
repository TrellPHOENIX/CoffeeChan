//Reg
    $("#regBtn").click(function () {
    const name = $('#name').val()
    const login = $('#login').val()
    const password = $('#password').val()

    $.ajax({
        url: '/includes/reg.php',
        type: 'POST',
        cache: false,
        data: {name, login, password},
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
type="text/javascript">
$.validator.setDefaults( {
submitHandler: function () {
location.href = '/auth.php'
}
} );
$( document ).ready( function () {
$( "#regForm" ).validate( {
    rules: {
        name: "required",
        login: {
            required: true,
            minlength: 3
        },
        password: {
            required: true,
            minlength: 5
        },
        },
      messages: {
        name: "Введите свое имя",
        login: {
            required: "Придумайте логин",
            minlength: "Логин должен содержать не менее 3 символов"
        },
        password: {
            required: "Придумайте пароль",
            minlength: "Логин должен содержать не менее 5 символов"
        },
    },
} );
} );
