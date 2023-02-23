<?php
include("connection.php");
?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="user.css">
</head>
<body>
<div class="sidebar">
  <a class="active" href="#home">Dashboard</a>
  <a href="#contact">Profile</a>
  <a href="Application.php">Application</a>
</div>
<ul>
    <li><a class="active" href="#home">  <button id="button" type="submit">Logout</button></a></li>
</ul>
<div class="content">   
  <form class="form-content" action="user.php" method="post">
    <input type="date" name="date" id="Date" required><br>
    <input type="text" id="Name" name="name" placeholder="Name" required> <br>
    <input type="email" name="email" id="" placeholder="Your Email" required> <br>
    <textarea name="message" id="reason" cols="30" rows="10" placeholder="Message" required></textarea><br>
    <button id="Apply" name="submit" type="submit">Apply</button>
  </form>
  <?php
    use PHPMailer\PHPMailer\PHPMailer;
    // use PHPMailer\PHPMailer\Exception;
    require_once"PHPMailer/PHPMailer.php";
    require_once"PHPMailer/SMTP.php";
    require_once"PHPMailer/Exception.php";
    $mail = new PHPMailer(true);
    if(isset($_POST['submit'])){
        $date = $_POST["date"];
        $name = $_POST["name"];
        $email = $_POST["email"];
        $message = $_POST["message"];
        $dayname = $date;
        // echo "Dayname:";
        $day = date('l', strtotime($dayname));
        // $strday=$day;
        $now = date('Y-m-d');
     
        if($day == "Saturday" || $day == "Monday"||$day=='Sunday'){
            echo "Please Choose Another Day";
        }
        elseif($date <$now){
            echo "Please Choose Present date or Date after today";
        }
        else{
            //  echo $day;
            //  // echo "Hi";
            //  echo " ,",$message;
            //  echo "",$date;
            //  echo " ",$name;
            //  echo $email;
            //  echo " ,", $now;
            $sql = ("INSERT INTO user_info (Date,Name, Email,Message) VALUES ('$date','$name', '$email','$message')");
            // $del="DELETE FROM user_info WHERE timestamp < now() - interval 1 day";
            $data = mysqli_query($conn,$sql);
            
            if ($data) {
                # code...
             
                // SMTP
                $mail->isSMTP();
                $mail->Host="smtp.gmail.com";
                $mail->SMTPAuth= true;
                $mail->Username="niteshchauhan@gmail.com";
                $mail->Password="acdnyabcniigtwuz";
                $mail->Port=587;
                $mail->SMTPSecure="tls";
                $mail->SMTPOptions = array(
                  'ssl' => array(
                      'verify_peer' => false,
                      'verify_peer_name' => false,
                      'allow_self_signed' => true
                  )
              );
                // Email
                $mail->isHTML(true);
                $mail->setFrom("niteshchauhan@gmail.com","Nitesh");
                $mail->addAddress($email);
                $mail->Subject=("Leave application");
                $mail->Body=($message);
                if ($mail->send()) {
                  # code...
                  $status='Sucess';

                }
                else{
                  $status='Failed';
                  $responce="Something is wrong:<br>".$mail->ErrorInfo;
                }
                echo "applied";
                exit(json_encode(array("status"=>$status,"responce"=>$responce)));
               
            }
        }
    }
 ?>
</div>

</body>
</html>
