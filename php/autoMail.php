<?php 
require('C:\xampp\htdocs\phpmailer\PHPMailerAutoload.php');
include ("C:\\xampp\htdocs\SCP\includes\config.inc.php");


 $mysqli = @new mysqli(DB_HOSTNAME, DB_USERNAME, DB_PASSWORD, DB_DATABASE);

 if (mysqli_connect_errno()) 
 {
  printf("Unable to connect to database: %s", mysqli_connect_error());
  exit();
 }

 $email = "helloshubham.in@gmail.com";
 

 $mail = new PHPMailer;
 //$mail->SMTPDebug = 3;                               // Enable verbose debug output
 $mail->isSMTP();                                      // Set mailer to use SMTP
 $mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
 $mail->SMTPAuth = true;                               // Enable SMTP authentication
 $mail->Username = 'info.sakurafxalgo@gmail.com';                 // SMTP username
 $mail->Password = 'sakurafxalgo123';                           // SMTP password
 $mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
 $mail->Port = 587;                                    // TCP port to connect to
 
 $mail->setFrom('info.sakurafxalgo@gmail.com', 'Sakura FxAlgo');
 $recipients = array(
   //'jeroen@acm-fx.com' => 'Jeroen',
   //'info@sakura-fxalgo.com' => 'Info',
   'stefan@sakura-fxtrading.com' => 'Stefan',
   'salem@sakura-fxtrading.com' => 'Salem',
   'anand@hpcsphere.com' => 'Anand',
 );

 /* $recipients = array(
   'reachshubham47@gmail.com' => 'Satyam',
   'helloshubham.in@gmail.com' => 'Shubham',
 ); */

 foreach($recipients as $email => $name)
 {
    $mail->AddAddress($email, $name);
 }
 //$mail->addAddress($email, "Shubham");     // Add a recipient
 //$mail->addAddress('satyam@hpcsphere.com', 'Satyam');
 //$email->addAddress('jeroen@acm-fx.com', 'Jeroen');
 //$email->addAddress('info@sakura-fxalgo.com', 'Info');

 $mail->isHTML(true);
 $mail->Subject = 'Sakura FX Trading : Account Status Notification';
 $mail->isHTML(true); // Set email format to HTML
 $body="";
 $body .= '<div style= "border:#6E0C1C; border-style:solid; -webkit-box-shadow: inset 0px 0px 100px;">';
 $body .= '<img src="https://www.sakura-fxtrading.com/images/logo.png" height="100" width="257">';
 $body .= '<h3 style= "text-align: center; font-family: sans-serif; font-size: 1.8em; font-weight: bold; color: #6E0C1C;">Accounts Expiring Soon</h3>';

  
 $sql = "SELECT * FROM `useraccounts_v` WHERE IsExpired = 1";
 $result = $mysqli->query($sql);
 if ($result->num_rows > 0) {
  $body .= '<table style = "border-collapse: collapse; border: 1px solid grey; width:50%; margin-left:25%; margin-right:25%">
    <thead>
     <th style = "border: 1px solid grey; height: 25px; background-image: linear-gradient(#C95468, #6E0C1C); padding: 10px; text-align: center; color: white;">Account No</th>
     <th style = "border: 1px solid grey; height: 25px; background-image: linear-gradient(#C95468, #6E0C1C); padding: 10px; text-align: center; color: white;">Expiry Date</th>
     <th style = "border: 1px solid grey; height: 25px; background-image: linear-gradient(#C95468, #6E0C1C); padding: 10px; text-align: center; color: white;">Expiring In</th>
    </thead><tbody>';
  while($row = $result->fetch_assoc()) {
   if($row['days_remaining'] < 5 && $row['days_remaining'] >0)
   {
       $body .= "<tr><td style = 'border: 1px solid grey; text-align: left; padding: 5px;'  valign='top'>".$row['AccountNo']."</td><td style = 'border: 1px solid grey; text-align: left; padding: 5px;' valign='top'>".$row['Expiry_Date']."</td><td style = 'border: 1px solid grey; text-align: left; padding: 5px;' valign='top'>".$row['days_remaining']." &nbsp;&nbsp;&nbsp; days</td></tr>"; 
   }
  }
  $body .= "</tbody></table><br><hr style='background-color: gray; margin: 1px; display: block; height: 1px;'>";
 }
 else{
  $body .= "<br><h4 style='text-align: center; color:#6b8e23; font-size: 1.8em; font-weight: bold;'>There are no such accounts.</h4><br><hr style='background-color: gray; margin: 1px; display: block; height: 1px;'>";
 }
 $body .= '<br><br><h3 style= "text-align: center; font-family: sans-serif; font-size: 1.8em; font-weight: bold;  color: #6E0C1C;">Accounts not traded for more than 3 days</h3>';
   
 $sql = "SELECT * FROM `maxopendatetime` WHERE DaysSinceLastTrade >= 3";
 $result = $mysqli->query($sql);

 if ($result->num_rows > 0) {
  $body .='<table style = "border-collapse: collapse;  border: 1px solid grey; width:60%; margin-left:20%; margin-right:20%">
    <thead>
     <th style = "border: 1px solid grey; height: 25px; background-image: linear-gradient(#C95468, #6E0C1C); padding: 10px; text-align: center; color: white;">Account No</th>
     <th style = "border: 1px solid grey; height: 25px; background-image: linear-gradient(#C95468, #6E0C1C); padding: 10px; text-align: center; color: white;">Last Traded Date</th>
     <th style = "border: 1px solid grey; height: 25px; background-image: linear-gradient(#C95468, #6E0C1C); padding: 10px; text-align: center; color: white;">Days since Last Trade</th>
    </thead><tbody>'; 

     while($row = $result->fetch_assoc()) {
      $body .= "<tr><td style = 'border: 1px solid grey; text-align: left; padding: 5px;' valign='top'>".$row['AccountNo']."</td><td style = 'border: 1px solid grey; text-align: left; padding: 5px;' valign='top'>".$row['LastKnownTradedTime']."</td><td style = 'border: 1px solid grey; text-align: left; padding: 5px;' valign='top'>".$row['DaysSinceLastTrade']." &nbsp;&nbsp;&nbsp; days</td></tr>"; 
     }
 $body .= "</tbody></table><br><hr style='background-color: gray; margin: 1px; display: block; height: 1px;'>";
 }
 else{
   $body .= "<br><h4 style='text-align: center; color:#6b8e23; font-size: 1.8em; font-weight: bold;'>There are no such accounts.</h4><br><hr style='background-color: gray; margin: 1px; display: block; height: 1px;'>";
 }

 $body .= '<br><br><h3 style= "text-align: center; font-family: sans-serif; font-size: 1.8em; font-weight: bold; color: #6E0C1C;">Accounts not available for more than 3 days</h3>'; 

 $sql = "SELECT * FROM `lastknownaccountdetails` WHERE DaysSinceLastAvailable >= 3";
 $result = $mysqli->query($sql);
 if ($result->num_rows > 0) {
  $body .= '<table style = "border-collapse: collapse;  border: 1px solid grey; width:60%; margin-left:20%; margin-right:20%">
    <thead>
     <th style = "border: 1px solid grey; height: 25px; background-image: linear-gradient(#C95468, #6E0C1C); padding: 10px; text-align: center; color: white;">Account No</th>
     <th style = "border: 1px solid grey; height: 25px; background-image: linear-gradient(#C95468, #6E0C1C); padding: 10px; text-align: center; color: white;">Last Known Available Time</th>
     <th style = "border: 1px solid grey; height: 25px; background-image: linear-gradient(#C95468, #6E0C1C); padding: 10px; text-align: center; color: white;">Days Since Last Available</th>
    </thead><tbody>';
     while($row = $result->fetch_assoc()) {
      $body .= "<tr><td style = 'border: 1px solid grey; text-align: left; padding: 5px;' valign='top'>".$row['AccountNo']."</td><td style = 'border: 1px solid grey; text-align: left; padding: 5px;' valign='top'>".$row['LastKnownAvailableTime']."</td><td style = 'border: 1px solid grey; text-align: left; padding: 5px;' valign='top'>".$row['DaysSinceLastAvailable']." &nbsp;&nbsp;&nbsp; days</td></tr>"; 
     }
 $body .= "</tbody></table><br><hr style='background-color: gray; margin: 1px; display: block; height: 1px;'>";
 }
 else{
  $body .= "<br><h4 style='text-align: center; color:#6b8e23; font-size: 1.8em; font-weight: bold;'>There are no such accounts.</h4><br><hr style='background-color: gray; margin: 1px; display: block; height: 1px;'>";
 }
