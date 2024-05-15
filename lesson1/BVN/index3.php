<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BTVN</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <section>
    <h1>ĐĂNG KÝ THÀNH VIÊN</h1>
        <form action="laydulieu.php" method="post">
            <table>
                  <tr>
                       <td>Tên đăng nhập</td>
                       <td>
                           <input type="text" name="userName" id="username"
                           placeholder="Tên đăng nhập">
                       </td>
                  </tr>
                  <tr>
                        <td>Mật khẩu</td>
                        <td>
                        <input type="password" name="matkhau" id="matkhau"
                           placeholder="Tên đăng nhập">
                        </td>
                  </tr>
                  <tr>
                        <td>Họ và tên</td>
                        <td>
                        <input type="text" name="fullName" id="fullname"
                           placeholder="Họ Tên">
                        </td>
                  </tr>
                  <tr>
                        <td>Email</td>
                        <td>
                        <input type="email" name="email" id="email"
                           placeholder="Thư điện tử">
                        </td>
                  </tr>
                  <tr>
                      <td>Giới tính</td>
                      <td>
                           <input type="radio" name="gender" id="male" value="Nam">
                           <label for="male">Nam</label>
                           <input type="radio" name="gender" id="female" value="Nữ">
                           <label for="male">Nữ</label>
                      </td>
                  </tr>
                  <tr>
                       <td>sở thích</td>
                       <td>
                           <input type="checkbox" name="hobby[]" id="dabong" value="Đá bóng">
                               <label for="dabong">Đá bóng</label>
                            
                           <input type="checkbox" name="hobby[]" id="caulong" value="Cầu lông">
                               <label for="caulong">Cầu lông</label>
                            
                           <input type="checkbox" name="hobby[]" id="dulich" value="Du lịch">
                               <label for="dulich">Du lịch</label>
                            
                           <input type="checkbox" name="hobby[]" id="nghenhac" value="Nghe nhạc">
                               <label for="nghenhac">Nghe nhạc</label>
                            
                           <input type="checkbox" name="hobby[]" id="bongban" value="Bóng bàn">
                               <label for="bongban">Bóng bàn</label>
                            
                       </td>
                  </tr>
                  <tr>
                      <td>Tỉnh thành</td>
                      <td>
                          <select name="province" id="province"> 
                               <option value="">--Chọn tỉnh--</option>
                               <option value="hanoi">Hà nội</option>
                               <option value="haiduong">Hải Dương</option>
                               <option value="haiphong">Hải Phòng</option>
                               <option value="hungyen">Hưng Yên</option>
                          </select>
                      </td>
                  </tr>
                  <tr>
                      <td valign="top">Mô tả</td>
                      <td> 
                         <textarea cols="20" row="5" name="description" id="description" placeholder="Mô tả thông tin">

                         </textarea>
                      </td>
                  </tr>
                  <tr>
                      <td></td>
                      <td>
                           <input type="submit" value="Đồng ý" name="submit" id="submit">
                           <input type="reset" value="Làm lại" name="reset" id="reset">
                      </td>
                  </tr>
            </table>
        </form>
    </section>
</body>
</html>
    