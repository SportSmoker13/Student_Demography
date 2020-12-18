<?php 

	$dbhost = 'localhost';
	$dbuser = 'root';
	$dbpass = '';
	$dbname = "test" ;

	if(isset($_POST['submit'])){

		$conn = mysqli_connect($dbhost,$dbuser,$dbpass, $dbname);

		if(!$conn){

			echo "Couldn't Connect to Server";

		}

		$roll 		= $_POST['roll_number'];
		$mob 		= $_POST['mob_number'];
		$email  	= $_POST['email'];
		$pmob 		= $_POST['parents_mob_number'];
		$pemail 	= $_POST['parents_email'];
		$income 	= $_POST['total_income'];
		$mot 		= $_POST['mode_of_tansport'];
		$cr 		= $_POST['city_of_residence'];
		$pa  		= $_POST['pa'];
		$pap  		= $_POST['pap'];
		$ca  		= $_POST['ca'];
		$cap  		= $_POST['cap'];
		$branch		= $_POST['branch'];

		$table="";

		if ($branch=="Computer Engineering"){
			$table = "comp"; 
		} else if ($branch=="Information Technology"){
			$table = "infotech"; 
		} else if ($branch=="Electronics and Telecommunication Engineering"){
			$table = "extc"; 
		} else if ($branch=="Electronics Engineering"){
			$table = "etrx"; 
		} else if ($branch=="Instrumentation Engineering"){
			$table = "instru"; 
		}
		
		$query = "UPDATE ".($table)." SET MobileNo='$mob',EmailID='$email',ParentMobileNo='$pmob',ParentEmailID='$pemail',TotalFamilyIncome='$income',ModeOfTransport='$mot',CityOfResidenceToAttendCollege='$cr',PermanentAddress='$pa',PermanentAddressPincode='$pap',CorrespondingAddress='$ca',CorrespondingAddressPincode='$cap'  WHERE RollNo='$roll'";
		
		mysqli_select_db($conn,'test');
		$end = mysqli_multi_query($conn,$query);

		if($end){

			echo "<script>alert('Data Updated Successfully')</script>";
			header( "Location: First_page.php" );
			exit();

		}
		else{
			echo "<script>alert('Data Update Failed')</script>";
			exit();	
		}	
	}

 ?>