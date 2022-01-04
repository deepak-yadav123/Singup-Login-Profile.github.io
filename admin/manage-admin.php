<?php include('partials/menu.php') ;     ?>

   <div class="main-content">
    <div class="wrapper">
          <h1>Manage Profile</h1><br><br>
         
          <?php
          
              if(isset($_SESSION['add'])){
                echo $_SESSION['add'];
                unset($_SESSION['add']);
              }
              if(isset($_SESSION['delete'])){
               echo $_SESSION['delete'];
               unset($_SESSION['delete']);
             }
             if(isset($_SESSION['update'])){
               echo $_SESSION['update'];
               unset($_SESSION['update']);
             }
             
             if(isset($_SESSION['user-not-found'])){
               echo $_SESSION['user-not-found'];
               unset($_SESSION['user-not-found']);
             }
             if(isset($_SESSION['pwd-not-match'])){
              echo $_SESSION['pwd-not-match'];
              unset($_SESSION['pwd-not-match']);
            }
            if(isset($_SESSION['change-pwd'])){
              echo $_SESSION['change-pwd'];
              unset($_SESSION['change-pwd']);
            }
              
            
            ?>
            <br><br><br>

          <a href="add-admin.php" class="btn-primary">Add Profile</a> <br><br><br>
          
          <table class="tbl-full">
             <tr>
                <th>S.N</th>
                <th>Full Name</th>
                <th>Username</th>
                <th>DOB</th>
                <th>Age</th>
                <th>Contact No.</th>
                
                <th>Actions</th>
             </tr>

             <?php
             // Displaying in website --> data of Admin from databse tbl_admin which was written  in add-admin php
                 $sql = "SELECT * FROM tbl_admin";   // selecting data from tbl_admin
                 $res = mysqli_query($conn,$sql);    // passing query into connection whether it is right or not 
                 if($res == true){
                    $count = mysqli_num_rows($res);   // counting no of rows in data base
                    if($count>0){  $a=1;
                       while($rows = mysqli_fetch_assoc($res)){   //  fetching rows from database means take all th inputs in the rows variable 
                          $id = $rows['id'];                          // variables for storing data from database
                          $full_name = $rows['full_name'];
                          $username= $rows['username'];
                          $dob= $rows['dob'];
                          $age= $rows['age'];
                          $contact= $rows['contact'];
                          
                        //   $a++  
                        // closing php for writing code for html which has to be shown in website manage-admin.php
                          ?>  
                             <tr>
                                 <td><?php echo $a++; ?></td>
                                 <td><?php echo $full_name; ?></td>
                                 <td><?php echo $username; ?></td>
                                 <td><?php echo $dob; ?></td>
                                 <td><?php echo $age; ?></td>
                                 <td><?php echo $contact; ?></td>
                                 <td>
                                    <a href="<?php  echo SITEURL; ?>admin/update-password.php?id=<?php echo $id; ?>" class="btn-primary" >Change Password</a>
                                    <a href="<?php  echo SITEURL; ?>admin/update-admin.php?id=<?php echo $id; ?>" class="btn-secondary" >Update Profile</a>
                                    <a href="<?php echo SITEURL; ?>admin/delete-admin.php?id=<?php echo $id; ?>" class="btn-danger">Delete Profile</a>
                                 </td>
                              </tr>

                          <?php  // openning php for executing remaing code in php


                       }
                    }
                 }


            ?>

             

             


          </table>
      </div>
   </div>

<?php include('partials/footer.php');     ?>