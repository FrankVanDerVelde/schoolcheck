<?php /* Smarty version Smarty-3.1.18, created on 2016-12-12 00:49:13
         compiled from "views\edit.tpl" */ ?>
<?php /*%%SmartyHeaderCode:30478584a8892490fc3-19257396%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1a2f77791ce204354e8b110a5ce8212db9cb8288' => 
    array (
      0 => 'views\\edit.tpl',
      1 => 1481499689,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '30478584a8892490fc3-19257396',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_584a8892761408_54779473',
  'variables' => 
  array (
    'result' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_584a8892761408_54779473')) {function content_584a8892761408_54779473($_smarty_tpl) {?><h1>edit here</h1>

<form method="post">
    
        <input type="text" name="title" value="<?php echo $_smarty_tpl->tpl_vars['result']->value[0]['title'];?>
">
   	
        <input type="text" name="content" value="<?php echo $_smarty_tpl->tpl_vars['result']->value[0]['content'];?>
">
    
    <input type="submit" name="submit_update">
</form><?php }} ?>
