<?php
/* Smarty version 4.5.2, created on 2025-05-20 21:20:44
  from 'tpl_body:2' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.2',
  'unifunc' => 'content_682cd60c90e482_33002982',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'fe5d922ae23f1c878d4ddb27ded4c4092a508997' => 
    array (
      0 => 'tpl_body:2',
      1 => '1747768842',
      2 => 'tpl_body',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_682cd60c90e482_33002982 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\cms\\projekt\\lib\\plugins\\function.title.php','function'=>'smarty_function_title',),));
?>
<body>
  <div class="container">
    <nav>
      <?php echo Navigator::function_plugin(array('template'=>'banasiak_menu'),$_smarty_tpl);?>

    </nav>

    <main>
      <h2><?php echo smarty_function_title(array(),$_smarty_tpl);?>
</h2>
      <?php CMS_Content_Block::smarty_internal_fetch_contentblock(array(),$_smarty_tpl); ?>
    </main>
  </div>
</body>
</html><?php }
}
