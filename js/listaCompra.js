const formulario = document.getElementById('formulario');
const sede = document.getElementById('sede');
const fechaInput = document.getElementById('inputFecha');
const boton= document.getElementById('boton');
const tabla = document.getElementById('tabla');


// obtengo la fecha actual del sistema 
let fecha = new Date();
const anoActual = fecha.getFullYear();
const dia = fecha.getDate();
const mesActual = fecha.getMonth() + 1; 


// metodo para traerme los sedes de la bd 

window.addEventListener('load',()=>{
     fechaInput.value = anoActual+'-'+mesActual+'-'+dia;
   obtenerDatosSede();
    
})


// metodo para obtener las sedes de la universidad 
function obtenerDatosSede(){
    
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
         
        }
      
     
    });
}

// metodo para enviar la peticion 

function buscarInformacionSede(){
    var datos = new FormData(formulario);
    var url='../php/informacionVentaPorSede.php';
    fetch(url,{
        method: 'POST',
        body: datos
    })
    .then( res => res.json())
    .then( data => {

     

    var tbody=document.createElement('tbody');
  
        for(let i=0; i< data.length; i++){
          tbody.innerHTML +=`<tr>
          <td>${data[i].idE}</td>
          <td>${data[i].nombres}</td>
          <td>${data[i].apellidos}</td>
          <td>${data[i].carrera}</td>
          <td>${data[i].nombre}</td>
          <td>${data[i].fecha}</td>
            </tr>
           
            `;
        }
        
        
         tabla.appendChild(tbody); 
      
     
        
    });
}

// metodo onclick 

boton.addEventListener('click',()=>{
    buscarInformacionSede();
})