<?php
    include('../dbconnection/db.php');
    $id=$_GET['delete'];
    $query=mysqli_query($conn,"DELETE FROM `admin` WHERE `id`='$id'");
    if($query==true)
    {
        ?>
        <script>
            alert('category delete successfully');
            
        </script>
        <?php
        header('location:./alladmin.php');
    }
    else
    {
        ?>
        <script>
            alert('error');
        </script>
        <?php
    }
?>