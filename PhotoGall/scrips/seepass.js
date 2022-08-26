//FUNCION PARA MOSTRAR CONTRASEÑA EN LOGIN Y REGISTER
function mostrarContraseña() {
    var tipo = document.getElementById("Passwordf");
    if (tipo.type == "password") {
        tipo.type = "text";
    } else {
        tipo.type = "password";
    }

}
