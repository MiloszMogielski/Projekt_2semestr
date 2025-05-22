<?php
/* Smarty version 4.5.2, created on 2025-05-18 19:36:57
  from 'C:\xampp\htdocs\cms\projekt\admin\themes\OneEleven\templates\messages.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.2',
  'unifunc' => 'content_682a1ab93c6fe2_65259420',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b43e7321e4e5e3ce4f7ee3241a443e34b887f3a6' => 
    array (
      0 => 'C:\\xampp\\htdocs\\cms\\projekt\\admin\\themes\\OneEleven\\templates\\messages.tpl',
      1 => 1747421028,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_682a1ab93c6fe2_65259420 (Smarty_Internal_Template $_smarty_tpl) {
if ((isset($_smarty_tpl->tpl_vars['errors']->value)) && $_smarty_tpl->tpl_vars['errors']->value[0] != '') {?><aside class="message pageerrorcontainer" role="alert"><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['errors']->value, 'error');
$_smarty_tpl->tpl_vars['error']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['error']->value) {
$_smarty_tpl->tpl_vars['error']->do_else = false;
if ($_smarty_tpl->tpl_vars['error']->value) {?><p><?php echo $_smarty_tpl->tpl_vars['error']->value;?>
</p><?php }
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?></aside><?php }
if ((isset($_smarty_tpl->tpl_vars['messages']->value)) && $_smarty_tpl->tpl_vars['messages']->value[0] != '') {?><aside class="message pagemcontainer" role="status"><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['messages']->value, 'message');
$_smarty_tpl->tpl_vars['message']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['message']->value) {
$_smarty_tpl->tpl_vars['message']->do_else = false;
if ($_smarty_tpl->tpl_vars['message']->value) {?><p><?php echo $_smarty_tpl->tpl_vars['message']->value;?>
</p><?php }
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?></aside><?php }
}
}
