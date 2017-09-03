<?php 
	class mysql{

	 	private $con;

		function err($error){
			//die has two functions, output and termination
			die("sorry, your input is now working, and the reason is ".$error);
		}

		//$config 是配置数组， array($dbhost, $dbuser, $dbpsw, $dbname, $dbcharset)
		function connect($config){
			extract($config);
			$this->con = mysqli_connect($dbhost, $dbuser, $dbpsw, $dbname);
			if(!($this->con)){
				$this->err(mysqli_error($this->con));
			}

			//mysqli_set_charset($con, utf8);
		}

		function query($sql){
			if(!($query=mysqli_query($this->con, $sql))){
				$this->err($sql."<br/>".mysqli_error($this->con));
			}else{
				return $query;
			}
		}

		function findAll($query){
			while($rs=mysqli_fetch_array($query, MYSQLI_ASSOC)){
				$list[]=$rs;
			}
			return isset($list)?$list:"";
		}

		function findOne($query){
			$rs = mysqli_fetch_array($query, MYSQLI_ASSOC);
			return $rs;
		}

		function findResult($query){
			$rs = mysqli_fetch_array($query, MYSQLI_NUM);
			return $rs[0];
		}

		function insert($table, $arr){
			//$sql = "insert into talbename values"
			
			foreach($arr as $key=>$value){
				$value = mysqli_real_escape_string($this->con, $value);
				$keyArr[] = "`".$key."`";
				$valueArr[] = "'".$value."'";
			}
			$keys = implode(",",$keyArr);
			$values = implode(",", $valueArr);
			$sql = "insert into ".$table."(".$keys.") values(".$values.")";
			$this->query($sql);
			return mysqli_insert_id($this->con);
		}

		function update($table, $arr, $where){
			foreach($arr as $key=>$value){
				$value=mysqli_real_escape_string($this->con, $value);
				$keyAndValueArr[]="`".$key."`='".$value."'";
			}
			$keyAndValues=implode(",", $keyAndValueArr);
			$sql="update ".$table." set ".$keyAndValues." where ".$where;
			$this->query($sql);
		}

		function del($table, $where){
			$sql="delete from ".$table." where ".$where;
			$this->query($sql);
		}
	}

?>