

<?PHP
include"admin_p.php";
	  include "conn.php";  
$age_email=$_GET['s_email'];

 if (isset($_POST['Confirm'])) 
	
	{ 			 
				 $r_transfer= $_GET['r_transfer'];
				$receiptno= $_GET['receiptno'];
				$s_fname= $_GET['s_fname'];
				$r_name= $_GET['r_name'];
				//$com_a= $_GET['com_a'];
				//$com_d= $_GET['com_d'];
				$date= $_GET['date'];
				$r_total= $_GET['r_total'];
				$r_amtsend= $_GET['r_amtsend'];
				$r_amtlocal= $_GET['r_amtlocal'];
				$age_email= $_GET['s_email'];
				 $tsk=mysql_escape_string($_POST['tsk']);
				// $numtr= $_GET['numtr'];
				
				 $gr=0;
				 $link = include "conn.php";
				 include "conn.php";  
				
				  $check0 = mysql_query("SELECT * FROM download_ag_com   ")or die(mysql_error());
				$check1 = mysql_query("SELECT * FROM download_cust_com   ")or die(mysql_error());
				$check5 = mysql_query("SELECT * FROM download_cust_com WHERE Emails = '$age_email'   ")or die(mysql_error());
				$check7 = mysql_query("SELECT * FROM download_cust_com WHERE Emails = '$age_email'   ")or die(mysql_error());
 
 
						  mysql_query("UPDATE cust_transaction SET status = '$tsk' WHERE receiptno = '$receiptno' ") or
						   die( "<b>Error:</b> Something went wrong, could not edit link status.");
	 	 /*
		 $checkrece = mysql_query("SELECT * FROM download_cust_clear_trans WHERE Receipt_No = '".$receiptno."'  ")or die(mysql_error());
		 $checkrece2 = mysql_num_rows($checkrece);
		 
  if( $tsk=="PAID" && ($checkrece2 == 0) )
	 {
						// check receipt transaction 
										

											 mysql_query("INSERT INTO download_cust_clear_trans 
											 (Date,Receipt_No,Sender,Receiver,Transfer_Mode,Amount_Sending,Local_Pay_N,Daph_Com,Med_Com,Total_Paying,status)
															VALUES ('$date','$receiptno','$s_fname','$r_name','$r_transfer',
															 '$r_amtsend','$r_amtlocal','$com_d','$com_a','$r_total','$tsk'
															 )") or die(mysql_error());
															 
															  //'�,Local_Pay_N,Daph_Com_�,Agent_Com_�,Total_Paying,status) VA' at line 2
	 															


// If email not present
						$table_array = mysql_fetch_array($check5);
				if(!$table_array) 	{
 						 mysql_query("INSERT INTO download_cust_com 
	 				(Sender,Date_Reg,Emails,No_Trans,Comission_Agent,Comission_Daph)VALUES ('$s_fname','$date','$age_email','$numtr','$com_a', '$com_d')") or die(mysql_error());
									}
			
//If email  present 

				if(isset($table_array) && $table_array[0] != "") {
					while($sa = mysql_fetch_array($check7))
					{$new_d =  $sa['Comission_Daph'] ;$new_a = $sa['Comission_Agent']; }

					$com_an=$com_a + $new_a;  $com_dn=$com_d + $new_d;

					mysql_query("UPDATE download_cust_com SET Sender = '$s_fname', Date_Reg = '$date' , No_Trans='$numtr',Comission_Agent='$com_an',
					Comission_Daph='$com_dn' WHERE Emails = '$age_email' ");

																	}

	 
	 }
	 
	 */
echo " <script type='text/javascript'> { window.alert('Transaction has now been Modified'); window.location='admin_custs_transaction_general _report.php';}</script>"; 
	 
	
	  }

?>



 <!DOCTYPE html PUBLIC '-//W3C//DTD XHTML 1.0 Transitional//EN' 'http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd'>
