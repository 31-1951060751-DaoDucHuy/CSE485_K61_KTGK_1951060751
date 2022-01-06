<?php
include "config.php";

if(isset($_GET["manv"])){


$id = $_GET["manv"];
$sql ="DELETE FROM giangvien WHERE magv =$id";
$result = mysqli_query($conn,$sql);

if($result==true){
    $_SESSION['delete'] = "<div class='text-success'>Xóa Thành Công.</div>";
    header("Location:hienthi.php");
}
else{
    $_SESSION['delete'] = "<div class='text-danger'>Xóa Thất Bại.</div>";
    header("Location:hienthi.php");

}
}
?>