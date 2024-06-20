//Cabesario sube menu
const perfil = document.querySelector('.perfil');
const menu = document.querySelector('.menu');

perfil.onclick = () =>{
    menu.classList.toggle('ativo')
}

//carrosel de imagem (tempo de trasisao)
let count = 1;
document.getElementById("radio1").checked = true;

setInterval (function(){
    nexImage()
}, 5000)

function nexImage(){
    count++;
    if(count>4){
        count = 1;
    }

    document.getElementById("radio"+count).checked = true;
}