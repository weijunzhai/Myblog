<?php
	class indexController{
		function index(){
			$newsobj = M('news');
			$data = $newsobj->get_news_list();
			VIEW::assign(array('data'=>$data));
			VIEW::display('H:/xampp/htdocs/phpAndMysql/MVC/tpl/index/index.html');
		}

		function newsshow(){
			$data = M('news')->getnewsinfo($_GET['id']);
			VIEW::assign(array('data'=>$data));
			VIEW::display('H:/xampp/htdocs/phpAndMysql/MVC/tpl/index/show.html');

		}

		function search(){
			$newsobj = M('news');
			$data = $newsobj->search_news_list($_GET['key']);
			VIEW::assign(array('data'=>$data));
			VIEW::display('H:/xampp/htdocs/phpAndMysql/MVC/tpl/index/index.html');
		}
	}
?>