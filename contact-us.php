<?php 
	 	header('Content-type: application/json');
	 	$response = array();

	 	if ($_POST) {		
		$user_fname = trim($_POST['user_fname']);
		$user_lname = trim($_POST['user_lname']);
		$mobile_number = trim($_POST['mobile_number']);
		$email_address = trim($_POST['email_address']);
		$exam_filled_name = trim($_POST['exam_filled_name']);
		$optional_message = trim($_POST['optional_message']);
		$current_date= date("Y-m-d H:i:s");
		
		//$updt_password = "UPDATE  tb_users  SET user_pass ='".$newpassword."', user_updated_date_time='".$current_date."' WHERE user_email='".$email_address."' AND ID='".$userid."' AND user_mobile_no='".$mobile_no."'";
		//$reslt=$this->objDBCon->updateQuery($updt_password)or die(mysqli_error());
		// $msg="<table width='100%' border='0' cellpadding='5' cellspacing='0' class='inputbox' align='center'>
		// 		<tr>
		// 		<td colspan=3 style='font-family:arial;font-size:12px;'>A request was made for Password of  ".SITE_PATH." <br>Following are the login details.
		// 		</td>
		// 		</tr>
		// 		<tr>
		// 		  <td width='8%' align='right' style='font-family:arial;font-size:12px;'>Username</td>
		// 		  <td width='2%' align='center'><b> : </b></td>
		// 		  <td width='90%' style='font-family:arial;font-size:12px;'>$user_fname</td>
		// 		</tr>
		// 		<tr>
		// 		  <td width='8%' align='right' style='font-family:arial;font-size:12px;'>New Password</td>
		// 		  <td width='' align='center'><b> : </b></td>
		// 		  <td style='font-family:arial;font-size:12px;'>$mobile_number</td>
		// 		</tr>
		// 		 <tr>
		// 		<td colspan=3 style='font-family:arial;font-size:12px;'>Thanks<br>Technical Support<br> ".SITE_PATH." 
		// 		</td>
		// 		</tr>
		// 		</table>";
		// 		//echo $msg;

		// 		//exit;

		// 		$subject = FORGOT_PASSWORD_SUBJECT." ".SITE_PATH;
				
		// 		$to_email= $email_address;
				
		// 		$from_name =EMAIL_FROM;
				
		// 		$from_email = REGISTER_FROM_EMAIL;
				//$this->obj->send_html_mail_auth($msg,$from_name, $from_email, $to_email, $subject);
				$result='true';
		//print_r(expression)
			//var_dump($result);

				
		if($result=='true')
		{
			$response['status'] = 'success';
			$response['message'] = '<span class="glyphicon glyphicon-ok"></span> &nbsp; Your Request has been Send sucessfully.';
		}
		else{
			$response['status'] = 'error'; // could not register
			$response['message'] = '<span class="glyphicon glyphicon-info-sign"></span> &nbsp; could not send, try again later';
		}		
		}
		echo json_encode($response);
	 ?>