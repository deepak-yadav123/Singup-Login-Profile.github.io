<?php include('partials/menu.php');   ?>
<?php $insert= false; ?>
<head>
   <link rel="stylesheet" href="../css/admin.css?v=<?php echo time(); ?>">
</head>

   <div class="main-content">
       <div class="wrapper">
           <h1>Add Admin</h1>
           <br>
            <?php
              if(isset($_SESSION['add'])){
                echo $_SESSION['add'];
                unset($_SESSION['add']);
              }
              if($insert==true){
                echo "<p class='submitMsg'>Thanks Admin Added !</p>";
               }
              
            ?>
           <form action="" method="POST">
               <table class="tbl-30"> 
                   <tr>
                     <td>Full Name :</td>
                     <td><input type="text" name="full_name" id="full_name" placeholder="Enter Your Name"> </td>    
                   </tr>

                   <tr>
                     <td>Username :</td>
                     <td><input type="text" name="username" id="username" placeholder="Your Username"> </td>    
                   </tr>

                   <tr>
                     <td>Password :</td>
                     <td><input type="password" name="password" id="password" placeholder="Your Password"> </td>   
                   </tr>

                   <tr>
                     <td>DOB :</td>
                     <td><input type="date" name="dob" id="dob" placeholder="   Select DOB  "> </td>   
                   </tr>

                   <tr>
                     <td>Age :</td>
                     <td><input type="text" name="age" id="age" placeholder="Your Age"> </td>   
                   </tr>

                   <tr>
                     <td>Contact No :</td>
                     <td><input type="text" name="contact" id="contact" placeholder="Enter Your Mobile No"> </td>   
                   </tr>

                    <br>
                   <tr>
                       <td colspan="2">
                         <input type="submit" name ="submit" value="submit" class="btn-secondary">
                       </td>
                   </tr>
               </table>
               
           </form>
       </div>
   </div>

<?php include('partials/footer.php') ;?>

<?php
    // PHP Code for Inserting data in database tbl_admin
    $insert = false;
    if(isset($_POST['submit'])){                       // if submit button is clicked it becomes true and then below code is executed
      // echo "clicked";
    
    
    // 1. Take data from the form 
    $full_name = $_POST['full_name'];                   // $_POST -> takes data from database ans then it is stored in $full_name,etc
    $username = $_POST['username'];
    $password = md5($_POST['password']);
    $dob = $_POST['dob'];
    $age = $_POST['age'];
    $contact = $_POST['contact'];

    //2. Sql Query to save the data in database
    $sql = "INSERT INTO `tbl_admin` ( `full_name`, `username`, `password`,`dob`,`age`,`contact`) VALUES ( '$full_name', '$username', '$password','$dob','$age','$contact');";
    //3.  excuting query and saving to or Inserting to database
    $res = mysqli_query($conn,$sql) or die(mysqli_error());
    if($res==true  ){                                       // it becomes true when inserrted is successfully
      $insert=true;                                        // it was written for showing msg 
      $_SESSION['add'] = "<div class='success''>Profile Added Succesfully</div>";        //$_SESSION -> is nothing but variable which stores key value pair like map 
      header("location:".'http://localhost/Guvi-Assignment/'.'admin/manage-admin.php');  //' . ' --> it redirects us to this location
      echo "<p class='submitMsg'>Thanks Admin Added !</p>";
   
    }
    else {
      $_SESSION['add'] = "<div class='error''>Error in adding Profile </div>";        //$_SESSION -> is nothing but variable which stores key value pair like map 
      header("location:".'http://localhost/Guvi-Assignment/'.'admin/manage-admin.php');
    }
  }
