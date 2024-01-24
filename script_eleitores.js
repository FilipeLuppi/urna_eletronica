let space_eleitor = document.querySelector("#nome_eleitor");
let space_ausente = document.querySelector("#alerta_ausente");
let space_button = document.querySelector("#votar");

    
    //space_eleitor.innerHTML="";
    //space_ausente.innerHTML="";
    //space_button.style.display="none"


    let titEleitorDigitado = document.getElementById("tit_eleitor").value;

    function atualizaInterface() {
    
        let eleitorEncontrado = eleitores.find(eleitor => {
        if (eleitor.tit_eleitor === parseInt(titEleitorDigitado)){
            return true;
        }else {
            return false;
        }
    });
        if (titEleitorDigitado.length === 12 && eleitorEncontrado){
            space_eleitor.innerHTML=`Nome: ${eleitorEncontrado.nome}`;
            space_button.style.display="block";
        };
        if (titEleitorDigitado.length === 12 && eleitorEncontrado === false){
            space_eleitor.innerHTML=`Nome: XXXXXXXXXXXXXXXXXX`;
            space_ausente.style.display="block";
        };
    };
    atualizaInterface();