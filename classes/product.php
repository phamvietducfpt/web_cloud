<?php
$filepath = realpath(dirname(__FILE__));
include_once ($filepath.'/../lib/database.php');
include_once($filepath.'/../helpers/format.php');
?>

<?php
/**
 *
 */
class product
{
    private $db;
    private $fm;
    public function __construct()
    {
        $this->db = new Database();
        $this->fm = new Format();
    }
    public function insert_product($data, $files)
    {
        $productName = mysqli_real_escape_string($this
            ->db->link, $data['productName']);

        $category = mysqli_real_escape_string($this
            ->db->link, $data['category']);

        $product_desc = mysqli_real_escape_string($this
            ->db->link, $data['product_desc']);

        $price = mysqli_real_escape_string($this
            ->db->link, $data['price']);
		$price_KM = mysqli_real_escape_string($this
            ->db->link, $data['price_KM']);
		 $type = mysqli_real_escape_string($this
            ->db->link, $data['type']);

        $permited = array(
            'jpg',
            'jpeg',
            'png',
            'gif'
        );
        $file_name = $_FILES['image']['name'];
        $file_size = $_FILES['image']['size'];
        $file_temp = $_FILES['image']['tmp_name'];

        $div = explode('.', $file_name);
        $file_ext = strtolower(end($div));
        $unique_image = substr(md5(time()) , 0, 10) . '.' . $file_ext;
        $uploaded_image = "uploads/" . $unique_image;

        if ($productName == "" || $category == "" || $product_desc == "" || $price == "" || $price_KM== "" || $file_name == "" || $type == "")
        {
            $alert = "<span class='error'> Please fill out the form  </span>";
            return $alert;
        }
        else
        {
            move_uploaded_file($file_temp, $uploaded_image);
            $query = "INSERT INTO tbl_product(productName,catID,product_desc,price,price_KM,image,type) values('$productName','$category','$product_desc','$price','$price_KM','$unique_image','$type')";
            $result = $this
                ->db
                ->insert($query);
            if ($result)
            {
                $alert = "<span class='success'>Insert product successfully</span>";
                return $alert;
            }
            else
            {
                $alert = "<span class='error'>Insert product not successfully</span>";
                return $alert;
            }

        }

    }
    public function show_product()
    {
        $query = "
		SELECT tbl_product.*, tbl_danhmuc.catName
		FROM tbl_product INNER JOIN tbl_danhmuc ON tbl_product.catID = tbl_danhmuc.catID
		order by tbl_product.productID ";

        //			$query = "SELECT* FROM tbl_product order by productID ";
        $result = $this
            ->db
            ->select($query);
        return $result;
    }
    public function getproductbyid($id)
    {
        $query = "SELECT* FROM tbl_product WHERE productID='$id'";
        $result = $this
            ->db
            ->select($query);
        return $result;
    }
    public function del_product($id)
    {
        $query = "DELETE FROM tbl_product WHERE productID='$id'";
        $result = $this
            ->db
            ->delete($query);
        if ($result)
        {
            $alert = "<span class='success'>Deleted product successfully</span>";
            return $alert;
        }
        else
        {
            $alert = "<span class='error'>Deleted product not successfully</span>";
            return $alert;
        }
    }
    public function update_product($data, $file, $id)
    {
        $productName = mysqli_real_escape_string($this
            ->db->link, $data['productName']);

        $category = mysqli_real_escape_string($this
            ->db->link, $data['category']);

        $product_desc = mysqli_real_escape_string($this
            ->db->link, $data['product_desc']);
        $price = mysqli_real_escape_string($this
            ->db->link, $data['price']);
		 $price_KM = mysqli_real_escape_string($this
            ->db->link, $data['price_KM']);
		 $type = mysqli_real_escape_string($this
            ->db->link, $data['type']);

        $permited = array(
            'jpg',
            'jpeg',
            'png',
            'gif'
        );
        $file_name = $_FILES['image']['name'];
        $file_size = $_FILES['image']['size'];
        $file_temp = $_FILES['image']['tmp_name']; 

        $div = explode('.', $file_name);
        $file_ext = strtolower(end($div));
        $unique_image = substr(md5(time()) , 0, 10) . '.' . $file_ext;
        $uploaded_image = "uploads/" . $unique_image;
        if ($productName == "" || $category == "" || $product_desc == "" || $price == "" || $price_KM == "" || $type== "")
        {
            $alert = "<span class='error'>Please fill out the form </span>";
            return $alert;
        }
        else
        {
            if (!empty($file_name))
            {	//nếu chọn ảnh
                if ($file_size > 1048567)
                {
                    $alert = "<span class='error'>Image size must not exceed 10MB! </span>";
                    return $alert;

                }
                elseif (in_array($file_ext, $permited) === false)
                {
                    //			echo "<span class="error"> You can upload only :-".implode(',',$permited)."</span>";
                    $alert = "<span class='error'>You can upload only :-" . implode(',', $permited) . " </span>";
                    return $alert;
                }
                move_uploaded_file($file_temp, $uploaded_image);
                $query = "UPDATE tbl_product SET 
				productName = '$productName',
				catID = '$category',
				product_desc = '$product_desc',
				price = '$price',
				price_KM = '$price_KM',
				image = '$unique_image',
				type = '$type' 
				WHERE productID='$id'";
            }
            else
            {
                //				nếu người dùng kh chọn ảnh
				 
                $query = "UPDATE tbl_product SET 
				productName = '$productName',
				catID = '$category',
				product_desc = '$product_desc',
				price = '$price',
				price_KM = '$price_KM',
				
				type = '$type' 
				
				WHERE productID='$id'";
			}

            $result = $this
                ->db
                ->update($query);
            if ($result)
            {
               
				
				 $alert = "<span class='success'>Updated product successfully</span>";
                return $alert;
            }
            else
            {
                $alert = "<span class='error'>Updated product not successfully</span>";
                return $alert;
            }	
        }
		
		
	
    }
	//BACKEND
	public function getproduct_khuyenmai() {
			$query = "SELECT* FROM tbl_product where type ='1'";
			 $result = $this
            ->db
            ->select($query);
		return $result;
			
		}
	public function get_product_infor($id)
    {
        $query = "
		SELECT tbl_product.*, tbl_danhmuc.catName
		FROM tbl_product INNER JOIN tbl_danhmuc ON tbl_product.catID = tbl_danhmuc.catID
		WHERE tbl_product.productID='$id'";

        //			$query = "SELECT* FROM tbl_product order by productID ";
        $result = $this
            ->db
            ->select($query);
        return $result;
    }
	

}
?>
