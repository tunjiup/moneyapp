<?php session_start();
 include "conn.php";  
 

		if (isset($_POST['submit'])) 	
{

 include "conn.php";  
 
 
  if (!$_POST['s_fn'] | !$_POST['s_ln'] | !$_POST['s_add'] | !$_POST['s_email']| !$_POST['s_phn']| !$_POST['b_fn']| !$_POST['b_ln']| !$_POST['b_phn']
 | !$_POST['b_add']| !$_POST['b_id'] ) {
 
 	echo "<script>alert(\"You did not complete all of the required fields.\");</script>";
	
		//header("Location : transaction_bank.php");


 		die('You did not complete all of the required fields');

 	}
	
	if ($_POST['acn'] != $_POST['cacn']) {
	
 	echo "<script>alert(\"Your passwords did not match.\");</script>";

 		die('Your passwords did not match. ');

 	}
 
 
						/* $query="SELECT username FROM agent_log";
 							$result = mysql_query ($query);
					 		echo "<select name='agent'=''></option>";
					 		while($nt=mysql_fetch_array($result)){//Array or records stored in $nt
							echo "<option value=$nt[username]>$nt[username]</option>"; }
							
					
								echo "</select>";
				
								 
								 */
								 
								 $new = mysql_query('SELECT id,rate FROM todays_rate ORDER BY id DESC LIMIT 1') or die('Invalid query: ' . mysql_error());

								//print values to screen
								while ($row = mysql_fetch_assoc($new)) {
								  //echo $row['messageid'];
								 
								$er= ($row['rate']);}
								
									$_SESSION['er']=$er;			  
									$_SESSION['s_title']=$_POST['s_title'];
									$_SESSION['s_fn']= $_POST['s_fn'];
									$_SESSION['s_ln']= $_POST['s_ln'];
									$_SESSION['s_add']= $_POST['s_add'];
									$_SESSION['s_pc']= $_POST['s_pc'];
									$_SESSION['s_phn']= $_POST['s_phn'];
									 $_SESSION['s_email']=$_POST['s_email'];
									 $_SESSION['b_title']=$_POST['b_title'];
									 $_SESSION['b_fn']=$_POST['b_fn'];
									 $_SESSION['b_ln']=$_POST['b_ln'];
									$_SESSION['b_add']= $_POST['b_add'];
									 $_SESSION['b_toi']=$_POST['b_toi'];
									 $_SESSION['b_phn']=$_POST['b_phn'];
									 $_SESSION['bank']=$_POST['bank'];
									 $_SESSION['bank_act']=$_POST['bank_act'];
									 $_SESSION['acn']=$_POST['acn'];
									 $_SESSION['cacn']=$_POST['b_cacn'];
									 $_SESSION['agent']=$_POST['agent'];
									 $_SESSION['mon']=$_POST['mon'];
									 $_SESSION['tcode']=$_POST['tcode'];
									 $_SESSION['choice']='</select>';
					header("Location: confirmation.php"); 
 }
 
 echo" <!DOCTYPE html PUBLIC '-//W3C//DTD XHTML 1.0 Transitional//EN' 'http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd'>
<html xmlns='http://www.w3.org/1999/xhtml'>
<head>
<meta http-equiv='Content-Type' content='text/html; charset=iso-8859-1' />
<title>Untitled Document</title>
<style type='text/css'>
<!--
.style1 {
	font-size: 11px;
	font-weight: bold;
}
.style2 {
	font-size: 18px;
	font-weight: bold;
}
-->
</style>
</head>

