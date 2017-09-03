<?php
	class newsModel{

		public $_table = 'news';



		function findAll_orderby_dateline(){
			$sql = 'select * from '.$this->_table.' order by dateline desc';
			return DB::findAll($sql);
		}

		function findAll_by_search($key){
			$sql = "select * from ".$this->_table." where title like '%$key%' order by dateline desc";
			return DB::findAll($sql);
		}

		function findOne_by_id($id){
			$sql = 'select * from '.$this->_table.' where id='.$id;
			return DB::findOne($sql);
		}

		function del_by_id($id){
			return DB::del($this->_table, 'id='.$id);
		}

		function count(){
			$sql = 'select count(*) from '.$this->_table;
			return DB::findResult($sql);
		}

		function insert($data){
			return DB::insert($this->_table, $data);
		}

		function update($data, $id){
			return DB::update($this->_table, $data, 'id='.$id);
		}

		function get_news_list(){
			$data = $this->findAll_orderby_dateline();
			foreach ($data as $k => $news) {
				$data[$k]['content'] = mb_substr(strip_tags($data[$k]['content']), 0, 200);
				$data[$k]['dateline'] = date('Y-m-d H:i:s', $data[$k]['dateline']);

			}
			return $data;
		}

		function search_news_list($key){
			$data = $this->findAll_by_search($key);
			foreach ($data as $k => $news) {
				$data[$k]['content'] = mb_substr(strip_tags($data[$k]['content']), 0, 200);
				$data[$k]['dateline'] = date('Y-m-d H:i:s', $data[$k]['dateline']);

			}
			return $data;
		}

		function get_news($id){
			$data = $this->findOne_by_id($id);
			$data['dateline'] = date('Y-m-d H:i:s', $data['dateline']);
			return $data;

		}

		function getnewsinfo($id){
			if(!empty($id)){
				$id = intval($id);
				$sql = 'select * from '.$this->_table.' where id='.$id;
				return DB::findOne($sql);
			}else{
				return array();
			}
		}

		
	}
?>