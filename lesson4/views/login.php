<?php
    if(isset($_POST["btnLogin"])){
        //lấy giá trị trên form
        $username = $_POST["username"];
        $password = $_POST["password"];
        if($_POST["remember"]){
            //lưu cookie
            setcookie("username",$username);
            setcookie("password",$password);
        }
        //lưu session nếu đăng nhập đúng
        $arrLogin = array("user"=>"admin@gmail.com","password"=>"123123");
        if($arrLogin["user"]==$userName && $arrLogin["password"]==$password){
            //lưu session
            $_SESSION["userInfo"]=$arrLogin;
            header("Location:index.php");
        }else{
            echo "<script> alert('sai thông tin đăng nhập');</script>";
        }
    }
    //Khi load form login, kiểm tra dữ liệu trong cookie
    //nếu có thì hiển thị vào điều khiển
    $user_name= "";
    $password= "";
    $checked = false;
    if(isset($_COOKIE["userName"]) && isset($_COOKIE["password"])){
           //lưu giá trị từ cookie vào biến
        $user_name=$_COOKIE["userName"];
        $password=$_COOKIE["password"];
        $checked=true;
    }
?>
<div class="container">
        <div class="row">
            <div class="col-md-4 col-xs-12">
                                    <form action="" method="post">
                        <div class="mb-3">
                            <label for="userName" class="form-label">Email address</label>
                            <input type="email" class="form-control" id="userName" name="userName"  aria-describedby="emailHelp"
                            value="<?php echo $userName ?>">
                            <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                        </div>
                        <div class="mb-3">
                            <label for="password" class="form-label">Password</label>
                            <input type="password" class="form-control" id="password" name="password"  value="<?php echo $password ?>">
                        </div>
                        <div class="mb-3 form-check">
                            <input type="checkbox" class="form-check-input" id="remember" name="remember" <?php echo ($checked)?'checked':'' ; ?>>
                            <label class="form-check-label" for="remember">Remember Me</label>
                        </div>
                        <button type="submit" class="btnLogin" class="btn btn-primary">Login</button>
                        </form>
            </div>
        </div>
</div>