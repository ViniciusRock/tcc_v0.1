const celular = document.getElementById('celular')

//Validando celular
celular.addEventListener('keypress', () => {
    let celularlength = celular.value.length
    if (celularlength == 2) {
        celular.value += " "
    }
    if (celularlength == 6 || celularlength == 10) {
        celular.value += "-"
    }
})
function mostrarOcultarSenha(){
    var senha = document.getElementById("senha");
    if(senha.type=="password"){
        senha.type = "text";
    }
    else{
        senha.type="password";
    }
}