<?php
/* Smarty version 3.1.30, created on 2017-08-29 03:23:27
  from "H:\xampp\htdocs\phpAndMysql\MVC\tpl\index\show.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_59a46dafbbcfc4_78229998',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1f2df3f51c4e8be5513c43e6c15d28a86445afdd' => 
    array (
      0 => 'H:\\xampp\\htdocs\\phpAndMysql\\MVC\\tpl\\index\\show.html',
      1 => 1503948200,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_59a46dafbbcfc4_78229998 (Smarty_Internal_Template $_smarty_tpl) {
if (!is_callable('smarty_modifier_capitalize')) require_once 'H:\\xampp\\htdocs\\phpAndMysql\\MVC\\framework\\libs\\view\\Smarty\\plugins\\modifier.capitalize.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title><?php echo $_smarty_tpl->tpl_vars['data']->value['title'];?>
</title>

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
		      <ul class="nav navbar-nav">
		        <!-- <li class="active"><a href="#">Link <span class="sr-only">(current)</span></a></li>
		        <li><a href="#">Link</a></li>
		        <li class="dropdown">
		          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dropdown <span class="caret"></span></a>
		          <ul class="dropdown-menu">
		            <li><a href="#">Action</a></li>
		            <li><a href="#">Another action</a></li>
		            <li><a href="#">Something else here</a></li>
		            <li role="separator" class="divider"></li>
		            <li><a href="#">Separated link</a></li>
		            <li role="separator" class="divider"></li>
		            <li><a href="#">One more separated link</a></li>
		          </ul>
		        </li> -->
		      </ul>
		      <form class="navbar-form navbar-right">
		        <div class="form-group">
		          <input type="text" class="form-control" placeholder="Search">
		        </div>
		        <button type="submit" class="btn btn-default">Search</button>
		      </form>
		      <ul class="nav navbar-nav navbar-right">
		        <!-- <li><a href="#">Sign In</a></li> -->
		        <li><a href="admin.php?controller=admin&method=login">Admin Sign In</a></li>
		        <!-- <li class="dropdown">
		          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dropdown <span class="caret"></span></a>
		          <ul class="dropdown-menu">
		            <li><a href="#">Action</a></li>
		            <li><a href="#">Another action</a></li>
		            <li><a href="#">Something else here</a></li>
		            <li role="separator" class="divider"></li>
		            <li><a href="#">Separated link</a></li>
		          </ul>
		        </li> -->
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
			<div class="page-header">
				<h1><?php echo smarty_modifier_capitalize($_smarty_tpl->tpl_vars['data']->value['title']);?>
</h1>
			</div>
			<p><?php echo $_smarty_tpl->tpl_vars['data']->value['content'];?>
</p>
			<br>
			<p><?php echo $_smarty_tpl->tpl_vars['data']->value['author'];?>
发布于<?php echo date('Y-m-d H:i:s',$_smarty_tpl->tpl_vars['data']->value['dateline']);?>
</p>
		</div>
	</div>
	<div class="space"></div>

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
