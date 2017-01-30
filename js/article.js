$(document).ready(function(){
  var article,number,container;
  // h1Check();
  $(document).mousedown(function(event){
    article = $(event.target);

    if ($(article).data("content") || $(article).parent().data("content") && !$(event.target).closest('a').length) {
      number = $(article).data("content") || $(article).parent().data("content");
      container = $("div").find("[data-container='" + number + "']");
      $(container).toggleClass("open");
      $(container).children().toggleClass("hidden");
      $(".article").not(container).removeClass("open");
      $(".article").not(container).children().addClass("hidden");
      // console.log(article);
      // $(container).children(".text").children("h1").css("line-height","60px");
      // $(".article").not(container).children(".text").children("h1").css("line-height","30px");
    }
    // console.log($(article).parent().data("content"));
  });
  $(document).keydown(function(event){
    if (event.keyCode == 9) {
        event.preventDefault();
    }
  });
  $(document).resize(function(){
    // h1Check();
  });
});
