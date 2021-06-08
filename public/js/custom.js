// const password = document.querySelector('#userPass');
// const togglePassword = document.querySelector('#togglePass');
// togglePassword.addEventListener('click', function (e) {
//     // toggle the type attribute
//     const type = password.getAttribute('type') === 'password' ? 'text' : 'password';
//     password.setAttribute('type', type);
//     // toggle the eye slash icon
//     this.classList.toggle('bi-eye-slash text-primary');
// });

$("body").on('click', '#togglePass', function() 
    {
        var toggle = document.getElementById('togglePass');
        if(toggle.innerHTML === "SHOW PASSWORD") toggle.innerHTML = "HIDE PASSWORD";
        else if(toggle.innerHTML !== "SHOW PASSWORD") toggle.innerHTML = "SHOW PASSWORD";
    var input = $("#userPass");
    if (input.attr("type") === "password") 
    {
        input.attr("type", "text");
    } 
    else 
    {
        input.attr("type", "password");
    }
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