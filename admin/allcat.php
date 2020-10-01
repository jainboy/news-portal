<?php
include './sidebar2.php';  ?>

<div class="description">
                        <h2>All Categories</h2>
                        <table  id="table_design">
                           <tr>
                                <th>Id</th>
                                <th>Name</th>
                                <th>Description</th>
                                <th>Edit</th>
                                <th>Delete</th>
                            </tr>
                            <?php
                            include('../dbconnection/db.php');
                            $query=mysqli_query($conn,"SELECT * FROM `category`");
                            while($row=mysqli_fetch_array($query)){
                            ?>
                            <tr>
                                <td>    <?php   echo $row['id'];    ?>    </td>
                                <td>    <?php   echo $row['cname'];    ?>    </td>
                                <td>    <?php   echo $row['cdescription'];    ?>    </td>
                                <td>
                                    <button class="btn"> <a href="editcat.php?edit=<?php echo $row['id']; ?>">Edit</a></button>
                                </td>
                                <td>
                                <button class="btn"> <a href="deletecat.php?delete=<?php echo $row['id']; ?>">Delete</a></button>
                                </td>
                            </tr>
                            <?php } ?>
                        </table>
                    </div>
                </div>
        </main>
    </body>
</html>