$body .= '<br><br><h3 style= "text-align: center; font-family: sans-serif; font-size: 1.8em; font-weight: bold; color: #6E0C1C;">Expired Accounts</h3>';

 $sql = "SELECT * FROM `useraccounts_v` WHERE IsExpired = -1";
  $result = $mysqli->query($sql);

  if ($result->num_rows > 0) {
   $body .= '<table style = "border-collapse: collapse;  border: 1px solid grey; width:50%; margin-left:25%; margin-right:25%">
    <thead>
     <th style = "border: 1px solid grey; height: 25px; background-image: linear-gradient(#C95468, #6E0C1C); padding: 10px; text-align: center; color: white;">Account No</th>
     <th style = "border: 1px solid grey; height: 25px; background-image: linear-gradient(#C95468, #6E0C1C); padding: 10px; text-align: center; color: white;">Expiry Date</th>
     <th style = "border: 1px solid grey; height: 25px; background-image: linear-gradient(#C95468, #6E0C1C); padding: 10px; text-align: center; color: white;">Status</th>
    </thead><tbody>';
      while($row = $result->fetch_assoc()) {
       $body .= "<tr><td style = 'border: 1px solid grey; text-align: left; padding: 5px;' valign='top'>".$row['AccountNo']."</td><td style = 'border: 1px solid grey; text-align: left; padding: 5px;' valign='top'>".$row['Expiry_Date']."</td><td style = 'border: 1px solid grey; text-align: left; padding: 5px;' valign='top'>Expired</td></tr>"; 
      }
   $body .= "</tbody></table><br><hr style='background-color: gray; margin: 1px; display: block; height: 1px;'>";
  }
  else{
   $body .= "<br><h4 style='text-align: center; color:#6b8e23; font-size: 1.8em; font-weight: bold;'>There are no such accounts.</h4><br><hr style='background-color: gray; margin: 1px; display: block; height: 1px;'>";
  }
$body .= '</div>';
 $mail->Body = $body;
    if(!$mail->send()) {
  return false;
  echo 'Message could not be sent.';
  echo 'Mailer Error: ' . $mail->ErrorInfo;
 } else {
  return true;
  echo 'Message has been sent';
 } 
 $mysqli->close();
?>