<?php  include "admin_p.php";?>


<?php 

							
								/*$mon=mysql_escape_string($_SESSION['amount']);	
								$er= mysql_escape_string($_SESSION['er']) ;
								 $lc =mysql_escape_string($_SESSION['lc']) ;
								 $ap= mysql_escape_string($_SESSION['ap']);
								  $tf= mysql_escape_string($_SESSION['tf']);
								  $com_d=mysql_escape_string($tf/2);
								  $com_a= mysql_escape_string($tf/2); 
								
									$s_fname=mysql_escape_string($_SESSION['s_fname']);
									$s_phone=mysql_escape_string($_SESSION['s_phone']);
									$status=mysql_escape_string("Pending");
									$r_name=mysql_escape_string($_SESSION['r_fname']. $_SESSION['r_lname']);
									 $r_phone=mysql_escape_string($_SESSION['r_phone']);
									// $r_bank=mysql_escape_string($_SESSION['r_bank']);
									$r_actno=mysql_escape_string($_SESSION['r_actno']);
if (isset($_POST['submit']))
	
{


								  echo $row['messageid'];
								$result = mysql_query('SELECT id,rate FROM todays_rate ORDER BY id DESC LIMIT 1') or die('Invalid query: ' . mysql_error());

								//print values to screen
								while ($row = mysql_fetch_assoc($result)) {
								  //echo $row['messageid'];
								$er= ($row['rate']);}
								 
									// $r_idtype= mysql_escape_string($_SESSION['r_idtype']);
									


							//print values to screen

if(isset($_SESSION['r_fname']) && !empty($_SESSION['r_fname']) AND isset($_SESSION['r_lname']) && !empty($_SESSION['r_lname']) 
AND isset($_SESSION['r_phone']) && !empty($_SESSION['r_phone'])AND isset($_SESSION['r_transfer']) && !empty($_SESSION['r_transfer'])
AND isset($_SESSION['r_bank']) && !empty($_SESSION['r_bank'])AND isset($_SESSION['r_idtype']) && !empty($_SESSION['r_idtype']) && isset($_POST['submit']))



 include "conn.php"; 
								
								  $r_bank=mysql_escape_string($_SESSION['r_bank']);
									 $r_idtype= mysql_escape_string($_SESSION['r_idtype']);
									 
									 
		
		mysql_query("INSERT INTO cust_transaction (date,receiptno,sender_email,sender_name,s_phone,r_name,r_phone,r_transfer,r_bank,r_idtype,
		amt_send,total,amt_local,commission,com_a,com_d,status, exchange_rate,r_actno)

 VALUES ('$date','$ref', '$email', '$s_fname', '$s_phone','$r_name', '$r_phone', '$r_transfer', '$r_bank', '$r_idtype',
 '$mon','$ap', '$lc', '$tf', '$com_a', ' $com_d', ' $status', '$er','$r_actno') ") or die(mysql_error());




	
	
	$to =  $email; 
$subject = "Receipt of Kunzle Money Transfer"; 

//$_REQUEST['message']
 $message =  "This is to confirm that your transaction has been processed. The folowing details has been registered
 
REECIPT OF TRANSACTION 
*********************************
 
 Receiver name : $r_name
 
 Receiver phone number : $r_phone
 
 Amount sending in �:$mon
 
 Commission Paid:$tf
 
 Local Currency Naira: $lc
 
 Total Payable �:$ap
 
 Transfer type: $r_transfer
 
 
 Bank Name : $r_bank
 
 Account No: $r_actno
 
 Transfer code: $ref
 
                   Thank You for Your Partronage with Kunzle Money Transfer
 
 ";
  $to      = $email;
$headers = 'From:<?php if (isset($_SESSION['email'])){ echo $_SESSION['email']; }  ?>' . "\r\n"; // Set from headers
 $sent = mail($to, $subject, $message, $headers) ; 
header("location: cus_home.php");

}$headers = 'From:<?php if (isset($_SESSION['email'])){ echo $_SESSION['email']; }  ?>' . "\r\n"; // Set from headers



if(isset($_SESSION['r_fname']) && !empty($_SESSION['r_fname']) AND isset($_SESSION['r_lname']) && !empty($_SESSION['r_lname']) 
AND isset($_SESSION['r_phone']) && !empty($_SESSION['r_phone'])AND isset($_SESSION['r_transfer']) && !empty($_SESSION['r_transfer'])
AND isset($_SESSION['r_bank']) && !empty($_SESSION['r_bank'])AND isset($_SESSION['r_actno']) && !empty($_SESSION['r_actno']) && isset($_POST['submit'])) 
{


else
{
							 $r_transfer=mysql_escape_string($_SESSION['r_transfer']);
								$test =(rand(100,10000));
								$ref= mysql_escape_string(('dkl' . $test));
								$email= mysql_escape_string($_SESSION['email']);
								$mon=mysql_escape_string($_SESSION['amount']);	
								$er= mysql_escape_string($_SESSION['er']) ;
								 $lc =mysql_escape_string($_SESSION['lc']) ;
								 $ap= mysql_escape_string($_SESSION['ap']);
								  $tf= mysql_escape_string($_SESSION['tf']);
								  $com_d=mysql_escape_string($tf/2);
								  $com_a= mysql_escape_string($tf/2);
									$date=date("Y-m-d");
									$s_fname=mysql_escape_string($_SESSION['s_fname']);
									$s_phone=mysql_escape_string($_SESSION['s_phone']);
									$status=mysql_escape_string("Pending");
									$r_name=mysql_escape_string($_SESSION['r_fname']. $_SESSION['r_lname']);
									 $r_phone=mysql_escape_string($_SESSION['r_phone']);



 include "conn.php"; 
								 
								  	$r_bank=mysql_escape_string($_SESSION['r_bank']);
									 $r_actno=mysql_escape_string($_SESSION['r_actno']);
									
									 
		
mysql_query("INSERT INTO cust_transaction (date,receiptno,sender_email,sender_name,s_phone,r_name,r_phone,r_transfer,r_bank,r_actno,
		amt_send,total,amt_local,commission,com_a,com_d,status, exchange_rate)

 VALUES ('$date','$ref', '$email', '$s_fname', '$s_phone','$r_name', '$r_phone', '$r_transfer', '$r_bank', '$r_actno',
 '$mon','$ap', '$lc', '$tf', '$com_a', ' $com_d', ' $status', '$er') ") or die(mysql_error());
	

	$to =  $email; 
$subject = "Receipt of Kunzle Money Transfer"; 
$email = 'info@daphkkoy.co.uk' ;
//$_REQUEST['message']
 $message =  "Hi,\n\nHow are you?";
 $headers = "Admin";
 $sent = mail($to, $subject, $message, $headers) ; 
if($sent) {echo "<script>alert(\"Thank you, Your Transaction Request has been submitted - a receipt has beeen sent to your email .\");</script>"; }
	*/													
 
 


	  
	

