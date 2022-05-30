//Ejecutando funciones
document.getElementById("btn__iniciar-sesion").addEventListener("click", iniciarSesion);
document.getElementById("btn__registrarse").addEventListener("click", register);
window.addEventListener("resize", anchoPage);
$('span.field-validator').hide()

//Declarando variables
var formulario_login = document.querySelector(".formulario__login");
var formulario_register = document.querySelector(".formulario__register");
var contenedor_login_register = document.querySelector(".contenedor__login-register");
var caja_trasera_login = document.querySelector(".caja__trasera-login");
var caja_trasera_register = document.querySelector(".caja__trasera-register");

//FUNCIONES

function anchoPage() {

    if (window.innerWidth > 850) {
        caja_trasera_register.style.display = "block";
        caja_trasera_login.style.display = "block";
    } else {
        caja_trasera_register.style.display = "block";
        caja_trasera_register.style.opacity = "1";
        caja_trasera_login.style.display = "none";
        formulario_login.style.display = "block";
        contenedor_login_register.style.left = "0px";
        formulario_register.style.display = "none";
    }
}

function required(field) {
    $(`#${field}`).toggle()
}

$('form#form-register').submit(function (evt) {
    evt.preventDefault(); // Previene la redirección del botón
    $('span.field-validator').hide() // Esconde los validatores

    // Expresiones regulares para validar campos
    var regexEmail = /^(([^<>()[\]\.,;:\s@\"]+(\.[^<>()[\]\.,;:\s@\"]+)*)|(\".+\"))@(([^<>()[\]\.,;:\s@\"]+\.)+[^<>()[\]\.,;:\s@\"]{2,})$/i // email
    var onlyLetters = /^[a-zA-Z-A-Za-zàáâãäåçèéêëìíîïðòóôõöùúûüýÿñÑÀÁÂÃÄÅÇÈÉÊËÌÍÎÏÒÓÔÕÖÙÚÛÜÝ'-\s]*$/ // Solo texto, espacio y tildes

    var fullname = document.getElementById("fullname").value.trim();
    var email = document.getElementById("email").value.trim();
    var username = document.getElementById("username").value.trim();
    var password = document.getElementById("password").value.trim();
    var confirmPassword = document.getElementById("confirm-password").value.trim();
    if (fullname == "") {
        $('span#validator-fullname').show()
    }
    else{
        if(!onlyLetters.test(fullname)){
            $('span#validator-fullname-only-letters').show()
        }
    }
    if (email == "") {
        $('span#validator-email').show()
    }
    else {
        if (!regexEmail.test(email)) {
            $('span#validator-email-regex').show()
        }
    }

    if (username == "") {
        $('span#validator-username').show()
    }
    if (password == "") {
        $('span#validator-password').show()
    }
    if(password != "" && confirmPassword != "" && password != confirmPassword){
        $('span#validator-verify-password').show()
    }

    var serializedData = $(this).serialize();
    
    $.ajax({
        type: "POST",
        url: 'controlador/registro.php',
        data: serializedData,
        success: function(e) {
            // e will be whatever you've returned from your login.php script
    
            // Perform conditional check on e 
            if (e === 'success') {
                // Alert message here
                alert("You've been logged in!");
    
                // Redirect user here as needed
            }
        },
    });
})


anchoPage();


function iniciarSesion() {
    if (window.innerWidth > 850) {
        formulario_login.style.display = "block";
        contenedor_login_register.style.left = "10px";
        formulario_register.style.display = "none";
        caja_trasera_register.style.opacity = "1";
        caja_trasera_login.style.opacity = "0";
    } else {
        formulario_login.style.display = "block";
        contenedor_login_register.style.left = "0px";
        formulario_register.style.display = "none";
        caja_trasera_register.style.display = "block";
        caja_trasera_login.style.display = "none";
    }
}

function register() {
    if (window.innerWidth > 850) {
        formulario_register.style.display = "block";
        contenedor_login_register.style.left = "410px";
        formulario_login.style.display = "none";
        caja_trasera_register.style.opacity = "0";
        caja_trasera_login.style.opacity = "1";
    } else {
        formulario_register.style.display = "block";
        contenedor_login_register.style.left = "0px";
        formulario_login.style.display = "none";
        caja_trasera_register.style.display = "none";
        caja_trasera_login.style.display = "block";
        caja_trasera_login.style.opacity = "1";
    }
}