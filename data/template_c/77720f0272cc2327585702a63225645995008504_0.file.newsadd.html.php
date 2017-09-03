<?php
/* Smarty version 3.1.30, created on 2017-08-29 23:26:23
  from "H:\xampp\htdocs\phpAndMysql\MVC\tpl\admin\newsadd.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_59a5dbff857c17_45040567',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '77720f0272cc2327585702a63225645995008504' => 
    array (
      0 => 'H:\\xampp\\htdocs\\phpAndMysql\\MVC\\tpl\\admin\\newsadd.html',
      1 => 1504041981,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:admin/leftmenu.html' => 1,
  ),
),false)) {
function content_59a5dbff857c17_45040567 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!doctype html>
<html>
<head>
	<meta charset="utf-8"/>
	<title>Back-End Management</title>
	
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
		    
		      <form class="navbar-form navbar-right">
		        <div class="form-group">
		          <input type="text" class="form-control" placeholder="Search">
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

		<?php $_smarty_tpl->_subTemplateRender("file:admin/leftmenu.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

		
		<div class="row mainbox col-md-9">
			<h3>Adding New Blog</h3>
			<hr>
			<form id="form1" name="form1" method="post" action="admin.php?controller=admin&method=newsadd" class="form-horizontal">
				<div class="form-group">
					<label for="title" class="col-sm-2 control-label">Title</label>
					<div class="col-sm-10">
						<input type="text" name="title" id='title' value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['data']->value['title'])===null||$tmp==='' ? '' : $tmp);?>
" class="form-control">
					</div>
				</div>

				<div class="form-group">
					<label for="content" class="control-label col-sm-2">Content</label>
					<div class="col-sm-10">
						<textarea rows="12" name="content" id="content" class="form-control"><?php echo (($tmp = @$_smarty_tpl->tpl_vars['data']->value['content'])===null||$tmp==='' ? '' : $tmp);?>
</textarea>
					</div>
				</div>

				<div class="form-group">
					<label for="author" class="col-sm-2 control-label">Author</label>
					<div class="col-sm-10">
						<input type="text" name="author" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['data']->value['author'])===null||$tmp==='' ? '' : $tmp);?>
" class="form-control">
					</div>
				</div>
					
				<div class="form-group">
					<label for="from" class="col-sm-2 control-label">From</label>
					<div class="col-sm-10">
						<input type="text" name="from" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['data']->value['from'])===null||$tmp==='' ? '' : $tmp);?>
" class="form-control">
					</div>
				</div>

				<input type="hidden" name="id" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['data']->value['id'])===null||$tmp==='' ? '' : $tmp);?>
">

				<div class="col-sm-offset-2 col-sm-10">
					<button type="submit" name="submit" class="btn btn-primary">Submit</button>
				</div>
			</form>
		</div>
	</div>

<!-- footer -->

	<div class="space">
	  <footer>
	      <p align=center>@Copyright 2017 Weijun Zhai</p>
	  </footer>
	</div>
	
	<?php echo '<script'; ?>
 src="img/js/holder.min.js"><?php echo '</script'; ?>
>
	
</body>

</html><?php }
}
