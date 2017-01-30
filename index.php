<?php
	session_start();
	require 'config/config.php';
	require 'config/dbconnect.php';
  include "views/head.html";
  include "views/header.html";
	$action = (empty($_GET['action'])) ? '' : $_GET['action'];
	$id = (empty($_GET['id'])) ? '' : $_GET['id'];
 	switch ($action) {
    	case 'send_article':
			// require 'models/session.php';
			include 'models/send_article.php';
      		break;
	  	case 'input_form':
			// require 'models/session.php';
			include 'views/admin_input.php';
			break;
		case 'edit_form':
			// require 'models/session.php';
			require 'models/select_single_article.php';
			include 'views/article_edit.php';
			break;
		case 'edit_article':
			// require 'models/session.php';
			include 'models/edit_article.php';
			break;
		case 'login':
			// require 'models/session.php';
			include 'views/admin_login.php';
			break;
		case 'login_admin':
			include 'models/login.php';
			break;
		case 'admin_page':
			require 'models/select_articles.php';
			include 'views/admin_page.php';
			break;
		case 'delete_form':
			require 'models/select_single_article.php';
			include 'views/delete_form.php';
			break;
		case 'delete_article':
			include 'models/delete_article.php';
			break;
		case 'logout':
			include 'models/logout.php';
			break;
		case 'upload_image_form':
			include 'views/image_upload_form.php';
			break;
		case 'img_upload':
			include 'models/image_upload.php';
			break;
    case 'full_page':
      include "models/select_single_article.php";
      include "models/select_images.php";
      include "views/verhaal.php";
      break;
    default:
      include "models/select_all_images.php";
      include "models/select_articles.php";
      include "views/fish.html";
    	include 'views/home.php';
    	break;
  }
  include "views/footer.html";
?>
