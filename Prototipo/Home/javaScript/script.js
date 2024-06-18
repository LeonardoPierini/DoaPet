//FUNÇÃO PARA FAZER LIGAÇÃO COM A PAGINA ADOTAR
var adotar = document.getElementById('adotar')
function QueroAdotar(){
   window.location = '../../Adotar/Html/adotar.html'
}
adotar.addEventListener('click', QueroAdotar)


//FUNÇÃO PARA FAZER LIGAÇÃO COM A PAGINA DOAR
var doar = document.getElementById('doar')
function QueroDoar(){
   window.location = '../../Doar/html/doar.html'
}
doar.addEventListener('click', QueroDoar)


   //ABRIR E FECHAR MENU
var menu = document.getElementById('menu')
var nav = document.getElementById('nav-menu')
menu.addEventListener('click', function(){
   if(nav.style.display =='none'){
      nav.style.display = 'block'
   }else{
      nav.style.display = 'none'
   }
})