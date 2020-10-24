<?php include('config/connection.php'); ?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">

    <title>Hello, world!</title>
  </head>
  <body>
    
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-3">
                <h1>CRUD BOOK</h1>
                <p>Maaf belum di bereskan karena bebera faktor</p>
            </div>
            <div class="col-md-3">
                
                <!-- Button trigger modal -->
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#addBookModal">
                Add Book
                </button>

                <!-- Modal -->
                <div class="modal fade" id="addBookModal" tabindex="-1" aria-labelledby="addBookModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="addBookModalLabel">Modal title</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form action="actions/addBookAction.php" method="POST" enctype="multipart/form-data">
                            <div class="form-group">
                                <label for="name">Name</label>
                                <input type="text" name="name" class="form-control" id="name">
                            </div>
                            <div class="form-group">
                                <label for="categeory_id">Category ID</label>
                                <input type="text" name="category_id" class="form-control" id="categeory_id">
                            </div>
                            <div class="form-group">
                                <label for="writer_id">Writer ID</label>
                                <input type="text" name="writer_id" class="form-control" id="writer_id">
                            </div>
                            <div class="form-group">
                                <label for="publication_year">Publicaton Year</label>
                                <input type="date" name="publication_year" class="form-control" id="publication_year">
                            </div>
                            <div class="form-group">
                                <label for="img">Img</label>
                                <input type="file" name="img" class="form-control" id="img">
                            </div>
                            <button type="submit" name="submitAddBook" class="btn btn-primary btn-block">Add Book</button>
                        </form>
                    </div>
                    </div>
                </div>
                </div>

            </div>
        </div>
        <div class="row">
            <div class="col-md-12">

                <?php
                    $query = mysqli_query($conn, "SELECT name FROM book_tb");
                    while($row = mysqli_fetch_array($query)) :
                ?>
                    <div class="card" style="width: 18rem;">
                        <img src="img/<?= $row['img']; ?>" class="card-img-top" alt="<?= $row['name'] ?>">
                        <div class="card-body">
                            <h5 class="card-title"><?= $row['name'] ?></h5>
                            <a href="" class="btn btn-info">View Detail</a>
                        </div>
                    </div>
                <?php endwhile; ?>  
            </div>
        </div>
    </div>

    <!-- Optional JavaScript; choose one of the two! -->
    <script src="assets/js/jquery-3.5.1.slim.min.js"></script>
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
  </body>
</html>