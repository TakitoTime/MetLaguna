
function validarSesion(){

    var flagValidateEmail=true;
    var flagValidatePassword=true;
    var email=document.getElementById('email').value;
    var password=document.getElementById('password').value;

    var regex= /^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/;

    var errorEmail=document.getElementById('errorEmail');
    var errorPassword=document.getElementById('errorPassword');

    errorEmail.innerHTML="";
    errorPassword.innerHTML="";
    
    if(email == ""){
        errorEmail.innerHTML+="<li>Ingrese Email</li>";
        errorEmail.style.background="#f64e60";
        flagValidateEmail=false;
    }
    if(!regex.test(email)){
        errorEmail.innerHTML+="<li>Correo Invalido</li>";
        errorEmail.style.background="#f64e60";
        flagValidateEmail=false;
    }

    if(password == ""){
        errorPassword.innerHTML+="<li>Ingrese Contraseña</li>";
        errorPassword.style.background2="#f64e60";
        flagValidatePassword=false;    
    }
    if(password.length <8){
        errorPassword.innerHTML+="<li>Minimo 8 Caracteres</li>";
        errorPassword.style.background="#f64e60";
        flagValidatePassword=false;    
    }

    if(flagValidateEmail){
        errorEmail.style.background="#fff";
    }
    if(flagValidatePassword){
        errorPassword.style.background="#fff";
    }

    if(flagValidateEmail && flagValidatePassword){
        return true;
    }
    else{
        return false;
    }
}