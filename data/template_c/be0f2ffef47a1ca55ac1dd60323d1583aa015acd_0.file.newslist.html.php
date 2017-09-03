<?php
/* Smarty version 3.1.30, created on 2017-09-03 16:46:40
  from "H:\xampp\htdocs\phpAndMysql\MVC\tpl\admin\newslist.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_59ac15d0bcea41_29967562',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'be0f2ffef47a1ca55ac1dd60323d1583aa015acd' => 
    array (
      0 => 'H:\\xampp\\htdocs\\phpAndMysql\\MVC\\tpl\\admin\\newslist.html',
      1 => 1504052568,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:admin/leftmenu.html' => 1,
  ),
),false)) {
function content_59ac15d0bcea41_29967562 (Smarty_Internal_Template $_smarty_tpl) {
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

	<div class="container mainbody">
	
		<?php $_smarty_tpl->_subTemplateRender("file:admin/leftmenu.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


		<div class="row mainbox col-md-9">
			<h3>Blog List</h3>
			<hr>
			<table class="table table-striped">
				<thead> 
					<tr>  
	    				<th>ID</th>
	    				<th>Title</th>
	    				<th>Author</th>
	    				<th>Action</th>
					</tr> 
				</thead>
				<tbody>
					<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['data']->value, 'value');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['value']->value) {
?>
						<tr>
		    				<td><?php echo $_smarty_tpl->tpl_vars['value']->value['id'];?>
</td> 
		    				<td><?php echo $_smarty_tpl->tpl_vars['value']->value['title'];?>
</td> 
		    				<td><?php echo $_smarty_tpl->tpl_vars['value']->value['author'];?>
</td> 
		    				<td><input type="image" src="img/images/icn_edit.png" title="Edit" onclick="window.location.href='admin.php?controller=admin&method=newsadd&id=<?php echo $_smarty_tpl->tpl_vars['value']->value['id'];?>
'"> B<input type="image" src="img/images/icn_trash.png" title="Trash" onclick="window.location.href='admin.php?controller=admin&method=newsdel&id=<?php echo $_smarty_tpl->tpl_vars['value']->value['id'];?>
'"></td>
						</tr>
					<?php
}
} else {
?>

					<tr>
						<td  colspan=4>
							No Blogs
						</td>
					</tr>
					<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

				</tbody>
			</table>
		</div>


</body>

</html>

<?php }
}
