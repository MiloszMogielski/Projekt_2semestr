<?php
/* Smarty version 4.5.2, created on 2025-05-20 20:28:20
  from 'cms_template:2' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.2',
  'unifunc' => 'content_682cc9c4bc5aa5_72239137',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c19f397ba24272585af898c0ad4a919f23f310ef' => 
    array (
      0 => 'cms_template:2',
      1 => '1747421080',
      2 => 'cms_template',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_682cc9c4bc5aa5_72239137 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\cms\\projekt\\lib\\plugins\\function.sitename.php','function'=>'smarty_function_sitename',),1=>array('file'=>'C:\\xampp\\htdocs\\cms\\projekt\\lib\\plugins\\function.title.php','function'=>'smarty_function_title',),2=>array('file'=>'C:\\xampp\\htdocs\\cms\\projekt\\lib\\plugins\\function.metadata.php','function'=>'smarty_function_metadata',),3=>array('file'=>'C:\\xampp\\htdocs\\cms\\projekt\\lib\\plugins\\function.cms_stylesheet.php','function'=>'smarty_function_cms_stylesheet',),));
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

<head>

<title><?php echo smarty_function_sitename(array(),$_smarty_tpl);?>
 - <?php echo smarty_function_title(array(),$_smarty_tpl);?>
</title>

<?php echo smarty_function_metadata(array(),$_smarty_tpl);?>


<?php echo smarty_function_cms_stylesheet(array(),$_smarty_tpl);?>


</head>

<body>

            <div style="float: left; width: 25%;">
         
      </div>
      
            <div>
         <h2><?php echo smarty_function_title(array(),$_smarty_tpl);?>
</h2>
          
      </div>
      
</body>
</html><?php }
}
