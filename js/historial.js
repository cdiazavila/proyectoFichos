//con este  archivo metraigo todo mi historial de compras de fichos 
// decalro variables 
const formulario=document.getElementById('formulario');
const tabla=document.querySelector('.table');
const cedula=document.querySelector('#cc');
const cc=localStorage.getItem('cedula');



window.addEventListener('load',()=>{
// eventos 
cedula.value=cc;
cedula.style.display='none';
resivoDatos();
});



    function resivoDatos(){
        var datos = new FormData(formulario);
        var url='../php/ModeloHistorial.php';
        fetch(url,{
            method: 'POST',
            body: datos
        })
        .then( res => res.json())
        .then( data => {
        let tbody=document.createElement('tbody');
           
          for(let i=0; i< data.length; i++){
            tbody.innerHTML +=`<tr>
            <td>${data[i].numeroSemestre}</td>
            <td>${data[i].nombre}</td>
            <td>${data[i].carrera}</td>
            <td>${data[i].fecha}</td>
              </tr>
             
              `;
          
          }
          
          tabla.appendChild(tbody);
          
         
          
        });
    }


