// declramos las variables a ultilizar 
const formulario=document.getElementById('formulario');
var respuesta = document.getElementById('respuesta');
const confId = document.getElementById('id');
const sede = document.getElementById('sede');
const semestre = document.getElementById('semestre');
const inputFecha = document.getElementById('fecha');
let fecha = new Date();
const anoActual = fecha.getFullYear();
const dia = fecha.getDate();
const mesActual = fecha.getMonth() + 1; 
var datosSede=new Array(1);
let idC=localStorage.getItem('cedula');
var numeroRegistros=new Array(1);

// creamos el evento addEventListener
 window.addEventListener('load',()=>{
    inputFecha.value= anoActual+'-'+mesActual+'-'+dia;
    inputFecha.style.display='none';
    obtenerDatosSede();
 });

formulario.addEventListener('submit',(e)=>{
 e.preventDefault();
 respuesta.style.display = 'block';
 validarFormulario();

});

/* con este metodo actualizo el saldo del estudiante cuando la compra es exitosa 

*/


function actualizarSaldo(){
    var datos = new FormData(formulario); 
    var url = '../php/actualizarSaldo.php';
    fetch(url,{
       method: 'POST',
       body: datos 
    })
    .then(res => res.json())
    .then( inf => {
        console.log(inf);
    });

}

/* Metodo para consultar  cuantos fichos se han comprado en la sede seleccionada por los 
   estudiantes en un dia x 
*/
function cantidadFichosSede(){

var datos = new FormData(formulario); 
var url = '../php/cantidadFichosCompardosxDias.php';
fetch(url,{
    method: 'POST',
    body: datos
})
.then(res => res.json())
.then(data =>{
    for(let i=0; i<data.length; i++){
        numeroRegistros[i]=data[i].numeroRegistro;    
    }

    // validamos si la cantidad de fichos es valida en  La sede seleccionada
    
    if(sede.value==='1' && numeroRegistros[0]<100){
        enviarDatos();
        actualizarSaldo();
        formulario.reset();
        respuesta.innerHTML = `
        <div class="alert alert-success" role="alert">
            Compra Exitosa Sede Lorica
        </div>
        `;   
       
    }else  if(sede.value==='2' && numeroRegistros[0]<500){
        enviarDatos();
        formulario.reset();
        respuesta.innerHTML = `
        <div class="alert alert-success" role="alert">
            Compra Exitosa Sede Monteria
        </div>
        `;   
       
    }else  if(sede.value==='3' && numeroRegistros[0]<150){
        enviarDatos();
        formulario.reset();
        respuesta.innerHTML = `
        <div class="alert alert-success" role="alert">
            Compra Exitosa Sede Sahagun
        </div>
        `;   
       
    }else  if(sede.value==='4' && numeroRegistros[0]<100){
        enviarDatos();
        formulario.reset();
        respuesta.innerHTML = `
        <div class="alert alert-success" role="alert">
            Compra Exitosa Sede Berastegui
        </div>
        `;   
       
    } else{
           respuesta.innerHTML = `
        <div class="alert alert-danger" role="alert">
            Fichos Insuficientes Para Esa Sede
        </div>
        `; 
        
   
    }
  
   
    console.log(numeroRegistros[0])
   
    
});

}


//Obtener la informacion de las sedes que existen en la bd de la univercidad de cordoba
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
//Metodo para Guardar las Compras a La Base de Datos 

function enviarDatos(){
    var datos = new FormData(formulario);
    var url='../php/compra.php';
    fetch(url,{
        method: 'POST',
        body: datos
    })
    .then( res => res.json())
    .then( datas => {
      
     if(datas === 'si'){
     
       
        }
   
      
    });
}

function validarFormulario(){
if(confId.value=="" || sede.value=="" || semestre.value =="" || inputFecha.value==""){
    respuesta.innerHTML = `
    <div class="alert alert-danger" role="alert">
              LLene todo los Campos
    </div>
    `;
    
}else{

    if(confId.value!=idC){
        respuesta.innerHTML = `
         <div class="alert alert-danger" role="alert">Id Del Estudiante Incorrecto!</div>`;
    }else{
        cantidadFichosSede();
    }
       
}

setTimeout(()=>{
    respuesta.style.display = 'none';
},2000);
}