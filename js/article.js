window.addEventListener("load",function(){
  window.addEventListener("mousedown",function(event){
    // if (event.target != article){
    //   var length = window.getElementsByClassName('article').length;
    //   for(i = 0; i < length; i++){
    //
    //   }
    // }
    var article = event.target;
    var dataId = article.getAttribute("data-id");
    if(hasClass(article,"article")){
      article.classList.toggle("open");
      article.getElementsByTagName('div')[0].classList.toggle("hidden");
    }
  });
});
function hasClass(element, cls) {
    return (' ' + element.className + ' ').indexOf(' ' + cls + ' ') > -1;
}
