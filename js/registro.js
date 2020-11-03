function validarRegistro(){

    var flagValidateEmail=true;
    var flagValidatePassword=true;
    var flagValidatePassword2=true;

    var email=document.getElementById('email').value;
    var password=document.getElementById('password').value;
    var password2=document.getElementById('password2').value;

    var regex= /^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/;

    var errorEmail=document.getElementById('errorEmail');
    var errorPassword=document.getElementById('errorPassword');
    var errorPassword2=document.getElementById('errorPassword2');

    errorEmail.innerHTML="";
    errorPassword.innerHTML="";
    errorPassword2.innerHTML="";
    
    if(email == ""){
        errorEmail.innerHTML+="<li>Ingrese Email</li>";
        errorEmail.style.background="#f64e60";
        flagValidate=false;
    }
    if(!regex.test(email)){
        errorEmail.innerHTML+="<li>Correo Invalido</li>";
        errorEmail.style.background="#f64e60";
        flagValidate=false;
    }

    if(password == ""){
        errorPassword.innerHTML+="<li>Ingrese Contraseña</li>";
        errorPassword.style.background2="#f64e60";
        flagValidate=false;
    }
    if(password.length <8){
        errorPassword.innerHTML+="<li>Minimo 8 Caracteres</li>";
        errorPassword.style.background="#f64e60";
        flagValidate=false;
    }

    if(password2 == ""){
        errorPassword2.innerHTML+="<li>Ingrese Contraseña</li>";
        errorPassword2.style.background2="#f64e60";
        flagValidate=false;
    }
    if(password2.length <8){
        errorPassword2.innerHTML+="<li>Minimo 8 Caracteres</li>";
        errorPassword2.style.background="#f64e60";
        flagValidate=false;
    }

    if(password != password2){
        errorPassword.innerHTML+="<li>Las Contraseñas Deben De Ser Iguales</li>";
        errorPassword2.innerHTML+="<li>Las Contraseñas Deben De Ser Iguales</li>";
        errorPassword.style.background="#f64e60";
        errorPassword2.style.background="#f64e60";
        flagValidatePassword=false;
        flagValidatePassword2=false;
    }

    if(flagValidateEmail){
        errorEmail.style.background="#fff";
    }
    if(flagValidatePassword){
        errorPassword.style.background="#fff";
    }
    if(flagValidatePassword2){
        errorPassword2.style.background="#fff";
    }

}