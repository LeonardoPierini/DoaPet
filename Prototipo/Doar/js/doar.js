 // ABRIR E FECHAR MENU
var menu = document.getElementById('menu')
var nav = document.getElementById('nav-menu')
menu.addEventListener('click', function(){
   if(nav.style.display =='none'){
      nav.style.display = 'block'
   }else{
      nav.style.display = 'none'
   }
})
