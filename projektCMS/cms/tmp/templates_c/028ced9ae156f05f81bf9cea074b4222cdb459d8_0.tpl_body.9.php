<?php
/* Smarty version 4.5.2, created on 2025-05-20 21:40:07
  from 'tpl_body:9' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.2',
  'unifunc' => 'content_682cda97edd5f6_55362804',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '028ced9ae156f05f81bf9cea074b4222cdb459d8' => 
    array (
      0 => 'tpl_body:9',
      1 => '1747770006',
      2 => 'tpl_body',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_682cda97edd5f6_55362804 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\projektCMS\\cms\\lib\\plugins\\function.sitename.php','function'=>'smarty_function_sitename',),1=>array('file'=>'C:\\xampp\\htdocs\\projektCMS\\cms\\lib\\plugins\\function.title.php','function'=>'smarty_function_title',),));
?>
<body>

    <header>
    <h1><?php echo smarty_function_sitename(array(),$_smarty_tpl);?>
</h1>
  </header>

    <nav>
    <?php echo Navigator::function_plugin(array('template'=>'moje_menu'),$_smarty_tpl);?>

  </nav>

    <div class="container">
    <main>
      <h2><?php echo smarty_function_title(array(),$_smarty_tpl);?>
</h2>
      <?php CMS_Content_Block::smarty_internal_fetch_contentblock(array(),$_smarty_tpl); ?>
    </main>
  </div>

</body>
</html><?php }
}
