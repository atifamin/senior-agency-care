<?php

class Common_model extends CI_Model
{
    function __construct()
    {

        parent::__construct();
    }

    
    //******************************* lOGIN FUNCTION*******************************//
    function check_auth($email, $password,$table_name)
    {
    	$this -> db -> select('*');
    	$this -> db -> from($table_name);
    	$this -> db -> where('email', $email);
    	$this -> db -> where('password',$password);
    	$this -> db -> limit(1);
    	$query = $this->db->get();
    	return $query->row();
    }

    function check_username_auth($username, $password,$table_name)
    {
    	$this -> db -> select('*');
    	$this -> db -> from($table_name);
    	$this -> db -> where('username', $username);
    	$this -> db -> where('password',$password);
    	$this -> db -> limit(1);
    	$query = $this->db->get();
    	return $query->row();
    }
    
    
    public function query($query)
    {
        return $this->db->query($query);
    }


//-----------------INSERT DATA--------------------//
    public function add($table, $data)
    {
        $this->db->insert($table, $data);
        $id = $this->db->insert_id();
        return $id;
    }
    /*************************************************/


//-----------------LOAD DATA--------------------//
    public function load_query($query){
        $Q = $this->db->query($query);
        if ($Q->num_rows() > 0) {
            return $Q->result();
        } else {
            return '';
        }
    }
    /*************************************************/


//-----------------UPDATE DATA--------------------//
    public function update_query($table, $data, $where, $value)
    {
        $this->db->where($where, $value);
        $Q = $this->db->update($table, $data);
      
    }

    /*************************************************/


//-----------------DELETE DATA--------------------//
    public function delete_query($query)
    {
        $this->db->query($query);
    }
    /*************************************************/


//-----------------COUNT QUERY--------------------//
    public function count_query($query)
    {
        $Q = $this->db->query($query);
        $result = $Q->row_array();
        return $result['count(*)'];
    }

    public function countTableRows($tableName)
    {
        $count = $this->db->count_all_results($tableName);
        return $count;
    }
    /*************************************************/
    //-----------------Inset Record-----------------//
    function insert($tbl_name, $data)
    {
        $this->db->insert($tbl_name, $data);
    }

    /**********************************************/
    function edit($where_colum, $where, $tbl_name, $data)
    {
        $this->db->where($where_colum, $where);
        $this->db->update($tbl_name, $data);
    } 
    public function load_query_where($query, $where, $limit = "")
    {
    	$this->db->where($where);
    	$Q = $this->db->get($query);
    	if ($limit != "") {
    		$this->db->limit($limit);
    	}
    	if ($Q->num_rows() > 0) {
    		return $Q->result();
    	} else {
    		return '';
    	}
    }
	
	public function getFieldName($tableName, $whereColumn, $whereValue, $returnColumn){
		$query = $this->db->where($whereColumn, $whereValue)->get($tableName)->row();
		if(!empty($query->$returnColumn)){
			return $query->$returnColumn;
		}else{
			return "";
		}
	}
	public function getFieldNameMultipleArray($tableName, $whereArray, $returnColumn){
		foreach($whereArray as $key=>$val){
			$this->db->where($key, $val);
		}
		$query = $this->db->get($tableName)->row();
		///print_r($this->db->last_query()); exit;
		if(!empty($query->$returnColumn)){
			return $query->$returnColumn;
		}else{
			return "";
		}
	}
	public function runRawQuery($Query){
		return $this->db->query($Query);
	}
	public function getSingleRow($Query){
		$result = $this->db->query($Query);
		$row = $result->result_array();
		return $row[0];
	}
	public function insertQuery($TableName, $Data){
		$QUERY = $this->db->insert($TableName, $Data);
		if($QUERY){ return TRUE; }else{ return FALSE; }
	}
	public function insertGetIDQuery($TableName, $Data){
		$this->db->insert($TableName, $Data);
		return $this->db->insert_id();
	}
	public function updateQuery($TableName, $whereColumn, $whereColumnValue, $Data){
		$this->db->where($whereColumn, $whereColumnValue);
		$QUERY = $this->db->update($TableName, $Data);
		if($QUERY){ return TRUE; }else{ return FALSE; }
	}
	public function updateMultipleWhereQuery($TableName, $WhereArray, $Data){
		if(!empty($WhereArray)){
			foreach($WhereArray as $key => $val){
				$this->db->where($key, $val);
			}
		}
		$QUERY = $this->db->update($TableName, $Data);
		if($QUERY){ return TRUE; }else{ return FALSE; }
	}
	public function listingResult($TableName){
		$this->db->from($TableName);
		$Query = $this->db->get();
		return $Query->result();
	}
	public function listingResultWhere($WhereColumn,$WhereValue,$TableName){
		$this->db->from($TableName);
		$this->db->where($WhereColumn, $WhereValue); 
		$Query = $this->db->get();
		return $Query->result();
	}
	public function listingRow($WhereColumn,$WhereValue,$TableName){
		$this->db->from($TableName);
		$this->db->where($WhereColumn, $WhereValue);
		$Query = $this->db->get();
		return $Query->row();
	}
	public function listingMultipleWhereResult($TableName, $WhereArray){
		$this->db->from($TableName);
		if(!empty($WhereArray)){
			foreach($WhereArray as $key => $val){
				$this->db->where($key, $val);
			}
		}
		$Query = $this->db->get();
		return $Query->result();
	}
	public function listingMultipleWhereResultOrderBy($TableName, $WhereArray,$orderByColumn = NULL,$orderBy = NULL){
		$this->db->from($TableName);
		if(!empty($WhereArray)){
			foreach($WhereArray as $key => $val){
				$this->db->where($key, $val);
			}
		}
		if($orderBy != NULL && $orderByColumn != NULL){
			$this->db->order_by($orderByColumn,$orderBy);
		}
		$Query = $this->db->get();
		return $Query->result();
	}
	public function listingMultipleWhereRow($TableName, $WhereArray){
		$this->db->from($TableName);
		if(!empty($WhereArray)){
			foreach($WhereArray as $key => $val){
				$this->db->where($key, $val);
			}
		}
		$Query = $this->db->get();
		return $Query->row();
	}
	
