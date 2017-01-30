<?php
	session_start();
	require 'config/config.php';
	require 'config/dbconnect.php';
 	include "views/head.html";
	$action = (empty($_GET['action'])) ? '' : $_GET['action'];
	$id = (empty($_GET['id'])) ? '' : $_GET['id'];
 	switch ($action) {
    	case 'send_article':
			include 'models/send_article.php';
      		break;
	  	case 'input_form':
			include 'views/admin_input.php';
			break;
		case 'edit_form':
			require 'models/select_single_article.php';
			$title = $article['title'];
			$summary = $article['summary'];
			$article = $article['article'];
			include 'views/article_edit.php';
			break;
		case 'edit_article':
			include 'models/edit_article.php';
			break;
		case 'login':
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
			$title = $article['title'];
			$summary = $article['summary'];
			$article = $article['article'];
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
    	default:
      		include 'models/select_articles.php';
      		break;
  }

?>
