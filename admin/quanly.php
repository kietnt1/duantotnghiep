
<?php

$host = "localhost";
$user = "root";
$password = "";
$database = "doan";
$con = mysqli_connect($host, $user, $password, $database);

$con -> set_charset('utf8');
if (mysqli_connect_errno()) {
    echo "Connection Fail: " . mysqli_connect_errno();
    exit;
}
?>





<div class="row clearfix">
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                     <div class="info-box bg-pink hover-expand-effect">
                        <div class="icon">
                            <a href="dathang.php">  <i class="material-icons">playlist_add_check</i></a>
                        </div>
                        <div class="content">
                           <div class="text">Quản lý đơn hàng</div>
                           <?php
// Truy vấn để đếm số lượng dữ liệu trong bảng
$sql = "SELECT COUNT(id) AS total_records FROM orders";
$result = $con->query($sql);

   // Lấy giá trị số lượng từ kết quả truy vấn
    $row = $result->fetch_assoc();
    $totalRecords = $row["total_records"];

    echo  $totalRecords;

?>

                            
                        </div>
                    </div>
                </div>
                
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="info-box-2 bg-red">
                        <div class="icon">
                           <a href="khachhang.php"> <i class="material-icons">shopping_cart</i></a>
                        </div>
                        <div class="content">
                            <div class="text">Quản lý khách hàng</div>
                            <?php
// Truy vấn để đếm số lượng dữ liệu trong bảng
$sql = "SELECT COUNT(id) AS total_records FROM user";
$result = $con->query($sql);

   // Lấy giá trị số lượng từ kết quả truy vấn
    $row = $result->fetch_assoc();
    $totalRecords = $row["total_records"];

    echo  $totalRecords;

?>
                           
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="info-box bg-light-green hover-expand-effect">
                        <div class="icon">
                            <a href="sanpham.php">  <i class="material-icons">forum</i></a>
                        </div>
                        <div class="content">
                            <div class="text">Quản lý sản phẩm</div>
                            <?php
// Truy vấn để đếm số lượng dữ liệu trong bảng
$sql = "SELECT COUNT(id) AS total_records FROM product";
$result = $con->query($sql);

   // Lấy giá trị số lượng từ kết quả truy vấn
    $row = $result->fetch_assoc();
    $totalRecords = $row["total_records"];

    echo  $totalRecords;

?>
                           
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="info-box bg-orange hover-expand-effect">
                        <div class="icon">
                         <a href="nhanvien.php"><i class="material-icons">person_add</i></a>
                        </div>
                        <div class="content">
                            <div class="text">Tổng doanh thu</div>
                            <div class="number count-to" data-from="0" data-to="500" data-speed="1000" data-fresh-interval="20"></div>
                        </div>
                    </div>
                </div>
            </div>