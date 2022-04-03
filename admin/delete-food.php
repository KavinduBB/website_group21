<?php

    //Include constants page
    include('../config/constants.php');

    //echo "Delete food page";

    if(isset($_GET['id']) && isset($_GET['image_name']))
    {
        //Prceed to delete
        //echo "Process to delete";

        //1. Get image name and id
        $id = $_GET['id'];
        $image_name = $_GET['image_name'];

        //2. remove the image
        //Check whether the image is available or not and delete only if available
        if($image_name != "")
        {
            //It has image and need to remove from folder
            //Get image path
            $path = "../Images/food/".$image_name;

            //Remove image from folder
            $remove = unlink($path);

            //Check whether the image is removed or not
             if($remove==false)
             {
                 //Failed to remove image
                 $_SESSION['upload'] = "<div class='error'>Failed to Remove Image.</div>";
                 //Redirect to manage food
                 header('location:'.SITEURL.'admin/manage-food.php');
                 //Stop the process of deleting food
                 die();
             }

        }

        //3. Delete food from database
        $sql = "DELETE FROM tbl_food WHERE id=$id";

        //Excecute the query
        $res = mysqli_query($conn, $sql);

        //Check whether the the query excecuted or not and set the session  respectively
        //4. redirect to manage food with  session message

        if($res==true)
        {
            //Food deleted
            $_SESSION['delete'] = "<div class='success'>Food Deleted Successfully.</div>";
            header('location:'.SITEURL.'admin/manage-food.php');

        }
        else
        {
            //Failed to delete food
            $_SESSION['delete'] = "<div class='error'>Failed to delete food.</div>";
            header('location:'.SITEURL.'admin/manage-food.php');

        }

        

    }
    else
    {
        //Redirect to manage food page
        //echo "Redirect"; 
        $_SESSION['unauthorize'] = "<div class='error'>Unauthorized Access.</div>";
        header('location:'.SITEURL.'admin/manage-food.php');
    }

?>