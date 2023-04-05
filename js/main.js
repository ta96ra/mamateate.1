'use strict';
{
  // ------------------------------------------
  // ハンバーガーメニュー、モーダルウィンドウ
  // ------------------------------------------
  console.log('good');
  const hamburger = document.getElementById('hamburger');
  const modalWindow = document.getElementById('modal-window');
  const hamburgerText = document.querySelector('#hamburger p');
  
  hamburger.addEventListener('click',()=>{
    modalWindow.classList.toggle('show');
    hamburger.classList.toggle('rotate');
    if(modalWindow.classList.contains('show')){
      hamburgerText.textContent = 'CLOSE';
    }else{
      hamburgerText.textContent = 'MENU';
    }
  });
  // -----------------
  // to-topボタン
  // -----------------
   // Intersection Oveserver APIなど
   const index = document.getElementById('index');
   const toTop = document.getElementById('to-top');
   const observer = new IntersectionObserver(callback);
   observer.observe(index);
 
 // header下のindexが見えなくなれば、to-topボタンの表示
   function callback(entries){
     entries.forEach(entry => {
       if(!entry.isIntersecting){
         toTop.classList.add('scrolled');
       }else{
         toTop.classList.remove('scrolled');
       }
     });
   }
   // to-topを押したらスクロールトップ
   toTop.addEventListener('click',e=>{
     e.preventDefault();
     window.scrollTo({
       top:0,
       behavior:'smooth',
     });
   });

}