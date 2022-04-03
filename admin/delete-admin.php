<?php

    //Include constants.php file here

    include('../config/constants.php');

    //1.get the ID of Admin to be deleted

    $id = $_GET['id'];

    //2.Create sql query to delete Admin

    $sql = "DELETE FROM tbl_admin WHERE id=$id";

    //Excecute the query

    $res = mysqli_query($conn, $sql);

    //check whether the query excecuted successfully or not

    if($res==TRUE)
    {
            //Query excecuted successfully and admin deleted
            // echo "Admin Deleted";
            //Create session variable to display message
            $_SESSION['delete'] = "<div class='success'>Admin Deleted Successfully.</div>";
            //Redirect to manage admin page
            header('location:'.SITEURL.'admin/manage-admin.php');

    }
    else{

        //Failed to delete admin
        //echo "Failes to delete admin";
        $_SESSION['delete'] = "<div class='error'>Failed to delete admin. Try again later.</div>";
        header('location:'.SITEURL. 'admin/manage-admin.php');
    }

    //3.Redirect to manage admin page with message (success/error)







?>