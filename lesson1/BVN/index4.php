<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title> 
</head>
<body>
    <h1>Tìm kiếm sản phẩm</h1>
    <form action="ketquatimkiem.php" method="get">
         <table width="300">
              <tr>
                 <td>Tên sản phẩm</td>
                 <td>
                     <input type="text" name="product" id="product">
                 </td>
              </tr>
              <tr>
                  <td>Loại sản phẩm</td>
                  <td>
                      <select name="category" id="category">
                            <option value="Dell">Dell</option>
                            <option value="HP">HP</option>
                            <option value="Lenovo">Lenovo</option>
                            <option value="Acer">Acer</option>
                            <option value="Asus">Asus</option>
                            <option value="Sony">Sony</option>
                            <option value="Macbook">Macbook</option>
                      </select>
                  </td>
              </tr>
              <tr>
                  <td>Giá sản phẩm</td>
                  <td>
                      <input type="text" name="price" id="price">
                  </td>
              </tr>
              <tr>
                  <td></td>
                  <td>
                      <input type="submit" value="Tìm kiếm" name="search" id=search"">
                  </td>
              </tr>
         </table>
    </form>
</body>
</html>