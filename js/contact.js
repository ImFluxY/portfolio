(function () {
  "use strict";

  document.addEventListener("DOMContentLoaded", initialiser);

  var textarea;

  function initialiser()
  {
    textarea = document.querySelector('textarea');
    textarea.addEventListener('keydown', autosize);
  }
              
  function autosize(){
    var el = this;
    setTimeout(function(){
      el.style.cssText = 'height:auto; padding:0';
      // for box-sizing other than "content-box" use:
      // el.style.cssText = '-moz-box-sizing:content-box';
      el.style.cssText = 'height:' + el.scrollHeight + 'px';
    },0);
  }

}());