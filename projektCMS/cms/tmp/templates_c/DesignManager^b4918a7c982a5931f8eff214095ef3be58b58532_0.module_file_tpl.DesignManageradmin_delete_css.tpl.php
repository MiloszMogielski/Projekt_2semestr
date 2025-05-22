<?php
/* Smarty version 4.5.2, created on 2025-05-20 21:32:01
  from 'module_file_tpl:DesignManager;admin_delete_css.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.2',
  'unifunc' => 'content_682cd8b148e2a0_87518529',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b4918a7c982a5931f8eff214095ef3be58b58532' => 
    array (
      0 => 'module_file_tpl:DesignManager;admin_delete_css.tpl',
      1 => 1747421041,
      2 => 'module_file_tpl',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_682cd8b148e2a0_87518529 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\projektCMS\\cms\\lib\\plugins\\function.form_start.php','function'=>'smarty_function_form_start',),1=>array('file'=>'C:\\xampp\\htdocs\\projektCMS\\cms\\lib\\plugins\\modifier.localedate_format.php','function'=>'smarty_modifier_localedate_format',),2=>array('file'=>'C:\\xampp\\htdocs\\projektCMS\\cms\\lib\\plugins\\function.form_end.php','function'=>'smarty_function_form_end',),));
?>
<h3><?php echo $_smarty_tpl->tpl_vars['mod']->value->Lang('delete_stylesheet');?>
: <?php echo $_smarty_tpl->tpl_vars['css']->value->get_name();?>
 (<?php echo $_smarty_tpl->tpl_vars['css']->value->get_id();?>
)</h3>

<?php echo smarty_function_form_start(array('css'=>$_smarty_tpl->tpl_vars['css']->value->get_id()),$_smarty_tpl);?>


<fieldset>
  <div style="width: 49%; float: left;">
    <div class="pageoverflow">
      <p class="pagetext"><label for="css_name">*<?php echo $_smarty_tpl->tpl_vars['mod']->value->Lang('prompt_name');?>
:</label></p>
      <p class="pageinput">
        <input id="css_name" type="text" readonly="readonly" size="50" maxlength="50" value="<?php echo $_smarty_tpl->tpl_vars['css']->value->get_name();?>
"/>
      </p>
    </div>
  </div>
  <div style="width: 49%; float: right;">
    <?php if ($_smarty_tpl->tpl_vars['css']->value->get_id()) {?>
    <div class="pageoverflow">
      <p class="pagetext"><label for="css_created"><?php echo $_smarty_tpl->tpl_vars['mod']->value->Lang('prompt_created');?>
:</label></p>
      <p class="pageinput">
        <input type="text" id="css_created" value="<?php echo smarty_modifier_localedate_format($_smarty_tpl->tpl_vars['css']->value->get_created(),'%x %X');?>
" readonly="readonly"/>
      </p>
    </div>
    <div class="pageoverflow">
      <p class="pagetext"><label for="css_modified"><?php echo $_smarty_tpl->tpl_vars['mod']->value->Lang('prompt_modified');?>
:</label></p>
      <p class="pageinput">
        <input type="text" id="css_modified" value="<?php echo smarty_modifier_localedate_format($_smarty_tpl->tpl_vars['css']->value->get_modified(),'%x %X');?>
" readonly="readonly"/>
      </p>
    </div>
    <?php }?>
  </div></fieldset>

<div class="pageoverflow">
  <p class="pagetext"></p>
  <p class="pageinput">
    <input id="check1" type="checkbox" name="<?php echo $_smarty_tpl->tpl_vars['actionid']->value;?>
check1" value="1">&nbsp;<label for="check1"><?php echo $_smarty_tpl->tpl_vars['mod']->value->Lang('confirm_delete_css_1');?>
</label>
    <br/>
    <input id="check2" type="checkbox" name="<?php echo $_smarty_tpl->tpl_vars['actionid']->value;?>
check2" value="1">&nbsp;<label for="check2"><?php echo $_smarty_tpl->tpl_vars['mod']->value->Lang('confirm_delete_css_2');?>
</label>
  </p>
</div>
<div class="pageoverflow">
  <p class="pagetext"></p>
  <p class="pageinput">
    <input type="submit" name="<?php echo $_smarty_tpl->tpl_vars['actionid']->value;?>
submit" value="<?php echo $_smarty_tpl->tpl_vars['mod']->value->Lang('submit');?>
"/>
    <input type="submit" name="<?php echo $_smarty_tpl->tpl_vars['actionid']->value;?>
cancel" value="<?php echo $_smarty_tpl->tpl_vars['mod']->value->Lang('cancel');?>
"/>
  </p>
</div>
<?php echo smarty_function_form_end(array(),$_smarty_tpl);?>

<?php }
}
