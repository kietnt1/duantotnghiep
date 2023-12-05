<style>
    .gioitinh{
    min-width: 200px;
    height: 45px;
    border: 1px solid #ccc;
    border-radius: 5px;
    background: #262e49;
    color: #d6d6d6;
    border: 0;
  border-radius: 5px;
  padding: 14px 10px;
  width: 320px;
  outline: none;
    
    }
    
</style>
<?php
    if(!isset($_SESSION))
    {
        session_start();
    }
    include './connect_db.php';
    $error = [];
    if(isset($_POST['fullname']))
    {
        $fullname = $_POST['fullname'];
        $email = $_POST['email'];
        $username = $_POST['username'];
        $password = $_POST['password'];
        $rpassword = $_POST['rpassword'];
        $sdt = $_POST['sdt'];
        $gioitinh = $_POST['gioitinh'];

        if(empty($fullname))
        {
            $error['fullname'] ='Bạn chưa nhập tên';
        }
        if(empty($email))
        {
            $error['email'] ='Bạn chưa nhập email';
        }
        if(empty($username))
        {
            $error['username'] ='Bạn chưa nhập tên đăng nhập';
        }
        if(empty($password))
        {
            $error['password'] ='Bạn chưa nhập mật khẩu';
        }
        if($password != $rpassword)
        {
            $error['rpassword'] ='Mật khẩu nhập lại không đúng';
        }
        if(empty($sdt))
        {
            $error['sdt'] ='Bạn chưa nhập sdt';
        }
        if(empty($gioitinh))
        {
            $error['gioitinh'] ='Bạn chưa nhập Giới tính';
        }
        if(empty($error))
        {
        $sql = mysqli_query($con,"INSERT INTO `user`(`fullname`, `email`, `username`, `password`, `sdt`, `gioitinh`, `created_time`, `last_updated`) VALUES ('$fullname','$email', '$username', MD5('$password'),'$sdt', '$gioitinh', " . time() . ", '" . time() . "')");
       
        if($sql)
        {
            ?>
                         <div id="edit-notify" class="box-content">
                                <h1><?=   "Đăng ký tài khoản thành công" ?></h1>
                                <a href="./login.php">Mời bạn đăng nhập</a>
                            </div>
            <?php
        }
        }
    }
?>
<!DOCTYPE html>
<html>
  
    <style>
        .has-error {
            color: violet;
        }
        .body, html{
        font-family: 'Source Sans Pro', sans-serif;
        background-color: #1d243d;
        padding: 0;
        margin: 0
    }
    .container{
  margin: 0;
  top: 30px;
  left: 50%;
  position: absolute;
  text-align: center;
  transform: translateX(-50%);
  background-color: rgb( 33, 41, 66 );
  border-radius: 9px;
  width: 400px;
  height: 1000px;
  box-shadow: 1px 1px 108.8px 19.2px rgb(25,31,53);
  
  border-top: 10px solid #79a6fe;
  border-bottom: 10px solid #8BD17C;
}
h5{
    color:white;
    font-family: 'Source Sans Pro', sans-serif;
    
}
.main{
    font-family: 'Source Sans Pro', sans-serif;
  font-size: 15px;
  color: #a1a4ad;
  letter-spacing: 1.5px;
  margin-top: -10px;
  margin-bottom: 50px;
 


}
input[type = "text" ], input[type = "password"] , input[type="email"],input[type="phone"]{
  display: block;
  margin: 2px auto;
  background: #262e49;
  border: 0;
  border-radius: 5px;
  padding: 15px 10px;
  width: 320px;
  outline: none;
  color: #d6d6d6;
      -webkit-transition: all .2s ease-out;
    -moz-transition: all .2s ease-out;
    -ms-transition: all .2s ease-out;
    -o-transition: all .2s ease-out;
    transition: all .2s ease-out;

}
.btn1 {
  border:0;
  background: #7f5feb;
  color: #dfdeee;
  border-radius: 100px;
  width: 340px;
  height: 49px;
  font-size: 16px;
  position: absolute;
  margin-top: 20px;
  left: 8%;
  transition: 0.3s;
  cursor: pointer;
}

.btn1:hover {
  background: #5d33e6;
}

        
    </style>
<head>
<title>Đăng kí</title>
<!-- for-mobile-apps -->
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" /> 
<meta name="keywords" content="User Register Form Widget Responsive, Login form web template, Sign up Web Templates, Flat Web Templates, Login signup Responsive web template, Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<!-- //for-mobile-apps -->
<link href='//fonts.googleapis.com/css?family=Lato:400,100,100italic,300italic,300,400italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Amaranth:400,400italic,700,700italic' rel='stylesheet' type='text/css'>
<link rel="icon" type="logo/png" sizes="32x32" href="logo/logo.png">

</head>
<body>


    <div class="container">
		
		<div class="main">
			<h1>Đăng kí</h1>
			<form action="./register.php?action=reg" method="Post" autocomplete="off">
                <h3 >Họ và tên</h3>
                <input class="" type="text" name="fullname" value="" /><br/>
                <div class="has-error">
                    <span>
                        <?php echo (isset($error['fullname'])) ? $error['fullname']:''?>
                    </span>
                </div>
				<h3>Email</h3>
				<input  type="email" name="email" value="" /><br/>
                <div class="has-error">
                <span>
                        <?php echo (isset($error['email'])) ? $error['email']:''?>
                    </span>
                </div>
				<h3>Username</h3>
				<input type="text" name="username" value=""><br/>
                <div class="has-error">
                <span>
                        <?php echo (isset($error['username'])) ? $error['username']:''?>
                    </span>
                </div>
                <h3>Password</h3>
				<input type="password" name="password" value="" /></br>
                <div class="has-error">
                <span>
                        <?php echo (isset($error['password'])) ? $error['password']:''?>
                    </span>
                </div>
                <h3>Re-Password</h3>
				<input type="password" name="rpassword" value="" /></br>
                <div class="has-error">
                <span>
                        <?php echo (isset($error['rpassword'])) ? $error['rpassword']:''?>
                    </span>
                </div>
                <h3>Số Điện Thoại</h3>
                <input type="phone" name="sdt" value="" /><br/>
                <div class="has-error">
                <span>
                        <?php echo (isset($error['sdt'])) ? $error['sdt']:''?>
                    </span>
                </div>
				<h3>Giới tính</h3>
                <div class="has-error">
                <select name="gioitinh" class="gioitinh" >
                    <span>
                        <?php echo (isset($error['gioitinh'])) ? $error['gioitinh']:''?>
                        <option  value="Nam">Nam</option>
                        <option  value="Nữ">Nữ</option>
                    </span>
                    </select>
                </div>
				<input type="submit" value="Đăng ký" class="btn1">
			</form>
		</div>
	</div>

</body>
</html>