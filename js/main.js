'use strict';
{
  console.log('good');
  const hamburger = document.getElementById('hamburger');
  const modalWindow = document.getElementById('modal-window');
  
  hamburger.addEventListener('click',()=>{
    modalWindow.classList.toggle('show');
    console.log('ok');
  });

}