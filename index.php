<?php

// Get username, password from database
include 'includes/config.php';
// Load Smarty library
require 'libs/Smarty.class.php';
// Initialize
include 'includes/bootstrap.php';
// Make database connection
include 'includes/database.php';

include 'includes/funcs.php';

// Assign value of page title to the smarty variable 'title', usually the value comes from a database
$templateParser->assign('title', 'SchoolCheck');

// Display template: output html
$templateParser->display('head.tpl');

$action = isset($_GET['action'])?$_GET['action']:'home';

	switch ($action) {
		case 'home':
			$page_nr = isset($_GET['page_number'])?$_GET['page_number']:1;
			
			
			// get newsarticles fromd database
			include('model/select_newsarticles.php');
			
			
			// calculate number of newsarticles
			include('model/get_nr_articles.php');
			$templateParser->assign('total_number_newsarticles', $total_number_newsarticles);
			
			
			
			$templateParser->assign('result', $result);

			$templateParser->display('newsarticles.tpl');
			break;
				
			// case 'e-sport':
			// include('model/select_e_sports.php');
			// $templateParser->assign('resultesport', $resultesport);
  			// $templateParser->display('e-sport.tpl');
			// break;

			
			

			
			case 'admin':
			$cms_action = isset($_GET['cms_action'])?$_GET['cms_action']:'show';

$submit_update = isset($_POST['submit_update'])? 1:0;
$cms_action = $submit_update?'save':$cms_action;




        switch ($cms_action) {
            case 'show':
                //show all items
                include 'model/select_all_items.php';
                $templateParser->assign('result', $result);
                $templateParser->display('cms_show.tpl');
                break;

			case 'edit':
				$id = isset($_GET['id'])?$_GET['id']:0;
				include 'model/edit.php';
				$templateParser->assign('result', $result);
                $templateParser->display('edit.tpl');
				break;

			case 'save':
			$id = isset($_GET['id'])?$_GET['id']:0;
			include 'model/update.php';
			break;

				
			case 'delete':
				$id = $_GET['id'];
				include 'model/delete_item.php';
				break;

				case 'insert':
  			$templateParser->display('insert.tpl');
			break;
		}
	}
 
$templateParser->display('footer.tpl');

