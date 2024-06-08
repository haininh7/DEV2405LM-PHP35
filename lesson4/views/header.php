<header>
<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container">
    <a class="navbar-brand" href="/">DEV2405LM-PHP35</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0 w-100">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="/index.php">Trang chủ</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/index.php?view=gioi-thieu">Giới thiệu</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="/index.php?view=san-pham" role="button" data-bs-toggle="dropdown" aria-expanded="false">
           Sản phẩm
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="/index.php?view=san-pham&loai=1">Máy tính xách tay</a></li>
            <li><a class="dropdown-item" href="/index.php?view=san-pham&loai=2">Máy tính bảng</a></li>
            <li><a class="dropdown-item" href="/index.php?view=san-pham&loai=3">Điện thoại di động</a></li>
            <li><a class="dropdown-item" href="/index.php?view=san-pham&loai=4">Phụ kiện</a></li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/index.php?view=dich-vu" >Dịch vụ</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/index.php?view=lien-he" >Liên hệ</a>
        </li>
        <li class="nav-item">
            <?php
                   if(isset($_SESSION["userInfo"])){
            ?>
            <a class="nav-link" href="/index.php?view=logout" >
                  <strong>Xin chào, <?php echo $_SESSION["userInfo"]["user"]; ?></strong>
                  Logout</a>
                  <?php
                   }else{
                  ?>
                  <a class="nav-link" href="/index.php?view=login" >Login</a>
                  <?php
                   }
            ?>
          
        </li>
      </ul>
     
    </div>
  </div>
</nav>
</header>