<body>
<table width='590' height='415' border='0' align='center'>
  <tr>
    <td width='637' height='177'> 
	<form id='form1' name='form1' method='post' action='transaction_bank.php'>
	
	
 
      <table width='568' border='2'>
        <tr>
          <td><table width='519' height='854' border='2' bgcolor='#9999FF'>
            <tr>
              <td colspan='8' bgcolor='#FFFFFF'><div align='center'>
                <p><span class='style2'>Transfer Transactions </span>";
                    
					 $today = date('F j, Y, g:i a');
					  echo "$today";
						echo"</p>
                <p class='style1'>Marked Fields are Compulsory   </p>
              </div></td>
            </tr>
            <tr>
              <td colspan='8'><strong><u>Senders Details</u></strong></td>
            </tr>
            <tr>
              <td>Title*</td>
              <td><select name='s_title' id='select'>
                  <option selected='selected'>Mr.</option>
                  <option>Mrs</option>
                  <option>Miss</option>
                  <option>Dr.</option>
                  <option>Chief</option>
              </select></td>
              <td>&nbsp;</td>
              <td colspan='4'>&nbsp;</td>
              <td><div align='center'></div></td>
            </tr>
            <tr>
              <td width='74'>First Name*
                <label> </label></td>
              <td width='148'><input name='s_fn' type='text' id='s_fn' /></td>
              <td width='3'>&nbsp;</td>
              <td colspan='4'>Surname*</td>
              <td width='198'><input name='s_ln' type='text' id='s_ln' /></td>
            </tr>
            <tr>
              <td>Address*
                
                <label></label></td>
              <td colspan='4'><label>
                <textarea name='s_add' id='s_add'></textarea>
              </label></td>
              <td width='6'>&nbsp;</td>
              <td width='42'>Post Code</td>
              <td><input name='s_pc' type='text' id='s_pc' /></td>
            </tr>
            <tr>
              <td><label>Email</label>
                *</td>
              <td><label>
                <input name='s_email' type='text' id='s_email' />
              </label></td>
              <td>&nbsp;</td>
              <td colspan='4'>Sender *Phone No</td>
              <td><input name='s_phn' type='text' id='s_phn' /></td>
            </tr>
            <tr>
              <td><label></label></td>
              <td colspan='7'><label></label></td>
            </tr>
            <tr>
              <td colspan='8'><label><strong><u>Beneficiary Details </u></strong> </label></td>
            </tr>
            <tr>
              <td>Title</td>
              <td colspan='7'><select name='b_title' id='titlea'>
                  <option selected='selected'>Mr.</option>
                  <option>Mrs</option>
                  <option>Miss</option>
                  <option>Dr.</option>
                  <option>Chief</option>
              </select></td>
            </tr>
            <tr>
              <td>First Name*</td>
              <td><label>
                <input name='b_fn' type='text' id='b_fn' />
              </label></td>
              <td>&nbsp;</td>
              <td colspan='4'>Last Name
                *
                <label></label></td>
              <td><label>
                <input name='b_ln' type='text' id='b_ln' />
              </label></td>
            </tr>
            <tr>
              <td height='23'>Type of ID</td>
              <td height='23'><select name='b_id' id='b_id'>
                  <option> Driving Lincense</option>
                  <option>Intl Passport</option>
                  <option>National ID Card</option>
                  <option>Others</option>
              </select></td>
              <td height='23'>&nbsp;</td>
              <td height='23' colspan='4'>Receipient Phone No*</td>
              <td height='23'><label>
                <input name='b_phn' type='text' id='b_phn' />
              </label></td>
            </tr>
            <tr>
              <td>Recipient Address *</td>
              <td colspan='4'><label>
                <textarea name='b_add' id='b_add'></textarea>
              </label></td>
              <td>&nbsp;</td>
              <td>Transfer Code </td>
              <td><label>
                <input name='tcode' type='text' id='tcode'>
              </label></td>
			  
              </tr>
            <tr>
              <td>Bank</td>
              <td colspan='7'><select name='bank' id='bank'>
                <option>Skye Bank</option>
                <option>Access Bank</option>
                <option>Oceanic Bank</option>
                <option>Guarantee Trust Bank</option>
                <option>Zenith Bank</option>
                <option>Bank PHP</option>
                <option>First bank</option>
                <option>Union Bank</option>
                <option>United Bank Of Africa</option>
                <option>Fidelity Bank</option>
                <option>Intercontinental Bank</option>
                <option>AfriBank</option>
                <option>Equitorial Trust Bank</option>
                <option>First Inland Bank</option>
                <option>First City Monument Bank</option>
                <option>Stanbic Bank</option>
                <option>Sterling Bank</option>
                <option>Spring Bank</option>
                <option>Unity Bank</option>
                <option>Universal Trust Bank</option>
                <option>Wema Bank</option>
                <option>Nal Bank</option>
                <option>COnvenant Bank</option>
                <option>Accion Bank</option>
                <option>Bond Bank</option>
              </select></td>
              </tr>
            <tr>
              <td>Bank Account No </td>
              <td><input name='acn' type='text' id='acn' /></td>
              <td>&nbsp;</td>
              <td colspan='4'><div align='center'>Confirm Account No</div></td>
              <td><input name='cacn' type='text' id='cacn' /></td>
            </tr>
            
            <tr>
              <td colspan='8'><label>
                <div align='center'>Agent Name ";
                  
							
								$query="SELECT username FROM users";
								$result = mysql_query ($query);
								echo "<select name='agent'=''></option>";
								while($nt=mysql_fetch_array($result)){//Array or records stored in $nt
								echo "<option value=$nt[username]>$nt[username]</option>"; }
 echo '</select> ';
  
               echo" </div>
              </label>                <div align='center'></div></td>
              </tr>
            
            <tr>
              <td height='24' colspan='8'><label></label>
                <div align='center'>Exchange Rate ";
                
								$new = mysql_query('SELECT id,rate FROM todays_rate ORDER BY id DESC LIMIT 1') or die('Invalid query: ' . mysql_error());

								//print values to screen
								while ($row = mysql_fetch_assoc($new)) {
								  //echo $row['messageid'];
								 
								$er= ($row['rate']);}
								echo " $er ";
							 
			 
             echo"</div></td>
              </tr>
				<tr>
				  <td colspan='8'><div align='center'>
					<input name='submit' type='submit' id='submit' value='Submit' />
				  </div></td>
				</tr>
				
				
				  </table>            
					<label> </label></td>
						</tr>
					  </table>
					</form>    </td>
					  </tr>
					</table>
					</body>
					</html>


		?>