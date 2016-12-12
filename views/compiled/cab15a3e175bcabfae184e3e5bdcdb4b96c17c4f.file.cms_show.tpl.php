<?php /* Smarty version Smarty-3.1.18, created on 2016-12-12 00:49:11
         compiled from "views\cms_show.tpl" */ ?>
<?php /*%%SmartyHeaderCode:30985584a87d37b1bb9-00134788%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'cab15a3e175bcabfae184e3e5bdcdb4b96c17c4f' => 
    array (
      0 => 'views\\cms_show.tpl',
      1 => 1481499687,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '30985584a87d37b1bb9-00134788',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_584a87d3a84597_07341990',
  'variables' => 
  array (
    'result' => 0,
    'oneItem' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_584a87d3a84597_07341990')) {function content_584a87d3a84597_07341990($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_truncate')) include 'C:\\wamp64\\www\\Jaar2\\schoolcheck\\libs\\plugins\\modifier.truncate.php';
?><button onclick="window.location.href='?action=admin&cms_action=insert'">New</button>
<table>
	<?php  $_smarty_tpl->tpl_vars['oneItem'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['oneItem']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['result']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['oneItem']->key => $_smarty_tpl->tpl_vars['oneItem']->value) {
$_smarty_tpl->tpl_vars['oneItem']->_loop = true;
?>
	<tr>
		<td><?php echo $_smarty_tpl->tpl_vars['oneItem']->value['id'];?>
</td>
		<td><?php echo $_smarty_tpl->tpl_vars['oneItem']->value['title'];?>
</td>
		<td><?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['oneItem']->value['content'],50);?>
</td>
 			<td><a href="?action=admin&cms_action=edit&id=<?php echo $_smarty_tpl->tpl_vars['oneItem']->value['id'];?>
">edit</a></td>
            <td><a href="?action=admin&cms_action=delete&id=<?php echo $_smarty_tpl->tpl_vars['oneItem']->value['id'];?>
">delete</a></td>
<?php } ?>
	</tr>
</table><?php }} ?>
