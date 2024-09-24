function btnSaludar(){
    //alert('Hola buenas');
    txtCont.innerText = toString(aumentarNumContados(parseFloat(toString(txtCont.innerText))));
}

var txtCont = document.getElementById("txtCont");

function aumentarNumContados(numPulsados){
    return (numPulsados + 1);
}




console.log('hola mundo');