<html xmlns='http://www.w3.org/1999/xhtml'>
<head>
<meta http-equiv='Content-Type' content='text/html; charset=iso-8859-1' />
<link rel="shortcut icon" href="img_fvr.php" type="image/jpeg" />
<title>Receipt of transactio</title>
<style type='text/css'>
<!--
.style7 {color: #0000FF}
.style10 {font-size: 10px; color: #000000; }
.style12 {font-size: 12px; }
.style13 {font-size: 12px; color: #000000; }
a:link {
	text-decoration: none;
}
a:visited {
	text-decoration: none;
}
a:hover {
	text-decoration: none;
}
a:active {
	text-decoration: none;
}
.style14 {font-size: 10px}
-->
</style>
</head>

<body>
<p align='left'></p>
	<form id='form1' name='form1' method='post' action=''>
	
  
  <label>
  
    <label></label>
    <div align="center">
      <label></label>
      <table width="476" height="461" border="0" cellpadding="0" cellspacing="0">
        <tr bgcolor="#999999">
          <th height="19" colspan="4" bgcolor="#CCCCCC" scope="row"><span class="style7">TRANSACTION CONFIRMATION</span></th>
        </tr>
        <tr>
          <th colspan="4" scope="row"><hr></th>
        </tr>
        <tr>
          <th colspan="4" scope="row">&nbsp;</th>
        </tr>
        <tr>
          <th scope="row">Task Transaction </th>
          <td colspan="3" class="style10"><label>
            <select name="tsk" id="tsk">
              <option selected>PENDING</option>
              <option>PAID</option>
              <option>UNPAID</option>
              <option>SUSPENDED</option>
            </select>
          </label></td>
        </tr>
        <tr>
          <th colspan="4" scope="row">&nbsp;</th>
        </tr>
        <tr>
          <th width="168" scope="row"><div align="left" class="style12" style="color: #000">Sender Name </div></th>
          <td colspan="3" class="style10"><div align="center" class="style13">
              <div align="left">
                <?PHP  if (isset($_GET['s_fname']))
				
				echo  strtoupper($_GET['s_fname']);
				
				
				?>
              <span style="color: #00F"></span></div>
          </div></td>
        </tr>
        <tr>
          <th scope="row">&nbsp;</th>
          <td colspan="3" class="style13">&nbsp;</td>
        </tr>
        <tr>
          <th scope="row"><div align="left" class="style12" style="color: #000">Amount to be Sent</div></th>
          <td colspan="3" class="style10"><div align="left" class="style12"> <span class="style7" style="color: #00F">&pound; </span>
                  <span style="color: #00F">
                  <?php  if (isset($_GET['r_amtsend'])) echo strtoupper( $_GET['r_amtsend']); ?>
          </span></div></td>
        </tr>
        <tr>
          <th scope="row">&nbsp;</th>
          <td colspan="3" class="style13">&nbsp;</td>
        </tr>
        <tr>
          <th scope="row"><div align="left" class="style12" style="color: #000">Naira Equivalence </div></th>
          <td colspan="3" class="style10"><div align="left" class="style12" style="color: #00F"> N
            <?php  if (isset($_GET['r_amtlocal'])) echo strtoupper( $_GET['r_amtlocal']); ?>
          </div></td>
        </tr>
        <tr>
          <th scope="row">&nbsp;</th>
          <td colspan="3" class="style13">&nbsp;</td>
        </tr>
        
        <tr>
          <th scope="row"><div align="left"><span class="style12" style="color: #000">Total to be Paid</span></div></th>
          <td colspan="3" class="style12"><span class="style7">&pound; </span>
                <span style="color: #00F; font-weight: bold;">
                <?php  if (isset($_GET['r_total'])) echo strtoupper( $_GET['r_total']); ?>
          </span></td>
        </tr>
        <tr>
          <th scope="row">&nbsp;</th>
          <td colspan="3" class="style13">&nbsp;</td>
        </tr>
        <tr>
          <th scope="row"><div align="left"><span class="style12" style="color: #000">Reference</span></div></th>
          <td colspan="3" class="style13"><span class="style12" style="color: #00F">
            <?php  if (isset($_GET['receiptno'])) echo strtoupper( $_GET['receiptno']); ?>
          </span></td>
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
          <th height="37" colspan="3" scope="row"><div align="right"><span class="style14"><a href="admin_page.php" class="style1 style3">Return to administration home page</a></span></div></th>
        </tr>
      </table>
      </label>
	  
	  
	  


	  
	  
	  
</div>
</form>
<div align="center"></div>
<p>&nbsp; </p>
</body>


</html>



