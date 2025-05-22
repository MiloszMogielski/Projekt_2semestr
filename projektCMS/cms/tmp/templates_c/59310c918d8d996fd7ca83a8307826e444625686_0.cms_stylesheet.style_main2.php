<?php
/* Smarty version 4.5.2, created on 2025-05-20 21:20:44
  from 'cms_stylesheet:style_main2' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.2',
  'unifunc' => 'content_682cd60ca7f2c4_02226180',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '59310c918d8d996fd7ca83a8307826e444625686' => 
    array (
      0 => 'cms_stylesheet:style_main2',
      1 => '1747768829',
      2 => 'cms_stylesheet',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_682cd60ca7f2c4_02226180 (Smarty_Internal_Template $_smarty_tpl) {
?>/* cmsms stylesheet: style_main2 modified: Tuesday, May 20, 2025 9:20:29 PM */
body {
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
      margin: 0;
      padding: 0;
      background-color: #f5f5f5;
      color: #333;
    }

    .container {
      display: flex;
      min-height: 100vh;
    }

    nav {
      width: 250px;
      background-color: #2c3e50;
      color: #ecf0f1;
      padding: 20px;
    }

    nav ul {
      list-style-type: none;
      padding: 0;
    }

    nav li {
      margin-bottom: 10px;
    }

    nav a {
      color: #ecf0f1;
      text-decoration: none;
    }

    main {
      flex: 1;
      padding: 40px;
      background-color: #ffffff;
    }

    h2 {
      border-bottom: 2px solid #2980b9;
      padding-bottom: 10px;
      color: #2c3e50;
    }
nav li.active a {
  font-weight: bold;
  text-decoration: underline;
}
<?php }
}
