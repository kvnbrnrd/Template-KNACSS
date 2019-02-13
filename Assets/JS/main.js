/**!
Navigation Button Toggle class
*/
(function() {

  // old browser or not ?
  if ( !('querySelector' in document && 'addEventListener' in window) ) {
  return;
  }
  window.document.documentElement.className += ' js-enabled';
  
  function toggleNav() {
  
  // Define targets by their class or id
  var button = document.querySelector('.nav-button');
  var target = document.querySelector('.nav');
  
  // click-touch event
  if ( button ) {
    button.addEventListener('click',
    function (e) {
        button.classList.toggle('is-active');
      target.classList.toggle('is-opened');
      e.preventDefault();
    }, false );
  }
  } // end toggleNav()
  
  toggleNav();
  }());

  // ------------------------- Fin JS Bouton Burger -----------------------


  var switchKnack = document.getElementById('switchKnack');
  var switchChoucroute = document.getElementById('switchChoucroute');
  
  var KnackItems = document.getElementsByClassName('knack');
  var ChoucrouteItems = document.getElementsByClassName('choucroute');
  
  
  function switchImage(fromImage, toImage){
      for (let i = 0; i < KnackItems.length; i++) {
          fromImage[i].style.display = "none";
          toImage[i].style.display = "block";
        }
  }
  
  
  
  switchImage(KnackItems, ChoucrouteItems);
  
  
  switchKnack.addEventListener('click', function(){
      switchImage(KnackItems, ChoucrouteItems);
  });
  switchChoucroute.addEventListener('click', function(){
      switchImage(ChoucrouteItems,KnackItems);
  });

   // ------------------------- Fin Fonction Portfolio -----------------------
  