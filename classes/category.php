<?php
$filepath = realpath(dirname(__FILE__));
include_once($filepath.'/../lib/database.php' );
include_once ($filepath.'/../helpers/format.php');
?>

<?php
/**
 *
 */
class category 
{
    private $db;
    private $fm;
    public function __construct()
    {
        $this->db = new Database();
        $this->fm = new Format();
    }
    public function insert_category($catName)
    {
        $catName = $this
            ->fm
            ->validation($catName);
      

        $catName = mysqli_real_escape_string($this
            ->db->link, $catName);
       
        if (empty($catName))
        {
            $alert = "<span class='error'>Please enter your category Name </span>";
            return $alert;
        }
        else
        {
            $query = "INSERT INTO tbl_danhmuc(catName) values('$catName')";
            $result = $this
                ->db
                ->insert($query);
			 if($result){
				 $alert ="<span class='success'>Insert category successfully</span>";
				 return $alert;
			 }else{
				 $alert="<span class='error'>Insert category not successfully</span>";
				 return $alert;
			 }
           		
        }
		
    }
	public function show_category(){
			$query = "SELECT* FROM tbl_danhmuc order by catID ";
			$result = $this -> db->select($query);
			return $result;
	}
	public function show_category1(){
			$query = "SELECT* FROM tbl_danhmuc order by catID ";
			$result = $this -> db->select($query);
			return $result;
	}
	public function getcatbyid($id){
		$query = "SELECT* FROM tbl_danhmuc WHERE catID='$id'";
			$result = $this -> db->select($query);
			return $result;
	}
	public function del_category($id){
		$query ="DELETE FROM tbl_danhmuc WHERE catID='$id'";
			$result =$this ->db->delete($query);
		 if($result){
				 $alert ="<span class='success'>Deleted category successfully</span>";
				 return $alert;
			 }else{
				 $alert="<span class='error'>Deleted category not successfully</span>";
				 return $alert;
			 }
	}
	public function update_category($catName,$id){
		 $catName = $this
            ->fm
            ->validation($catName);
      

        $catName = mysqli_real_escape_string($this
            ->db->link, $catName);
		$id = mysqli_real_escape_string($this
            ->db->link, $id);
        if (empty($catName))
        {
            $alert = "<span class='error'>Please enter your category Name </span>";
            return $alert;
        }
        else
        {
            $query = "UPDATE tbl_danhmuc SET catName = '$catName' WHERE catID='$id'";
            $result = $this
                ->db
                ->update($query);
			 if($result){
				 $alert ="<span class='success'>Updated category successfully</span>";
				 return $alert;
			 }else{
				 $alert="<span class='error'>Updated category not successfully</span>";
				 return $alert;
			 }
           		
        }
	}
	
}
?>