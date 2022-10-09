<?php 
	$error='';
	$id='';
	$name= '';
	$gender= '';
	$dob = '';
	$city = '';
	$state= '';
	$email= '';
	$qualif = '';
	$stream= '';

	function clean($text){
		$text = trim($text);
		$text = stripcslashes($text);
		$text = htmlspecialchars($text);
		return $text;
	}
	if(isset($_POST['Submit'])){
		if ($_POST['stid']==''){
			
			$error .= 'Plese Enter Student ID';
			
			echo "<script> alert('$error'); 
			window.location.assign('add-students.html');
		</script>";
		}
		else {
			$id = clean($_POST['stid']);
			
		}
		if(empty($_POST['name'])){
			
			$error= 'Plesae Enter your name';
			echo "<script> alert('$error'); 
			window.location.assign('add-students.html');
		</script>";
	
		}
		else{
			
			$name = clean($_POST['name']);
			if(!preg_match("/^[a-zA-z ]*$/", $name)){
				$error .='Only Letters and white space allowed';
				echo "<script> alert('$error'); 
			window.location.assign('add-students.html');
		</script>";
			}	
		}
		if(empty($_POST['gender'])){
			$error .='Plesae Select your gender';
			echo "<script> alert('$error'); 
			window.location.assign('add-students.html');
		</script>";
		}
		else{
			$gender = clean($_POST['gender']);
		}
		if(empty($_POST['dob'])){
			$error .='Please Enter You date of Birth';
			echo "<script> alert('$error'); 
			window.location.assign('add-students.html');
		</script>";
		}
		else{
			$dob = clean($_POST['dob']);
			$dob = date("d-m-Y",strtotime($dob));
		}	
		if(empty($_POST['city'])){
			$error .='Please Enter your City';
			echo "<script> alert('$error'); 
			window.location.assign('add-students.html');
		</script>";
		}
		else{
			$city = clean($_POST['city']);
		}
		if(empty($_POST['state'])){
			$error .='Please Enter your State';
			echo "<script> alert('$error'); 
			window.location.assign('add-students.html');
		</script>";
		}
		else{
			$state = clean($_POST['state']);
		}
		if(empty($_POST['email'])){
			$error .='Please Enter your Email';
			echo "<script> alert('$error'); 
			window.location.assign('add-students.html');
		</script>";
		}
		else{
			$email = clean($_POST['email']);
			if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
				$error .= 'Invalid Email';
				echo "<script> alert('$error'); 
			window.location.assign('add-students.html');
		</script>";
			}
		}
		if(empty($_POST['qualific'])){
			$error .='Please Enter your Qualification';
			echo "<script> alert('$error'); 
			window.location.assign('add-students.html');
		</script>";
		}
		else{
			$qualif = clean($_POST['qualific']);
		}
		if(empty($_POST['stream'])){
			$error .='Please Enter your Stream';
			echo "<script> alert('$error'); 
			window.location.assign('add-students.html');
		</script>";
		}
		else{
			$stream = clean($_POST['stream']);
		}

		if($error==''){

			$data_row =array($id,$name,$gender,$dob,$city,$state,$email,$qualif,$stream);
			$file = fopen("students.csv", "a");
			fputcsv($file,$data_row);
			$error='';
			$id='';
			$name= '';
			$gender= '';
			$dob = '';
			$city = '';
			$state= '';
			$email= '';
			$qualif = '';
			$stream= '';
			fclose($file);
			echo "Details have been saved successfully <br>";
            echo '<a href="index.html" style="text-decoration:none;">Back To Home Page</>';
		}

	}		
?>
