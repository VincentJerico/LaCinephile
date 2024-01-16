const showPasswordCheckbox = document.getElementById('showPassword');
const passwordInput = document.getElementById('password');

showPasswordCheckbox.addEventListener('change', function() {
    if (this.checked) {
    passwordInput.type = 'text';
    passwordInput.classList.add('hide-password');
    } else {
    passwordInput.type = 'password';
    passwordInput.classList.remove('hide-password');
    }
});