console.log("primeiro console log")
/*CRIAR validação da matrícula,CPF, nome(iniciais em maiúsculo SE POSSÍVEL!), celular,Siape,DEFINIR LIMITE DE SENHA*/

//Constantes
const cpf = document.querySelector('#cpf');
const data = document.querySelector('#data');
const celular = document.querySelector('#celular')
//Validando CPF
cpf.addEventListener('keypress', () => {
    let inputlength = cpf.value.length;
    //no cpf tem: 3 números+ 1 ponto, 3 números + 1 ponto, tracinho 2 números
    if (inputlength === 3 || inputlength === 7) {
        cpf.value += '.';
    } else if (inputlength === 11) {
        cpf.value += '-';
    }
})

//Validando Data
data.addEventListener('keypress', ()=>{
    let datalength = data.value.length;
    if(datalength == 2 || datalength == 5){
        data.value += '/';
    }
})

//Validando celular
celular.addEventListener('keypress', () => {
    let celularlength = celular.value.length
    if (celularlength == 2) {
        celular.value += " "
    }
    if (celularlength == 10) {
        celular.value += "-"
    }
})