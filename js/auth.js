// Auth
$("#authBtn").click(function() {
  const login = $('#login').val()
  const password = $('#password').val()

  $.ajax({
    url: '/includes/auth.php',
    type: 'POST',
    cache: false,
    data: {
      login,
      password
    },
    dataType: 'html',
    success: function(data) {
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
  $( document ).ready( function () {
    $( "#authForm" ).validate( {
      rules: {
        login: {
          required: true,
        },
        password: {
          required: true,
        },
        },
      messages: {
        login: {
          required: "Введите логин",
        },
        password: {
          required: "Введите пароль",
        },
      },
    } );
    } );

