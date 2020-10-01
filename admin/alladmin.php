<?php
include './sidebar2.php';  ?>

<div class="description">
                        <h2>All Admin</h2>
                        <table  id="table_design">
                           <tr>
                                <th>Id</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Image</th>  
                                <th>Edit</th>
                                <th>Delete</th>     
                            </tr>
                            <?php
                            include('../dbconnection/db.php');
                            $query=mysqli_query($conn,"SELECT * FROM `admin`");
                            while($row=mysqli_fetch_array($query)){
                            ?>
                            <tr>
                                <td>    <?php   echo $row['id'];    ?>    </td>
                                <td>    <?php   echo $row['name'];    ?>    </td>
                                <td>    <?php   echo $row['email'];    ?>    </td>
                                <td> <img src="adminimage/<?php   echo $row['adimage'];    ?> " width="100px" height="100px">   </td>
                                <td>
                                    <button class="btn"> <a href="editadmin.php?edit=<?php echo $row['id']; ?>">Edit</a></button>
                                </td>
                                <td>
                                <button class="btn"> <a href="deleteadmin.php?delete=<?php echo $row['id']; ?>">Delete</a></button>
                                </td>
                            </tr>
                            <?php } ?>
                        </table>
                    </div>
                </div>
        </main>
    </body>
</html>