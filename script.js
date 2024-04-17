$('.show-to').click(function(){
  $('.show-to2').slideToggle();
});

function togglePasswordVisibility() {
    var passwordInput = document.querySelector('[name="password"]');
    if (passwordInput.type === 'password') {
        passwordInput.type = 'text';
    } else {
        passwordInput.type = 'password';
    }
}
