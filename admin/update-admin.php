<?php include('partials/menu.php');?>

<div class="main-content">
    <div class="wrapper">
        <h1>Update Admin</h1>
        <br><br>

        <?php
           
           $id = $_GET['id'];
           $sql = "SELECT *FROM tbl_admin WHERE id=$id";
           $res = mysqli_query($conn,$sql);
           if($res==true){
               $count = mysqli_num_rows($res);
               if($count==1){
                  // echo "Admin Found";
                  $rows = mysqli_fetch_assoc($res);
                  $full_name = $rows['full_name'];
                  $username = $rows['username'];
                  $age = $rows['age'];
                  $dob = $rows['dob'];
                  $contact = $rows['contact'];

                //    /header('location:'.SITEURL.'admin/manage-admin.php');
               }
               else {
                echo "Admin Not Found";
                 header('location:'.SITEURL.'admin/manage-admin.php');
               }
           }
        ?>

        <form action="" method="post">
            <table class="tbl-30">
                <tr>
                    <td>Full Name :</td>
                    <td>
                        <input type="text" name="full_name" id="" placeholder="<?php echo $full_name  ?>">
                    </td>
                </tr>
                <tr>
                   <td>Username :</td>
                    <td>
                        <input type="text" name="username" id="" placeholder="<?php echo $username  ?>">
                    </td>
                </tr>
                <tr>
                   <td>DOB :</td>
                    <td>
                        <input type="date" name="dob" id="" placeholder="<?php echo $dob  ?>">
                    </td>
                </tr>
                <tr>
                   <td>Age :</td>
                    <td>
                        <input type="text" name="age" id="" placeholder="<?php echo $age  ?>">
                    </td>
                </tr>
                <tr>
                   <td>Contact No :</td>
                    <td>
                        <input type="text" name="contact" id="" placeholder="<?php echo $contact  ?>">
                    </td>
                </tr>
                <tr>
                    <td colspan="2">
                    <input type="submit" name="submit" value="Update Admin" class="btn-secondary">
                    </td> 
                </tr>
            </table>
        </form>
    </div>

</div>

<?php
if(isset($_POST['submit'])){
    $full_name = $_POST['full_name'];
    $username = $_POST['username'];
    $dob = $_POST['dob'];
    $age = $_POST['age'];
    $contact = $_POST['contact'];
    //$id = $_POST['id'];

    $sql = "UPDATE tbl_admin SET full_name = '$full_name',username = '$username',dob= '$dob',age = '$age',contact = '$contact' WHERE id='$id'";
    $res = mysqli_query($conn,$sql);
    if($res == true){
        $_SESSION['update']="<div class='success'>Profile Updated Successfully</div>";
       header('location:'.'http://localhost/Guvi-Assignment/'.'admin/manage-admin.php');
    }
    else {
        $_SESSION['update']="<div class='error'>Error in  Updating Profile</div>";
       header('location:'.SITEURL.'admin/manage-admin.php');
    }
}

?>

<?php include('partials/footer.php');?>