<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <title>Data Produk</title>
    <style type="text/css">
      .produk{
        margin-top: 50px;
      }
      .produk h1{
        color: red;
      }
  </style>
  </head>

  <body>
  <section class="container produk">
    <center>
    <?php 
     
    $koneksi = mysqli_connect("localhost","root","","arkademy");
     
    // Check connection
    if (mysqli_connect_errno()){
      echo "Koneksi database gagal : " . mysqli_connect_error();
    }

     // jalankan query
    $result = mysqli_query($koneksi, "SELECT product.id, product.name, product_categories.name as name_category FROM product INNER JOIN product_categories on product.category_id = product_categories.id order by product.id asc");    
    ?>
      <h1>Data Produk</h1>      
      <table class="table table-bordered">
        <thead>
          <tr>
            <th scope="col">Id</th>
            <th scope="col">Name</th>
            <th scope="col">Category</th>
          </tr>
        </thead>
        <tbody>
          <?php 
            // tampilkan query
            while ($row=mysqli_fetch_object($result))
            {
              echo "<tr>";
              echo "<td>".$row->id."</td>";
              echo "<td>".$row->name."</td>";
              echo "<td>".$row->name_category."</td>";
              echo "<tr/>";
            }
          ?>
        </tbody>
      </table>
    </center>
  </section>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
</html>