	public function delete($TableName, $WhereArray){
		if(!empty($WhereArray)){
			foreach($WhereArray as $key => $val){
				$this->db->where($key, $val);
			}
		}
		$QUERY = $this->db->delete($TableName);
		if($QUERY){ return TRUE; }else{ return FALSE; }
	}
	public function countRows($TableName, $WhereArray){
		$this->db->select("COUNT(*) as count");
		$this->db->from($TableName);
		if(!empty($WhereArray)){
			foreach($WhereArray as $key => $val){
				$this->db->where($key, $val);
			}
		}
		$Query = $this->db->get();
		return $Query->row()->count;
	}
	public function slug($text, $tblname){
		$text = preg_replace('~[^\\pL\d]+~u', '-', $text);
		$text = trim($text, '-');
		$text = iconv('utf-8', 'us-ascii//TRANSLIT', $text);
		$text = strtolower($text);
		$text = preg_replace('~[^-\w]+~', '', $text);
		if (empty($text)) return 'n-a';
		//checking from table
		$result = $this->db
				  ->where("slug", $text)
				  ->get($tblname)->row();
		/*$tbl = DB::table($tblname);
		$tbl->where("slug", $text);
		$result = $tbl->first();*/
		
		if(count($result)>0){
			$slug = $result->slug;
			$result1 = $this->db->query("SELECT *
			FROM projects_folders
			WHERE slug LIKE '".$slug."-%'
			ORDER BY slug DESC
			LIMIT 1")->row();
			/*$tbl1 = DB::table($tblname);
			$tbl1->where("slug", "like", "".$slug."-%");
			$tbl1->orderBy("slug", "DESC");
			$tbl1->limit(1);
			$result1 = $tbl1->first();*/
			
			if(count($result1)>0){
				$counter = explode("-", $result1->slug);
				$counter = end($counter);
				$counter++;
				$text = $text.'-'.($counter);
				return $text;
			}else{
				$counter = 0;
				$counter++;
				$text = $text.'-'.($counter);
				return $text;
			}
		}
		return $text;
	}
	public function dateDifferance($dateTime){
		$seconds = strtotime($dateTime) - time();
		
		$days = floor($seconds / 86400);
		$seconds %= 86400;
		
		$hours = floor($seconds / 3600);
		$seconds %= 3600;
		
		$minutes = floor($seconds / 60);
		$seconds %= 60;
		
		$data = array("days"=>$days,"hours"=>$hours,"minutes"=>$minutes,"seconds"=>$seconds);
		return $data;
	}
	
	public function dateDifferanceTwoDates($fromDate, $toDate){
		$a = strtotime($fromDate);
		$b = strtotime($toDate);
		
		$difference = $b-$a;
		
		$second = 1;
		$minute = 60*$second;
		$hour   = 60*$minute;
		$day    = 24*$hour;
		
		$ans["day"]    = floor($difference/$day);
		$ans["hour"]   = floor(($difference%$day)/$hour);
		$ans["minute"] = floor((($difference%$day)%$hour)/$minute);
		$ans["second"] = floor(((($difference%$day)%$hour)%$minute)/$second);
		$data = array("days"=>$ans["day"],"hours"=>$ans["hour"],"minutes"=>$ans["minute"],"seconds"=>$ans["second"]);
		return $data;
	}
	
	public function insert_remeber_emails($emails, $user_id){
		$emails = explode(",", $emails);
		if(count($emails)>0){
			foreach($emails as $email){
				$check = $this->remeber_email_check($email, $user_id);
				if($check->num_rows()<=0){
					$this->db->insert("remeber_emails", array("user_id" => $user_id, "email" => $email));
				}
			}	
		}
	}
    public function remeber_email_check($email, $user_id){
    	$this->db->select("email");
    	$this->db->from("remeber_emails");
    	$this->db->where('user_id', $user_id);
    	$this->db->where('email', $email);
    	return $this->db->get();
    }
    public function get_remeber_emails($user_id){
    	$this->db->select("email");
    	$this->db->from("remeber_emails");
    	$this->db->where('user_id', $user_id);
		$this->db->group_by("email");
    	return $this->db->get();
    }
	public function UniqueRandomNumbersWithinRange($min, $max, $quantity) {
		$numbers = range($min, $max);
		shuffle($numbers);
		$num = '';
		foreach(array_slice($numbers, 0, $quantity) as $row){
			$num .= $row;
		}
		return $num;
	}
}

?>