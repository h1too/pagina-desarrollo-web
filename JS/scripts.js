const myform = document.getElementById('myform')

function MuestraDatos(){
    var mensaje="Los datos fueron enviados correctamente y seran revisados por nuestros operadores";
        mensaje = mensaje+
    alert(mensaje);
}

myform.addEventListener('submit', (ev)=>{
    ev.preventDefault();
    let data = new FormData(myform);
    fetch('../datos.php',{
        method: "GET",
        body: data
    })
    .then(res => res.json())
    .then(text => console.log(text))
})