?>







 <!DOCTYPE html PUBLIC '-//W3C//DTD XHTML 1.0 Transitional//EN' 'http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd'>
<html xmlns='http://www.w3.org/1999/xhtml'>
<head>
<meta http-equiv='Content-Type' content='text/html; charset=iso-8859-1' />
<link rel="shortcut icon" href="img_fvr.php" type="image/jpeg" />
<title>Status Modifcation for Agent</title>



</head>

<body>
<p align='left'></p>
	<form id='form1' name='form1' method='post' action=''>
	
  
  <label>
  
    <label></label>
    <div align="center">
      <label></label>
      <table width="200" border="1" cellspacing="0" cellpadding="0">
        <tr>
          <th scope="row"><table width="476" height="461" border="0" cellpadding="0" cellspacing="0">
            <tr bgcolor="#999999">
              <th height="19" colspan="4" bgcolor="#CCCCCC" scope="row">AGENT STATUS </th>
            </tr>
            <tr>
              <th colspan="4" scope="row"><hr></th>
            </tr>
            <tr>
              <th colspan="4" scope="row">&nbsp;</th>	
            </tr>
            <tr>
              <th scope="row">&nbsp;</th>
              <td width="138" class=""><label class="7 ">
                <div align="center">Status</div>
              </label></td>
              <td width="107" class=""><select name="tsk" id="tsk">
                <option selected>ACTIVE</option>
                <option>SUSPENDED</option>
              </select></td>
              <td width="117" class="">&nbsp;</td>
            </tr>
            <tr>
              <th colspan="4" scope="row">&nbsp;</th>
            </tr>
            <tr>
              <th width="114" scope="row"><div align="left" class="">
                  <div align="center"></div>
              </div></th>
              <td class=""><div align="center" class="">
                  <div align="left" class="">
                    <div align="center">Customer  Name </div>
                  </div>
              </div></td>
              <td class=""><?PHP  if (isset($_GET['fname']))
				
				echo  strtoupper($_GET['fname']).strtoupper ($_GET['lname']);
				
				
				?>
              <div align="center"></div></td>
              <td class="">&nbsp;</td>
            </tr>
            <tr>
              <th scope="row">&nbsp;</th>
              <td colspan="3" class="">&nbsp;</td>
            </tr>
            <tr>
              <th scope="row"><div align="left" class="">
                  <div align="center"></div>
              </div></th>
              <td class=""><div align="left" class=""> <span class="7">
                <div align="center">Email</div>
              </div></td>
              <td class=""><div align="center"><span class="">
                <?PHP  if (isset($_GET['ag_email']))
				
				echo  ($_GET['ag_email']);
				
				
				?>
              </span></div></td>
              <td class="">&nbsp;</td>
            </tr>
            <tr>
              <th scope="row">&nbsp;</th>
              <td colspan="3" class="">&nbsp;</td>
            </tr>
            <tr>
              <th colspan="4" scope="row">&nbsp;</th>
            </tr>
            <tr>
              <th height="37" colspan="4" scope="row"><label>
                <input name="Confirm" type="submit" id="Confirm" value="Confirm">
              </label></th>
            </tr>
            <tr>
              <th height="37" colspan="4" scope="row"><div align="center"> </div>
                  <div align="center"></div></th>
            </tr>
            <tr>
              <th height="37" scope="row">&nbsp;</th>
              <th height="37" colspan="3" scope="row"><div align="right"><span class="4"><a href="admin_page.php" class=" 3">Return to administration home page</a></span></div></th>
            </tr>
          </table></th>
        </tr>
      </table>
      </label>
      <?PHP

 if (isset($_POST['Confirm'])) { 
 
$ag_email= $_GET['ag_email'];
 
 $tsk=mysql_escape_string($_POST['tsk']);
 
 if ($tsk=="ACTIVE" ){

$status= "1";}

else { $status= "0";}
 

$link = include "conn.php";
 include "conn.php";  
	


 mysql_query("UPDATE agent SET active = '$status' WHERE email = '$ag_email' ") or die( "<b>Error:</b> Something went wrong, could not edit link status.");

echo" <script type='text/javascript'>
 
 {
 window.alert('Your Agent status now been Successful Modiified')
window.location='admin_page.php';
 }
</script> ";	
	  }
?>
    </div>
	</form>
<div align="center"></div>
<p>&nbsp; </p>
</body>


</html>


