<?php
include "config.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="/mvc/css/style.css">
    <title>Admin</title>
</head>

<body>
    <div class="main">
        <div class="container">
            <h4 class="title">Thêm dữ liệu </h4>

            <form action="" method="POST">
                <div class="row">
                    <div class="col-md-2">
                        <label for="patient_Name">magv</label>
                    </div>
                    <div class="col-md-10">
                        <input type="text" class="form-control" id="magv" name="magv">
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-2">
                        <label for="patient_name2">hovaten</label>
                    </div>
                    <div class="col-md-10">
                        <input type="text" class="form-control" id="hovaten" name="hovaten">
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-2">
                        <label for="patient_birth">ngaysinh</label>
                    </div>
                    <div class="col-md-10">
                        <input type="text" class="form-control" id="ngaysinh" name="ngaysinh">
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-2">
                        <label for="patient_gender">gioitinh</label>
                    </div>
                    <div class="col-md-10">
                        <input type="number" class="form-control" id="gioitinh" name="gioitinh">
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-2">
                        <label for="patient_sdt">trinhdo</label>
                    </div>
                    <div class="col-md-10">
                        <input type="tel" class="form-control" id="trinhdo" name="trinhdo">
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-2">
                        <label for="patient_email">chuyenmon</label>
                    </div>
                    <div class="col-md-10">
                        <input type="email" class="form-control" id="chuyenmon" name="chuyenmon">
                    </div>
                </div>


                <div class="row">
                    <div class="col-md-2">
                        <label for="patient_height">hocham</label>
                    </div>
                    <div class="col-md-10">
                        <input type="text" class="form-control" id="hocham" name="hocham">
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-2">
                        <label for="patient_weight">hocvi</label>
                    </div>
                    <div class="col-md-10">
                        <input type="number" class="form-control" id="hocvi" name="hocvi">
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-2">
                        <label for="patient_weight">coquan</label>
                    </div>
                    <div class="col-md-10">
                        <input type="number" class="form-control" id="coquan" name="coquan">
                    </div>
                </div>
            

                <div class="row">
                    <div class="col-md-2">
                        <label for=""></label>
                    </div>
                    <div class="col-md-10">
                        <button type="submit" name="submit" class="btn btn-success">Lưu Lại</button>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>



</body>

</html>



<?php
 if(isset($_POST['submit'])){

//magv, hovaten, ngaysinh, gioitinh, trinhdo, chuyenmon, hocham, hocvi, coquan
$pt_magv = $_POST['magv'];
$pt_hovaten = $_POST['hovaten'];
$pt_ngaysinh = $_POST['ngaysinh'];
$pt_gioitinh = $_POST['gioitinh'];
$pt_trinhdo= $_POST['trinhdo'];
$pt_chuyenmon= $_POST['chuyenmon'];
$pt_hocham= $_POST['hocham'];
$pt_hocvi= $_POST['hocvi'];
$pt_coquan= $_POST['coquan'];




$sql = "INSERT INTO patient (magv, hovaten, ngaysinh, gioitinh, trinhdo, chuyenmon, hocham, hocvi, coquan)
        VALUES ('$pt_magv','$pt_hovaten ','$pt_ngaysinh  ','$pt_gioitinh','$pt_trinhdo','$pt_chuyenmon','$pt_hocham','$pt_hocvi','$pt_coquan')";
 
    $_result = mysqli_query($conn,$sql);

    if($_result>0){
        $_SESSION['add'] = "<div class='text-success'>Thêm Thành Công</div>";
        header("Location:hienthi.php");
    }
    else{
        $_SESSION['add'] = "<div class='text-danger'>Thêm Thất Bại</div>";
        header("Location:error.php");
    }
}
?>