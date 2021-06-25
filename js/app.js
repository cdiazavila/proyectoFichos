
// declaramos las variables 

const parrafo = document.getElementById('dato');
const saldoActual=document.querySelector('#saldo');
let nombre=localStorage.getItem('nombre');
let apellidos=localStorage.getItem('apellido');
let saldo=localStorage.getItem('saldo');

parrafo.textContent=`Bienvedido ${nombre} ${apellidos}`;
saldoActual.textContent='Saldo: '+saldo+' Mil Pesos';

   
  