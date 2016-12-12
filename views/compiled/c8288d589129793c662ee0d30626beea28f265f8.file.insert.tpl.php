<?php /* Smarty version Smarty-3.1.18, created on 2016-12-12 00:49:06
         compiled from "views\insert.tpl" */ ?>
<?php /*%%SmartyHeaderCode:17482584a8e9a6f39b9-92234507%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c8288d589129793c662ee0d30626beea28f265f8' => 
    array (
      0 => 'views\\insert.tpl',
      1 => 1481499677,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '17482584a8e9a6f39b9-92234507',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_584a8e9a72a4a4_93144323',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_584a8e9a72a4a4_93144323')) {function content_584a8e9a72a4a4_93144323($_smarty_tpl) {?><h1>insert here</h1>

<form action="model/insert.php" method="post">
    <p>
        <label for="title">Title</label>
        <input type="text" name="title">
    </p>
    <p>
        <label for="content">Content</label>
        <input type="text" name="content">
    </p>
    <input type="submit" value="Submit">
</form><?php }} ?>
