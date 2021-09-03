const formulario =  document.querySelector('#formulario');
const sede =  document.querySelector('#sede');
const fecha =  document.querySelector('#fecha');
const tabla = document.getElementById('tabla');
const cantidadComprada= document.getElementById('cantidadComprada');
const cantidadDisponible= document.getElementById('cantidadDisponible');
const boton = document.getElementById('boton');
// obtener la fecha actual del sistema 
let fechaactual= new Date();
let anoActual= fechaactual.getFullYear();
let mesActual = fechaactual.getMonth()+1;
let diaActual= fechaactual.getDate();


// ejecutamos los eventos al momento de ingresar al pagina 

window.addEventListener('load',()=>{
   fecha.value=anoActual+'-'+mesActual+'-'+diaActual;
   sede.value=4;
   Listaberastigui();
});


// metodo para crear la peticion del listado de las compras diarias de la sede lorica 

function Listaberastigui(){
    var datos = new FormData(formulario);
    var url ='../php/informacionVentaPorSede.php';
    fetch(url,{
      method: 'POST',
      body: datos
    })
    .then( res => res.json())
    .then(data =>{
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
        let cantidad=100-data.length;
        cantidadComprada.textContent=`Cantidad de Compra: ${data.length} Fichos`;
        if(cantidad===0){
          cantidadDisponible.textContent='No Hay Fichos Disponibes';
          cantidadDisponible.style.backgroundColor='red';
          cantidadDisponible.style.width='202px';
        }else{
          cantidadDisponible.textContent=`Disponibles: ${cantidad} Fichos`

        }
         tabla.appendChild(tbody); 
    });

}


// evento click
boton.addEventListener('click',()=>{
  var doc = new jsPDF();
  
 
  doc.text(20, 20, cantidadComprada.textContent);
  var elementHTML = document.querySelector('.tabla');
  var specialElementHandlers = {
      '#elementH': function (element, renderer) {
          return true;
      }
  };
  doc.fromHTML(elementHTML, 15, 15, {
      'width': 170,
      'elementHandlers': specialElementHandlers
  });
  
  // Save the PDF
  doc.save('sede-Berastigui.pdf');

})