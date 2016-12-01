$(document).ready(function(){
  $(document).mousedown(function(event){
    if (event.target != article){
      $(".article").not($(event.target).parent()).removeClass("open");
      $(".article").not($(event.target).parent()).children().addClass("hidden");
    }
    var article = $(event.target).parent();
    var dataId = $(article).data("id");
    if($(article).hasClass("article")){
      $(article).toggleClass("open");
      $(article).children().toggleClass("hidden");
    }
  });
});
