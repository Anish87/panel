const password = document.querySelector('#userPass');
const togglePassword = document.querySelector('#togglePass');
togglePassword.addEventListener('click', function (e) {
    // toggle the type attribute
    const type = password.getAttribute('type') === 'password' ? 'text' : 'password';
    password.setAttribute('type', type);
    // toggle the eye slash icon
    this.classList.toggle('fa-eye-slash fa-eye');
});

/* Code for changing active link on clicking */
var btns = $(".navbar-nav .nav-link");

for (var i = 0; i < btns.length; i++) {
    btns[i].addEventListener("click",
                            function () {
        var current = document
            .getElementsByClassName("active");

        current[0].className = current[0]
            .className.replace(" active", "");

        this.className += " active";
    });
}