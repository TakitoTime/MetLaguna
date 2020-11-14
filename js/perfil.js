var abrir_modal=document.getElementById("modalactive");

if(abrir_modal.dataset.value=="true"){
    $('#modalUser').modal('show');
}

function validarPasswords(){

    var flagValidatePassword=true;
    var flagValidatePassword2=true;
    var password=document.getElementById('password').value;
    var password2=document.getElementById('password2').value;

    var errorPassword=document.getElementById('errorPassword');
    var errorPassword2=document.getElementById('errorPassword2');

    errorPassword.innerHTML="";
    errorPassword2.innerHTML="";

    if(password == ""){
        errorPassword.innerHTML+="<li>Campo Vacio</li>";
        errorPassword.style.background="#f64e60";
        flagValidatePassword=false;
    }
    if(password.length <8){
        errorPassword.innerHTML+="<li>Minimo 8 Caracteres</li>";
        errorPassword.style.background="#f64e60";
        flagValidatePassword=false;
    }

    
    if(password2 == ""){
        errorPassword2.innerHTML+="<li>Campo Vacio</li>";
        errorPassword2.style.background2="#f64e60";
        flagValidatePassword2=false;
    }
    if(password2.length <8){
        errorPassword2.innerHTML+="<li>Minimo 8 Caracteres</li>";
        errorPassword2.style.background="#f64e60";
        flagValidatePassword2=false;
    }

    if(password != password2){
        errorPassword.innerHTML+="<li>Las Contraseñas Deben De Ser Iguales</li>";
        errorPassword2.innerHTML+="<li>Las Contraseñas Deben De Ser Iguales</li>";
        errorPassword.style.background="#f64e60";
        errorPasswor2.style.background="#f64e60";
        flagValidatePassword=false;
        flagValidatePassword2=false;
    }

    if(flagValidatePassword){
        errorPassword.style.background="#fff";
    }
    if(flagValidatePassword2){
        errorPassword.style.background="#fff";
    }
}

function validarDatosUsuario(){

    var flagValidateNombre=true;
    var flagValidatePaterno=true;
    var flagValidateMaterno=true;
    var flagValidateTelefono=true;
    var flagValidateEdad=true;
    var flagValidateOcupacion=true;
    var flagValidateFoto=true;
    var flagValidateNombreUsuario=true;
    
    var nombre=document.getElementById('nombre').value;
    var paterno=document.getElementById('paterno').value;
    var materno=document.getElementById('materno').value;
    var telefono=document.getElementById('telefono').value;
    var edad=document.getElementById('edad').value;
    var foto=document.getElementById('foto').value;
    var ocupacion=document.getElementById('ocupacion').value;
    var nombreUsuario=document.getElementById('nombreUsuario').value;

    var regex =/^\d+$/;

    var errorNombre=document.getElementById('errorNombre');
    var errorPaterno=document.getElementById('errorPaterno');
    var errorMaterno=document.getElementById('errorMaterno');
    var errorTelefono=document.getElementById('errorTelefono');
    var errorEdad=document.getElementById('errorEdad');
    var errorOcupacion=document.getElementById('errorOcupacion');
    var errorFoto=document.getElementById('errorFoto');
    var errorNombreUsuario=document.getElementById('errorNombreUsuario');

    errorNombre.innerHTML="";
    errorPaterno.innerHTML="";
    errorMaterno.innerHTML="";
    errorTelefono.innerHTML="";
    errorEdad.innerHTML="";
    errorOcupacion.innerHTML="";
    errorFoto.innerHTML="";
    errorNombreUsuario.innerHTML="";

    if(nombre == ""){
        errorNombre.innerHTML+="<li>Campo Vacio</li>";
        errorNombre.style.background="#f64e60";
        flagValidateNombre=false;
    }
    if(paterno == ""){
        errorPaterno.innerHTML+="<li>Campo Vacio</li>";
        errorPaterno.style.background="#f64e60";
        flagValidatePaterno=false;
    }
    if(materno == ""){
        errorMaterno.innerHTML+="<li>Campo Vacio</li>";
        errorMaterno.style.background="#f64e60";
        flagValidateMaterno=false;
    }
    if(nombreUsuario == ""){
        errorNombreUsuario.innerHTML+="<li>Campo Vacio</li>";
        errorNombreUsuario.style.background="#f64e60";
        flagValidateNombreUsuario=false;
    }
    if(foto == ""){
        errorFoto.innerHTML+="<li>Campo Vacio</li>";
        errorFoto.style.background="#f64e60";
        flagValidateFoto=false;
    }

    if(regex.test(nombre)){
        errorNombre.innerHTML+="<li>No Se Permiten Numeros</li>";
        errorNombre.style.background="#f64e60";
        flagValidateNombre=false;
    }
    if(regex.test(paterno)){
        errorPaterno.innerHTML+="<li>No Se Permiten Numeros</li>";
        errorPaterno.style.background="#f64e60";
        flagValidatePaterno=false;
    }
    if(regex.test(materno)){
        errorMaterno.innerHTML+="<li>No Se Permiten Numeros</li>";
        errorMaterno.style.background="#f64e60";
        flagValidateMaterno=false;
    }

    if(!regex.test(telefono)){
        errorTelefono.innerHTML+="<li>Solo Se Permiten Numeros</li>";
        errorTelefono.style.background="#f64e60";
        flagValidateTelefono=false;
    }
    if(!regex.test(edad)){
        errorEdad.innerHTML+="<li>Solo Se Permiten Numeros</li>";
        errorEdad.style.background="#f64e60";
        flagValidateEdad=false;
    }

    if(flagValidateNombre){
        errorNombre.style.background="#fff";
    }
    if(flagValidateNombreUsuario){
        errorNombreUsuario.style.background="#fff";
    }
    if(flagValidatePaterno){
        errorPaterno.style.background="#fff";
    }
    if(flagValidateMaterno){
        errorMaterno.style.background="#fff";
    }
    if(flagValidateTelefono){
        errorTelefono.style.background="#fff";
    }
    if(flagValidateEdad){
        errorEdad.style.background="#fff";
    }
    if(flagValidateOcupacion){
        errorOcupacion.style.background="#fff";
    }
    if(flagValidateFoto){
        errorFoto.style.background="#fff";
    }

    if(flagValidateNombre && flagValidateNombreUsuario && flagValidatePaterno && flagValidateMaterno && flagValidateTelefono && flagValidateEdad && flagValidateOcupacion && flagValidateFoto){
        return true;
    }
    else{
        return false;
    }
    
}