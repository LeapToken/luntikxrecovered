$('.show-to').click(function(){
  $('.show-to2').slideToggle();
});

function togglePasswordVisibility() {
    var passwordInput = document.getElementById('password');
    var type = passwordInput.getAttribute('type') === 'password' ? 'text' : 'password';
    passwordInput.setAttribute('type', type);
}
