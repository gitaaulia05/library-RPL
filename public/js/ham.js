const ham = document.getElementById('ham-menu');
const aside= document.getElementById('aside');

ham.addEventListener('click' , function(){
   aside.classList.toggle('openSide');
})