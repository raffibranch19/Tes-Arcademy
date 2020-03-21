<?php

?>

<html>
    <head>
        <title>Arcademy Test</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    </head>

    <body>

    <nav class="navbar navbar-dark bg-primary">
     <a class="navbar-brand" href="#">
        <img src="github.png" width="30" height="30" class="d-inline-block align-top" alt="">
        Arcademy Test
     </a>
    </nav>
    
    <div class="container">

    <div class="alert alert-primary" role="alert" style="margin-top:10px;">
        A simple primary alert—check it out!
    </div>

    <?php
        include 'config.php';
        $no=1;
        $data = mysqli_query($koneksi, 
        "SELECT c.nama_cashier, a.name_product, b.name_category, a.price from product a inner join category b on a.id_category = b.id_category inner join cashier c on a.id_cashier = c.id_cashier");
        while($d = mysqli_fetch_array($data)){
    ?>

        <table class="table table-dark" style="margin-top:10px;">
            <thead>
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Cashier</th>
                    <th scope="col">Product</th>
                    <th scope="col">Category</th>
                    <th scope="col">Price</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="row"><?php echo $no++; ?></th>
                    <td><?php echo $d['nama_cashier']; ?></td>
                    <td><?php echo $d['name_product']; ?></td>
                    <td><?php echo $d['name_category']; ?></td>
                    <td><?php echo $d['price']; ?></td>
                    <td>
					    <a href="edit.php?id=<?php echo $d['id']; ?>">EDIT</a>
					    <a href="hapus.php?id=<?php echo $d['id']; ?>">HAPUS</a>
				    </td>
                </tr>
        <?php } ?>
            </tbody>
        </table>
    </div>
  
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    </body>
</html>