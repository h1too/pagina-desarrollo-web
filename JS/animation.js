"use strict"
const ul = document.querySelector(".container");

function frames(){
    const animacion = ul.animate([
        {transform: "TranslateY(0px)"},
        {transform: "TranslateY(-100px)"}
    ],{
        //Opciones
        easing: "linear",
        iterations: 1,
        duration: 200 //milisegundos
    });
    return animacion.finished;
}
function displace(){
    frames()
    .then((res)=>{
        console.log(res);
        ul.appendChild(document.querySelector("ul > li")[0])
    })
}

setInterval(()=>{
    displace();
}, 1000);
