<?php
/* Smarty version 4.5.2, created on 2025-05-20 21:42:05
  from 'cms_template:9' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.2',
  'unifunc' => 'content_682cdb0d35f101_88101705',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '661341d689cd6a001b563e40717838ec324a8a67' => 
    array (
      0 => 'cms_template:9',
      1 => '1747770006',
      2 => 'cms_template',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_682cdb0d35f101_88101705 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\projektCMS\\cms\\lib\\plugins\\function.sitename.php','function'=>'smarty_function_sitename',),1=>array('file'=>'C:\\xampp\\htdocs\\projektCMS\\cms\\lib\\plugins\\function.title.php','function'=>'smarty_function_title',),2=>array('file'=>'C:\\xampp\\htdocs\\projektCMS\\cms\\lib\\plugins\\function.metadata.php','function'=>'smarty_function_metadata',),3=>array('file'=>'C:\\xampp\\htdocs\\projektCMS\\cms\\lib\\plugins\\function.cms_stylesheet.php','function'=>'smarty_function_cms_stylesheet',),));
?>

<!DOCTYPE html>
<html lang="pl">
<head>
  <meta charset="UTF-8">
  <title><?php echo smarty_function_sitename(array(),$_smarty_tpl);?>
 - <?php echo smarty_function_title(array(),$_smarty_tpl);?>
</title>
  <?php echo smarty_function_metadata(array(),$_smarty_tpl);?>

  <?php echo smarty_function_cms_stylesheet(array(),$_smarty_tpl);?>

  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
</head>

<body>

    <header>
    <h1><?php echo smarty_function_sitename(array(),$_smarty_tpl);?>
</h1>
  </header>

    <nav>
    
  </nav>

    <div class="container">
    <main>
      <h2><?php echo smarty_function_title(array(),$_smarty_tpl);?>
</h2>
      
    </main>
  </div>

</body>
</html><?php }
}
