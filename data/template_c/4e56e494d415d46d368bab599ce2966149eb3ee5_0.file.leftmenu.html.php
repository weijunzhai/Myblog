<?php
/* Smarty version 3.1.30, created on 2017-08-29 01:16:01
  from "H:\xampp\htdocs\phpAndMysql\MVC\tpl\admin\leftmenu.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_59a4a431646f34_27208351',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4e56e494d415d46d368bab599ce2966149eb3ee5' => 
    array (
      0 => 'H:\\xampp\\htdocs\\phpAndMysql\\MVC\\tpl\\admin\\leftmenu.html',
      1 => 1503961551,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_59a4a431646f34_27208351 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="row col-md-3 hidden-xs hidden-sm">
	<div>
		<h4>Blogs Management</h4>
		<ul>
			<li><a href="admin.php?controller=admin&method=newsadd">Add Blog</a></li>
			<li><a href="admin.php?controller=admin&method=newslist">Manage Blogs</a></li>
		</ul>
		<h4>Admin Management</h4>
		<ul>
			<li><a href="admin.php?controller=admin&method=logout">Log Out</a></li>
		</ul>

	</div><!-- end of sidebar -->
</div> <?php }
}
