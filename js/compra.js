// declramos las variables a ultilizar 
const formulario=document.getElementById('formulario');
var respuesta = document.getElementById('respuesta');
const confId = document.getElementById('id');
const sede = document.getElementById('sede');
const semestre = document.getElementById('semestre');
const carrera = document.getElementById('carrera');
const inputFecha = document.getElementById('fecha');
let fecha = new Date();
const anoActual = fecha.getFullYear();
const dia = fecha.getDate();
const mesActual = fecha.getMonth() + 1; 
var datosSede=new Array(1);

// creamos el evento addEventListener
 window.addEventListener('load',()=>{
    inputFecha.value= anoActual+'-'+mesActual+'-'+dia;
    inputFecha.style.display='none';
    obtenerDatosSede();
    console.log(datosSede);
    
 });

formulario.addEventListener('submit',(e)=>{
 e.preventDefault();
 respuesta.style.display = 'block';
 validarFormulario();

});

//obtener la informacion de las sedes que existen en la bd de la univercidad de cordoba
function obtenerDatosSede(){
    //var datos = new FormData(formulario);
    var url='../php/datosSede.php';
    fetch(url,{
        method: 'POST',
        body: ''
    })
    .then( res => res.json())
    .then( data => {
     
        for(let i=0; i<data.length; i++){
        let opcion=document.createElement('option');
          opcion.value=data[i].id;
           opcion.innerHTML=data[i].nombre;
          sede.appendChild(opcion);
          datosSede[i+1]=data[i].numeroFichos;
        }
      
    
    });
}
//Metodo para enviar los datos 

function enviarDatos(){
    var datos = new FormData(formulario);
    var url='../php/compra.php';
    fetch(url,{
        method: 'POST',
        body: datos
    })
    .then( res => res.json())
    .then( data => {
      
     if(data === 'si'){
        respuesta.innerHTML = `
        <div class="alert alert-success" role="alert">
            Compra Exitosa
        </div>
        `;
        }
   
      
    });
}

function validarFormulario(){
if(confId.value=="" || sede.value=="" || semestre.value =="" || carrera.value=="" || inputFecha.value==""){
   
    respuesta.innerHTML = `
    <div class="alert alert-danger" role="alert">
              LLene todo los Campos
    </div>
    `;
    
}else{
    enviarDatos();
    formulario.reset();
    respuesta.innerHTML = `
    <div class="alert alert-success" role="alert">
        Compra Exitosa
    </div>
    `;
   
}
setTimeout(()=>{
    respuesta.style.display = 'none';
},2000);
}