<?php

 session_start();
 require_once('../includes/function.inc.php'); 
 require_once('../includes/validate.inc.php');
 require_once('../includes/config.inc.php');
  
   $mysqli1 = @new mysqli(DB_HOSTNAME, DB_USERNAME, DB_PASSWORD, DB_DATABASE_PROJECTS);
   if (mysqli_connect_errno()) 
   {
    printf("Unable to connect to database: %s", mysqli_connect_error());
    exit();
   }
   
   if(isset($_POST['projectname']))
   {
    $Projectname = $_POST['projectname'];
    $Projectid = $_POST['projectid'];
    $Projectlink = $_POST['projectlink'];
    $Projectsource = $_POST['projectsource'];
    $Sourceaccountid = $_POST['sourceaccountid'];
    $Projectdescription = $_POST['projectdescription'];
    $Clientname = $_POST['clientname'];
    $Clientid = $_POST['clientid'];
    $Clientskypeid = $_POST['clientskypeid'];
    $Clientemailid = $_POST['clientemailid'];
    $Clientmobileno = $_POST['clientmobileno'];
    $Clientwhatsappno = $_POST['clientwhatsappno'];
    $Projectbudget = $_POST['projectbudget'];
    $Projectbudgetcurrency = $_POST['projectbudgetcurrency'];
    $Projectcost = $_POST['projectcost'];
    $Projectcostcurrency = $_POST['projectcostcurrency'];
    $Paymentmethod = $_POST['paymentmethod'];
    $Progressstatus = $_POST['progressstatus'];
    $Assigned1 = $_POST['assigned1'];
    $Assigned2 = $_POST['assigned2'];
    $Assigned3 = $_POST['assigned3'];
    $Assigned4 = $_POST['assigned4'];
    $Assigned5 = $_POST['assigned5'];
    $StartDate = $_POST['startdate'];
    $DueDate = $_POST['duedate'];
    
    $sql="INSERT INTO `projectsdetailtable`( `ProjectName`,
               `ProjectLink`, 
               `Description`, 
               `ClientName`, 
               `ClientId`, 
               `ClientSkypeId`, 
               `ClientEmailId`,
               `ClientMobNo`, 
               `ClientWhatsapp`,
               `ProjectBudget`,
               `ProjectBudgetCurrency`,
               `ProjectCost`, 
               `ProjectCostCurrency`, 
               `PaymentMethod`, 
               `ProjectStatus`,
               `Assignee1`, 
               `Assignee2`, 
               `Assignee3`, 
               `Assignee4`, 
               `Assignee5`,
               `ProjectID`,
               `ProjectSource`,
               `SourceAccountID`,
               `StartDate`,
               `DueDate`)
      VALUES('$Projectname',
       '$Projectlink',
       '$Projectdescription',
       '$Clientname',
       '$Clientid', 
       '$Clientskypeid', 
       '$Clientemailid', 
       '$Clientmobileno',
       '$Clientwhatsappno',
       '$Projectbudget',
       '$Projectbudgetcurrency', 
       '$Projectcost',
       '$Projectcostcurrency',
       '$Paymentmethod',
       '$Progressstatus',
       '$Assigned1', 
       '$Assigned2', 
       '$Assigned3',
       '$Assigned4',
       '$Assigned5',
       '$Projectid',
       '$Projectsource',
       '$Sourceaccountid',
       '$StartDate',
       '$DueDate')";
     
     //$result=$mysqli1->query($sql);
      
     if ($mysqli1->query($sql) === true) 
     {
      
      echo "INSERTED SUCESSFULLY";
     }
     else 
     {
      
      echo "NOT INSERTED";//"inserted 0 :".$data;
     }
  }
  else{
   
   echo "Project Name not inserted Project Name is mandatory";//"post parameter not set : ".$data;
  }

 
  
?>