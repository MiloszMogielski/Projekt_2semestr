<?php
/* Smarty version 4.5.2, created on 2025-05-20 21:38:00
  from 'cms_stylesheet:style_test' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.2',
  'unifunc' => 'content_682cda18026ee8_18412040',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '58116a8c2236cda034adc40dcdb18e5b0c634334' => 
    array (
      0 => 'cms_stylesheet:style_test',
      1 => '1747769877',
      2 => 'cms_stylesheet',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_682cda18026ee8_18412040 (Smarty_Internal_Template $_smarty_tpl) {
?>/* cmsms stylesheet: style_test modified: Tuesday, May 20, 2025 9:37:57 PM */
body {
  font-family: 'Inter', 'Segoe UI', Tahoma, sans-serif;
  margin: 0;
  padding: 0;
  background-color: #ffffff;
  color: #1f1f1f;
  line-height: 1.6;
}

header {
  background-color: #1e90ff;
  padding: 1rem 2rem;
  color: #fff;
}

nav {
  display: flex;
  justify-content: center;
  gap: 2rem;
  background-color: #1e90ff;
  padding: 0.5rem 0;
}

nav a {
  color: #ffffff;
  text-decoration: none;
  font-weight: 500;
  transition: color 0.3s;
}

nav a:hover,
nav li.active a {
  color: #ffd700;
}

.container {
  max-width: 1000px;
  margin: 2rem auto;
  padding: 0 1rem;
}

main {
  background-color: #f9f9f9;
  padding: 2rem;
  border-radius: 12px;
  box-shadow: 0 2px 6px rgba(0, 0, 0, 0.05);
}

h2 {
  color: #1e90ff;
  border-bottom: 2px solid #eee;
  padding-bottom: 0.5rem;
  margin-bottom: 1.5rem;
}

/* Responsive menu */
@media (max-width: 768px) {
  nav {
    flex-direction: column;
    align-items: center;
  }
}
<?php }
}
