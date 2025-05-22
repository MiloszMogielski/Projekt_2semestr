<?php
/* Smarty version 4.5.2, created on 2025-05-20 21:20:44
  from 'tpl_head:2' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.2',
  'unifunc' => 'content_682cd60c9c1dd1_30061791',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5a263efb684a5d47dd0f76d4cff7da9eec401532' => 
    array (
      0 => 'tpl_head:2',
      1 => '1747768842',
      2 => 'tpl_head',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_682cd60c9c1dd1_30061791 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\cms\\projekt\\lib\\plugins\\function.sitename.php','function'=>'smarty_function_sitename',),1=>array('file'=>'C:\\xampp\\htdocs\\cms\\projekt\\lib\\plugins\\function.title.php','function'=>'smarty_function_title',),2=>array('file'=>'C:\\xampp\\htdocs\\cms\\projekt\\lib\\plugins\\function.metadata.php','function'=>'smarty_function_metadata',),3=>array('file'=>'C:\\xampp\\htdocs\\cms\\projekt\\lib\\plugins\\function.cms_stylesheet.php','function'=>'smarty_function_cms_stylesheet',),));
?>
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title><?php echo smarty_function_sitename(array(),$_smarty_tpl);?>
 - <?php echo smarty_function_title(array(),$_smarty_tpl);?>
</title>

  <?php echo smarty_function_metadata(array(),$_smarty_tpl);?>

  <?php echo smarty_function_cms_stylesheet(array(),$_smarty_tpl);?>


</head><?php }
}
