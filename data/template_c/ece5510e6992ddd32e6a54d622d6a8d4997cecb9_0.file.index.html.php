<?php
/* Smarty version 3.1.30, created on 2017-08-30 07:51:19
  from "H:\xampp\htdocs\phpAndMysql\MVC\tpl\index\index.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_59a5fdf7667fc8_96157321',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ece5510e6992ddd32e6a54d622d6a8d4997cecb9' => 
    array (
      0 => 'H:\\xampp\\htdocs\\phpAndMysql\\MVC\\tpl\\index\\index.html',
      1 => 1504050633,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_59a5fdf7667fc8_96157321 (Smarty_Internal_Template $_smarty_tpl) {
if (!is_callable('smarty_modifier_capitalize')) require_once 'H:\\xampp\\htdocs\\phpAndMysql\\MVC\\framework\\libs\\view\\Smarty\\plugins\\modifier.capitalize.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>My Home Page</title>

	<link rel="stylesheet" type="text/css" href="img/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="img/css/mystyle.css">
</head>
<body>
	
<!-- Navbar -->
	<div>
		<nav class="navbar navbar-default navbar-fixed-top">
		  <div class="container">
		    <!-- Brand and toggle get grouped for better mobile display -->
		    <div class="navbar-header">
		      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
		        <span class="sr-only">Toggle navigation</span>
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
		      </button>
		      <a class="navbar-brand" href="index.php">VikingBlog</a>
		    </div>

		    <!-- Collect the nav links, forms, and other content for toggling -->
		    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
		    
		      <form class="navbar-form navbar-right" action="index.php?controller=index&method=search" method="GET">
		        <div class="form-group">
		          <input type="text" class="form-control" placeholder="Search" name="key">
		        </div>
		        <button type="submit" class="btn btn-default">Search</button>
		      </form>
		      <ul class="nav navbar-nav navbar-right">
		        <!-- <li><a href="#">Sign In</a></li> -->
		        <li><a href="admin.php?controller=admin&method=login">Admin Sign In</a></li>
		     
		      </ul>
		    </div><!-- /.navbar-collapse -->

		  </div><!-- /.container-fluid -->
		</nav>
	</div>

<!-- content -->
	<div class="container mainbody">
		<div class="sidebox row col-md-3 hidden-xs hidden-sm">
			<img src="holder.js/100px600">	
		</div>

		<div class="row mainbox col-md-9">
			<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['data']->value, 'news');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['news']->value) {
?>
				
				<h2><a href="index.php?controller=index&method=newsshow&id=<?php echo $_smarty_tpl->tpl_vars['news']->value['id'];?>
"><?php echo smarty_modifier_capitalize($_smarty_tpl->tpl_vars['news']->value['title']);?>
</a></h2>
				<hr>
				<p><?php echo $_smarty_tpl->tpl_vars['news']->value['content'];?>
</p>
				<br>
				<small><?php echo $_smarty_tpl->tpl_vars['news']->value['author'];?>
 发布于<?php echo $_smarty_tpl->tpl_vars['news']->value['dateline'];?>
</small>
				<div class="space"></div>
			<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

			
		</div>		
	</div>

<!-- footer -->
	<div class="space"></div>
	<div class="container space myfooter">
	  <footer>
	      <p align=center>© Copyright 2017 Weijun Zhai</p>
	  </footer>
	</div>


	<?php echo '<script'; ?>
 src="img/js/holder.min.js"><?php echo '</script'; ?>
>

	
	
</body>
</html><?php }
}
