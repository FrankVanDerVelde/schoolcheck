<?php /* Smarty version Smarty-3.1.18, created on 2016-12-09 12:18:22
         compiled from "views\newsarticles.tpl" */ ?>
<?php /*%%SmartyHeaderCode:28371584a87d1b01965-89584802%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd2104d91d134b1ddf013f0f614b9454791a8acef' => 
    array (
      0 => 'views\\newsarticles.tpl',
      1 => 1481282301,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '28371584a87d1b01965-89584802',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_584a87d20ab7a8_75239922',
  'variables' => 
  array (
    'total_number_newsarticles' => 0,
    'foo' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_584a87d20ab7a8_75239922')) {function content_584a87d20ab7a8_75239922($_smarty_tpl) {?><H1 class="pageTitle"> Home </H1>
 

    <section style="text-align: center">    
            <ul class="pagination">
				<?php $_smarty_tpl->tpl_vars['foo'] = new Smarty_Variable;$_smarty_tpl->tpl_vars['foo']->step = 1;$_smarty_tpl->tpl_vars['foo']->total = (int) ceil(($_smarty_tpl->tpl_vars['foo']->step > 0 ? $_smarty_tpl->tpl_vars['total_number_newsarticles']->value+1 - (1) : 1-($_smarty_tpl->tpl_vars['total_number_newsarticles']->value)+1)/abs($_smarty_tpl->tpl_vars['foo']->step));
if ($_smarty_tpl->tpl_vars['foo']->total > 0) {
for ($_smarty_tpl->tpl_vars['foo']->value = 1, $_smarty_tpl->tpl_vars['foo']->iteration = 1;$_smarty_tpl->tpl_vars['foo']->iteration <= $_smarty_tpl->tpl_vars['foo']->total;$_smarty_tpl->tpl_vars['foo']->value += $_smarty_tpl->tpl_vars['foo']->step, $_smarty_tpl->tpl_vars['foo']->iteration++) {
$_smarty_tpl->tpl_vars['foo']->first = $_smarty_tpl->tpl_vars['foo']->iteration == 1;$_smarty_tpl->tpl_vars['foo']->last = $_smarty_tpl->tpl_vars['foo']->iteration == $_smarty_tpl->tpl_vars['foo']->total;?>
                   <li><a href="index.php?action=home&page_number=<?php echo $_smarty_tpl->tpl_vars['foo']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['foo']->value;?>
</a></li> 
               <?php }} ?>
            </ul>
    </section>

<!--
              <li><a href="#">«</a></li>
              <li><a href="?action=home&page_number=1">1</a></li>
              <li><a class="active" href="?action=home&page_number=2">2</a></li>
              <li><a href="?action=home&page_number=1">3</a></li>
              <li><a href="#">»</a></li>
--><?php }} ?>
