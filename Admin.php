<?php
 include("connection.php");
?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="Application.css">
</head>
<body>
<div class="sidebar">
  <a class="active" href="Admin.php">Dashboard</a>
  <a href="#Department">Employe Profile</a>
</div>
<ul>
    <li><a class="active" href="#home">  <button id="button" type="submit">Logout</button></a></li>
</ul>
<div class="content"> 
  <?php
    $query=("Select*from user_info");
    $result=mysqli_query($conn,$query);

  ?>

  <h3>Application History</h3> 
  <table>
    <thead>
        <tr>
             <th>ID</th>
            <th>Date</th>
            <th>Name</th>
            <th>Email</th>
            <th>Message</th>
            <th>Edit</th>
        </tr>
        <tr class="info-row">
          <?php
           $count=1;
           while($row=mysqli_fetch_assoc($result)){
            // if ($count>3) {
            //     # code...
            //     break;
            // }
            ?>
             
             <td>
              <?php 
               echo $row['Id'];
              ?>
             </td> 
             <td>
              <?php 
               echo $row['Date'];
              ?>
             </td> 
             <td>
              <?php 
               echo $row['Name'];
              ?>
             </td> 
             <td>
              <?php 
               echo $row['Email'];
              ?>
             </td> 
             <td>
              <?php 
               echo $row['Message'];
              ?>
             </td> 
             <td>
              <a class="Btn" href='Admin.php? Email=<?php echo $row["Email"]; ?>'><button class="Button">Approve</button></a>
              <a class="Btn" href='Admin.php? id=<?php echo $row["Id"]; ?>'><button class="Button">Cancle</button></a>
             </td>
            </tr>
            <?php
            $count++;
           }
          ?>

    </thead>

  </table>
  <!-- Approve section -->
    <?php
    if(isset($_GET['Email'])){
      $Email=$_GET['Email'];

      $sql = "SELECT * FROM  user_info WHERE Email='$Email'";
      $res=mysqli_query($conn,$sql);
      if ($res) {
       echo "Approvel mail sent to the ",$Email;
      } else {
      echo "Error deleting record: " . $conn->error;
      }
      
    //  $conn->close();
    }
  ?>
  <!-- Cancel Section -->
  <?php
    if(isset($_GET['id'])){
      $id=$_GET['id'];
      
      $sql = "DELETE FROM user_info WHERE Id='$id'";
      $res=mysqli_query($conn,$sql);
      if ($res) {
       echo "Disapproved";
      } else {
      echo "Error deleting record: " . $conn->error;
      }
    //  $conn->close();
    }
  ?>
</div>

</body>
</html>
