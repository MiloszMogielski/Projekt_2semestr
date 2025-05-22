<?php
/* Smarty version 4.5.2, created on 2025-05-20 21:36:01
  from 'cms_template:cssmenu_ulshadow' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.2',
  'unifunc' => 'content_682cd9a14b7de0_46956625',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9779513da9c3fb8acdedb43a7be96637564446df' => 
    array (
      0 => 'cms_template:cssmenu_ulshadow',
      1 => '1747421197',
      2 => 'cms_template',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_682cd9a14b7de0_46956625 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->smarty->ext->_tplFunction->registerTplFunctions($_smarty_tpl, array (
  'cssmenu_ulshadow' => 
  array (
    'compiled_filepath' => 'C:\\xampp\\htdocs\\projektCMS\\cms\\tmp\\templates_c\\^9779513da9c3fb8acdedb43a7be96637564446df_0.cms_template.cssmenu_ulshadow.php',
    'uid' => '9779513da9c3fb8acdedb43a7be96637564446df',
    'call_name' => 'smarty_template_function_cssmenu_ulshadow_887506791682cd9a13b9701_07872640',
  ),
));
?>


<?php if ((isset($_smarty_tpl->tpl_vars['nodes']->value))) {?>
<div id="menuwrapper">
  <?php $_smarty_tpl->smarty->ext->_tplFunction->callTemplateFunction($_smarty_tpl, 'cssmenu_ulshadow', array('data'=>$_smarty_tpl->tpl_vars['nodes']->value,'depth'=>0), true);?>

  <div class="clearb"></div>
</div>
<?php }
}
/* smarty_template_function_cssmenu_ulshadow_887506791682cd9a13b9701_07872640 */
if (!function_exists('smarty_template_function_cssmenu_ulshadow_887506791682cd9a13b9701_07872640')) {
function smarty_template_function_cssmenu_ulshadow_887506791682cd9a13b9701_07872640(Smarty_Internal_Template $_smarty_tpl,$params) {
$params = array_merge(array('depth'=>1), $params);
foreach ($params as $key => $value) {
$_smarty_tpl->tpl_vars[$key] = new Smarty_Variable($value, $_smarty_tpl->isRenderingCache);
}
?>

<ul<?php if ($_smarty_tpl->tpl_vars['depth']->value == 0) {?> id="primary-nav"<?php } else { ?> class="unli"<?php }?>>
  <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['data']->value, 'node', true);
$_smarty_tpl->tpl_vars['node']->iteration = 0;
$_smarty_tpl->tpl_vars['node']->index = -1;
$_smarty_tpl->tpl_vars['node']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['node']->value) {
$_smarty_tpl->tpl_vars['node']->do_else = false;
$_smarty_tpl->tpl_vars['node']->iteration++;
$_smarty_tpl->tpl_vars['node']->index++;
$_smarty_tpl->tpl_vars['node']->first = !$_smarty_tpl->tpl_vars['node']->index;
$_smarty_tpl->tpl_vars['node']->last = $_smarty_tpl->tpl_vars['node']->iteration === $_smarty_tpl->tpl_vars['node']->total;
$__foreach_node_0_saved = $_smarty_tpl->tpl_vars['node'];
?>
        <?php $_smarty_tpl->_assignInScope('liclass', '');?>
        <?php $_smarty_tpl->_assignInScope('aclass', '');?>

    
    
    <?php if ($_smarty_tpl->tpl_vars['node']->value->current) {?>
            <?php $_smarty_tpl->_assignInScope('liclass', ($_smarty_tpl->tpl_vars['liclass']->value).(' menuactive'));?>
      <?php $_smarty_tpl->_assignInScope('aclass', ($_smarty_tpl->tpl_vars['aclass']->value).(' menuactive'));?>
    <?php } elseif ($_smarty_tpl->tpl_vars['node']->value->parent) {?>
            <?php $_smarty_tpl->_assignInScope('liclass', ($_smarty_tpl->tpl_vars['liclass']->value).(' parent'));?>
      <?php $_smarty_tpl->_assignInScope('aclass', ($_smarty_tpl->tpl_vars['aclass']->value).(' parent'));?>
    <?php }?>
    <?php if ((isset($_smarty_tpl->tpl_vars['node']->value->children))) {?>
      <?php $_smarty_tpl->_assignInScope('liclass', ($_smarty_tpl->tpl_vars['liclass']->value).(' menuparent'));?>
      <?php $_smarty_tpl->_assignInScope('aclass', ($_smarty_tpl->tpl_vars['aclass']->value).(' menuparent'));?>
    <?php }?>

        <?php if ($_smarty_tpl->tpl_vars['node']->value->type == 'sectionheader') {?>
      <li class='sectionheader <?php echo $_smarty_tpl->tpl_vars['liclass']->value;?>
'><span><?php echo $_smarty_tpl->tpl_vars['node']->value->menutext;?>
</span>
        <?php if ((isset($_smarty_tpl->tpl_vars['node']->value->children))) {?>
          <?php $_smarty_tpl->smarty->ext->_tplFunction->callTemplateFunction($_smarty_tpl, 'cssmenu_ulshadow', array('data'=>$_smarty_tpl->tpl_vars['node']->value->children,'depth'=>$_smarty_tpl->tpl_vars['depth']->value+1), true);?>

        <?php }?>
      </li>
    <?php } elseif ($_smarty_tpl->tpl_vars['node']->value->type == 'separator') {?>
      <li class='separator <?php echo $_smarty_tpl->tpl_vars['liclass']->value;?>
'><hr class='separator'/></li>
    <?php } else { ?>
            <li class="<?php echo $_smarty_tpl->tpl_vars['liclass']->value;?>
">
        <a class="<?php echo $_smarty_tpl->tpl_vars['aclass']->value;?>
" href="<?php echo $_smarty_tpl->tpl_vars['node']->value->url;?>
"<?php if ($_smarty_tpl->tpl_vars['node']->value->target != '') {?> target="<?php echo $_smarty_tpl->tpl_vars['node']->value->target;?>
"<?php }?>><span><?php echo $_smarty_tpl->tpl_vars['node']->value->menutext;?>
</span></a>
        <?php if ((isset($_smarty_tpl->tpl_vars['node']->value->children))) {?>
          <?php $_smarty_tpl->smarty->ext->_tplFunction->callTemplateFunction($_smarty_tpl, 'cssmenu_ulshadow', array('data'=>$_smarty_tpl->tpl_vars['node']->value->children,'depth'=>$_smarty_tpl->tpl_vars['depth']->value+1), true);?>

        <?php }?>
      </li>
    <?php }?>
  <?php
$_smarty_tpl->tpl_vars['node'] = $__foreach_node_0_saved;
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
  <?php if ($_smarty_tpl->tpl_vars['depth']->value > 0) {?>
    <li class="separator once" style="list-style-type: none;">&nbsp;</li>
  <?php }?>
</ul>
<?php
}}
/*/ smarty_template_function_cssmenu_ulshadow_887506791682cd9a13b9701_07872640 */
}
