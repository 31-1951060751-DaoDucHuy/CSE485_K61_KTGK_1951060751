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

    <div class="container">
        <h1 class="title">Hiển Thị Danh Sách</h1>
    </div>
    <div class="main">
        <div class="container">

            
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">magv</th>
                        <th scope="col">hovaten</th>
                        <th scope="col">ngaysinh</th>
                        <th scope="col">gioitinh</th>
                        <th scope="col">trinhdo</th>
                        <th scope="col">chuyenmon</th>
                        <th scope="col">hocham</th>
                        <th scope="col">hocvi</th>
                        <th scope="col">coquan</th>



                    </tr>
                </thead>
                <tbody>
                    
                    <?php
                $conn = mysqli_connect('localhost','root','','ql_daihoc');
                if(!$conn){
                    die("Kết nối thất bại. Vui lòng kiểm tra lại các thông tin máy chủ");
                }
                    $sql = "SELECT * FROM giangvien";
                   
                    $result = mysqli_query($conn,$sql); 
                    // Bước 03: Phân tích và xử lý kết quả
                    if(mysqli_num_rows($result)>0){
                        while($row=mysqli_fetch_assoc($result)){
                            
                ?>

                    <tr>
                        <th scope="row"><?php echo $row['magv']; ?> </th>
                        <td><?php echo $row['hovaten']; ?></td>
                        <td><?php echo $row['gioitinh']; ?></td>
                        <td><?php echo $row['ngaysinh']; ?></td>
                        <td><?php echo $row['trinhdo']; ?></td>
                        <td><?php echo $row['chuyenmon']; ?></td>
                        <td><?php echo $row['hocham']; ?></td>
                        <td><?php echo $row['hocvi']; ?></td>
                        <td><?php echo $row['coquan']; ?></td>

                        <td><a href="details.php"><button class="btn btn-success ">Chi Tiết</button></a></td>

                    </tr>
                    <?php
                        }
                    }
                ?>

                </tbody>
            </table>

        </div>
    </div>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>



</body>

</html>
