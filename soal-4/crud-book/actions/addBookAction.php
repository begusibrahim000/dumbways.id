<?php 
    include "../config/connection.php";

    if(isset($_POST['submitAddBook'])) {
        $name = $_POST['name'];
        $category_id = $_POST['category_id'];
        $writer_id = $_POST['writer_id'];
        $publication_year = $_POST['publication_year'];

        $name_img = $_FILES['img']['name'];
        $file_tmp = $_FILES['img']['tmp_name'];
        		
        move_uploaded_file($file_tmp, '../img/'.$name_img);

        $sql = "INSERT INTO book_tb ('name','category_id','writer_id','publication_year','img') VALUES('$name','$category_id',$writer_id','$publication_year','$name_img')";

        $query = $conn->query($sql);

        if($query){
            header("location:../index.php");
        }else{
            echo "Gagal menambahkan data";
        }
    }