<?php 
if(isset($_POST['Submit'])){
	if($_POST['id']==''){
		$error.= "Please Enter Student ID";
		echo "<script> alert('$error'); 
			window.location.assign('search-student.html');
		</script>";
	}
echo '<style>
	table {
    padding: 2%;
    margin: 0;
    line-height: 30px;
    width: 20%;
    padding-bottom: 3%;
}
	tr td {
	  background-color:#e4f5d4;
	  font-family:Serif,Monospace;
	  font-size:100%;
	  padding:1%;
	  opacity :0.6;
	}
	tr th {
	   background-image: linear-gradient(#9cbd5d, #92a151);
	   color:#ffffff;
	   padding:1%;
	   border-radius: 2px 2px 0 0;
	   border-bottom: 2px solid #a3c250;
	  font-family:"Times New Roman",Serif;
	  font-variant: small-caps;
	  font-size:100%;
	  line-height:90%;
	}
</style>';
$id= $_POST['id'];
}
$flag =0;
$file = fopen("students.csv", "r");
while (($data = fgetcsv($file, ",")) !== FALSE) {
	$num =count($data);
	if($flag==0){
		$head_arr= $data;
        $flag=1;
	}
	elseif ($flag==1) {
		if($id==$data[0]){
			$val_arr = $data;
			echo '<table border="1">';
			for($i=0;$i<$num;$i++){
				echo '<tr><th>'.$head_arr[$i].'</th><td>'.$val_arr[$i].'</td></tr>';
			}
			echo '</table>';
			echo '<a href="index.html" style="text-decoration:none;">Back To Home Page</>';
			break;
		}

	}
		
}
if(empty($val_arr)){
        echo "Nothing found!!<br>";
        echo '<a href="index.html" style="text-decoration:none;">Back To Home Page</>';
}

fclose($file);
?>
