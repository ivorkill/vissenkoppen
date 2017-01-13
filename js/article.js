$(document).ready(function(){
  var article,number,container;
  h1Check();
  $(document).mousedown(function(event){
    article = $(event.target);

    if ($(article).data("content") || $(article).parent().data("content") && !$(event.target).closest('a').length) {
      number = $(article).data("content") || $(article).parent().data("content");
      container = $("div").find("[data-container='" + number + "']");
      $(container).toggleClass("open");
      $(container).children().toggleClass("hidden");
      $(".article").not(container).removeClass("open");
      $(".article").not(container).children().addClass("hidden");
    }
  });
  $(document).keydown(function(event){
    if (event.keyCode == 9) {
        event.preventDefault();
    }
  });
  $(document).resize(function(){
    // h1Check();
  });
  function h1Check(){
    var h1Height = $(".text").children("h1");
    for (var i = 0; i <   $(".text").children("h1").length; i++) {
      if (parseInt($(h1Height).slice(i).outerHeight()) > 60) {
        $(".text").children("h1").slice(i,(i+1)).css("line-height","30px");
      }
    }
  }
});
