<?php /* Smarty version Smarty-3.1.18, created on 2016-12-12 00:40:52
         compiled from "views\head.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1776584de404309cd3-86175090%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd01944f6b4061c71cbb91782df46ef3603b7b840' => 
    array (
      0 => 'views\\head.tpl',
      1 => 1481499642,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1776584de404309cd3-86175090',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'title' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_584de40455a723_38977971',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_584de40455a723_38977971')) {function content_584de40455a723_38977971($_smarty_tpl) {?><!DOCTYPE html>

    <head>
        <meta charset="utf-8">
        <title><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width">
		<link rel="icon" sizes="192x192" href="images/lolicon.png">
        <link rel="stylesheet" href="css/main.css">

    </head>
    <body>
		<header>
		
		<ul class="topnav" id="myTopnav">
		
		<li><a class="active" href="?action=home">Home</a></li>
		<li><a href="?action=admin">CMS</a></li>
		</li>
		
		 <li class="icon">
    <a href="javascript:void(0);" style="font-size:15px;" onclick="myFunction()">☰</a> 
  </li>
		</ul>
			
		<div id="logoTag">
			<img src="images/riotlogo.png" alt="">
			<h2>WE ARE RIOTERS</h2>
</div>


</header>
		
<script>
	function myFunction() {
		var x = document.getElementById("myTopnav");
		if (x.className === "topnav") {
			x.className += " responsive";
		} else {
			x.className = "topnav";
		}
	}
</script>
<?php }} ?>
