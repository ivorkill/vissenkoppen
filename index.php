<?php
  include "views/head.html";
  include "views/header.html";
  switch ($_GET) {
    case 'value':
      # code...
      break;

    default:
      include "views/fish.html";
      include "views/home.html";
      break;
  }


  include "views/footer.html";
?>
