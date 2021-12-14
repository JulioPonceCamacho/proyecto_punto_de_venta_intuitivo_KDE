var btnAbrirPopupADD = document.getElementById('ADD'),
    overlay = document.getElementById('overlay'),
    btnCerrarPopup = document.getElementById('btn-cerrar-popup'),
    btnAbrirPopupRemove = document.getElementById("REMOVE"),
    overlayRemove = document.getElementById('overlayRemove'),
    btnCerrarPopupRemove = document.getElementById('btn-cerrar-popupRemove'),
    btnAbrirPopupEdit = document.getElementById("EDIT"),
    overlayEdit = document.getElementById('overlayEdit'),
    btnCerrarPopupEdit = document.getElementById('btn-cerrar-popupEdit');

var ScrollX = window.scrollX,
    ScrollY = window.scrollY;

/*
var monto = document.getElementById('monto');
console.log('Este es el monto inicial: '+monto.innerHTML);
var total = monto.innerHTML;
var acum = parseFloat(total);
acum = acum +1.3;
document.getElementById('acumulado').innerHTML=acum;
console.log('El monto es: ' + acum);*/


var compras = document.getElementsByClassName('monto');
var numeros = [];
let total=0;
for(let i=0; i<compras.length; i++){
    let newIndex = numeros.push(parseFloat(compras[i].innerHTML));
    total = total + numeros[i];
    compras[i].innerHTML = compras[i].innerHTML + " MXN";
}
document.getElementById('Total').innerHTML = total + " MXN";
console.log(numeros.length);


btnAbrirPopupADD.addEventListener('click',function(){
    ScrollX = window.scrollX,
    ScrollY = window.scrollY;
    overlay.classList.add('active');
});
btnCerrarPopup.addEventListener('click', function(){
    overlay.classList.remove('active');
    window.scrollTo(ScrollX,ScrollY);
});

btnAbrirPopupRemove.addEventListener('click',function(){
    ScrollX = window.scrollX,
    ScrollY = window.scrollY;
    overlayRemove.classList.add('active');
});
btnCerrarPopupRemove.addEventListener('click', function(){
    overlayRemove.classList.remove('active');
    window.scrollTo(ScrollX,ScrollY);
});

btnAbrirPopupEdit.addEventListener('click',function(){
    ScrollX = window.scrollX,
    ScrollY = window.scrollY;
    overlayEdit.classList.add('active');
});
btnCerrarPopupEdit.addEventListener('click', function(){
    overlayEdit.classList.remove('active');
    window.scrollTo(ScrollX,ScrollY);
});
