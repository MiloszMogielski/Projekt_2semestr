<?php
/* Smarty version 4.5.2, created on 2025-05-20 21:37:59
  from 'cms_template:moje_menu' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.2',
  'unifunc' => 'content_682cda17df2b16_52392872',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1ef1f892fb599e52d54e302b86f1c17e683af29f' => 
    array (
      0 => 'cms_template:moje_menu',
      1 => '1747769850',
      2 => 'cms_template',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_682cda17df2b16_52392872 (Smarty_Internal_Template $_smarty_tpl) {
?><ul>
  <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['nodes']->value, 'node');
$_smarty_tpl->tpl_vars['node']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['node']->value) {
$_smarty_tpl->tpl_vars['node']->do_else = false;
?>
    <li<?php if ($_smarty_tpl->tpl_vars['node']->value->current) {?> class="active"<?php }?>>
      <a href="<?php echo $_smarty_tpl->tpl_vars['node']->value->url;?>
"><?php echo $_smarty_tpl->tpl_vars['node']->value->menutext;?>
</a>
    </li>
  <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
</ul><?php }
}
