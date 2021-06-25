//import* as App from './app.js';
// declaramos las variables con javascript
var formulario = document.getElementById('formularios');
var respuesta = document.getElementById('respuesta');
const usuario=document.getElementById('usuario');
const pass=document.getElementById('pass');

function peticion(){
  let datos = new FormData(formulario);
  var url='php/validaLogin.php';
  fetch(url,{
      method: 'POST',
      body: datos
  })
      .then( res => res.json())
      .then( data => {
        
          if(data === 'no'){
              respuesta.innerHTML = `
              <div class="alert alert-danger" role="alert">
                Contraseña o Usuario Incorrecto 
              </div>
              `
              respuesta.style.display = 'block';
              formulario.reset();
              setTimeout(()=>{
                  respuesta.style.display = 'none';
              },1000);
  
             
          }else{
            location.href='vistas/paginaPrincipal.php';
          
          }
     
        
      });
}


// obtiene los datos del usurio que se logea y los guardamos en un localStorage para ser usados mientas 
//el estudiante nevega en la pagina 
function obtenerDatos(){

  let informacion=new FormData(formulario);
  var url='php/app.php';
  fetch(url,{
    method: 'POST',
    body: informacion
})
.then( res => res.json()) 
.then( datas => {
  for(let i=0; i<datas.length; i++){
    localStorage.setItem('nombre',datas[i].nombres); 
    localStorage.setItem('apellido',datas[i].apellidos); 
    localStorage.setItem('cedula',datas[i].cc); 
    localStorage.setItem('saldo',datas[i].saldo); 
   
  }
  
 
});

//localStorage.setItem('nombre',usuario.value); 

}


//capturamos el evento submit 
formulario.addEventListener('submit', function(e){
  e.preventDefault();

if(usuario.value =='' && pass.value==''){
  respuesta.innerHTML = `
              <div class="alert alert-danger" role="alert">
                LLene todo los campos  
              </div>
              `
              respuesta.style.display = 'block';
              formulario.reset();
              setTimeout(()=>{
                  respuesta.style.display = 'none';
              },2000);
            
}else{
  peticion();
  obtenerDatos(); 
 
}

});





