$(document).ready(function(){
  var article,number,container;
  // h1Check();
  $(document).mousedown(function(event){
    article = $(event.target);

    if ($(article).data("content") || $(article).parent().data("content") && !$(event.target).closest('a').length) {
      number = $(article).data("content") || $(article).parent().data("content");
      container = $("div").find("[data-container='" + number + "']");
      $(container).toggleClass("open");
      $(".article").not(container).removeClass("open");
    }
  });
  $(document).keydown(function(event){
    if (event.keyCode == 9) {
        event.preventDefault();
    }
  });
});
