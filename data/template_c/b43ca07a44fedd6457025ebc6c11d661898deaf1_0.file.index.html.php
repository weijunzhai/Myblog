<?php
/* Smarty version 3.1.30, created on 2017-08-29 00:46:20
  from "H:\xampp\htdocs\phpAndMysql\MVC\tpl\admin\index.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_59a49d3cc7f961_67133092',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b43ca07a44fedd6457025ebc6c11d661898deaf1' => 
    array (
      0 => 'H:\\xampp\\htdocs\\phpAndMysql\\MVC\\tpl\\admin\\index.html',
      1 => 1503960379,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:admin/leftmenu.html' => 1,
  ),
),false)) {
function content_59a49d3cc7f961_67133092 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!doctype html>
<html>
<head>
	<meta charset="utf-8"/>
	<title>Back End Center</title>
	
	<link rel="stylesheet" href="img/css/mystyle.css" type="text/css" />
	<link rel="stylesheet" type="text/css" href="img/css/bootstrap.min.css" />
	<!--[if lt IE 9]>
	<link rel="stylesheet" href="img/css/ie.css" type="text/css" media="screen" />
	<?php echo '<script'; ?>
 src="img/js/html5.js"><?php echo '</script'; ?>
>
	<![endif]-->

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
		      <a class="navbar-brand" href="#">Back-End Management</a>
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
		        <li><a href="index.php">My Blogs</a></li>
		        
		      </ul>
		    </div><!-- /.navbar-collapse -->

		  </div><!-- /.container-fluid -->
		</nav>
	</div>

	


	<div class="container mainbody">
	
		<?php $_smarty_tpl->_subTemplateRender("file:admin/leftmenu.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>



		<div class="row mainbox col-md-9">
			<article>
				<header><h3>There are <?php echo $_smarty_tpl->tpl_vars['newsnum']->value;?>
 blogs</h3></header>
				<div>
					<p></p>
					<div></div>
				</div>
			</article><!-- end of stats article -->

			<div></div>

			<div></div>
		</div>
	</div>

<!-- footer -->
	<div class="space"></div>
	<div class="container space myfooter">
	  <footer>
	      <p align=center>© Copyright 2017 Weijun Zhai</p>
	  </footer>
	</div>



</body>

</html><?php }
}
