<?php 

	$dbhost = 'localhost';
	$dbuser = 'root';
	$dbpass = '';
	$dbname = "test";

	if(isset($_POST['submit'])){

		$conn = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname);

		if(!$conn){

			echo "Couldn't Connect to Server";

		}
		
		session_start();

		$roll 		= $_SESSION['roll'];
		$fname 		= $_SESSION['fname'];
		$mname 		= $_SESSION['mname'];
		$lname 		= $_SESSION['lname'];
		$class 		= $_SESSION['class'];
		$batch 		= $_SESSION['batch'];
		$branch 	= $_SESSION['branch'];
		$div 		= $_SESSION['div'];
		$dob 		= $_SESSION['dob'];
		$gender 	= $_SESSION['gender'];
		$nos 		= $_SESSION['nos'];
		$religion 	= $_SESSION['religion'];
		$category 	= $_SESSION['category'];
		$society 	= $_SESSION['society'];
		$motong 	= $_SESSION['motong'];
		$handi 		= $_SESSION['handi'];
		$pa  		= $_SESSION['pa'];
		$pap  		= $_SESSION['pap'];
		$ca  		= $_SESSION['ca'];
		$cap  		= $_SESSION['cap'];
		$mob 		= $_SESSION['mob'];
		$email 		= $_SESSION['email'];
		$pmob 		= $_SESSION['pmob'];
		$pemail 	= $_SESSION['pemail'];
		$mot 		= $_SESSION['MOT'];
		$cr 		= $_SESSION['CR'];
		$AddCat 	= $_SESSION['AddCat'];
		$AddQuo 	= $_SESSION['AddQuo'];
		$state12 	= $_SESSION['state12'];
		$state10 	= $_SESSION['state10'];
		$OF 		= $_POST['occupation_of_father'];
		$OM 		= $_POST['occupation_of_mother'];
		$income 	= $_POST['total_income'];
		
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
		
		

		$query = "INSERT INTO ".$table." (RollNo,FirstName,MiddleName,LastName,Class,Batch,Branch,Division,DOB,Gender,NoOfSiblings,Religion,Category,Society,MotherTongue,PhysicallyHandicap,PermanentAddress,PermanentAddressPincode,CorrespondingAddress,CorrespondingAddressPincode,MobileNo,EmailID,ParentMobileNo,ParentEmailID,ModeOfTransport,CityOfResidenceToAttendCollege,AdmissionCategory,AdmissionQuota,StateOf12thExamPasssedOrDiploma,MediumOf10thExamPassed,OccupationOfFather,OccupationOfMother,TotalFamilyIncome) VALUES ('$roll','$fname','$mname','$lname','$class','$batch','$branch','$div','$dob','$gender','$nos','$religion','$category','$society','$motong','$handi','$pa','$pap','$ca','$cap','$mob','$email','$pmob','$pemail','$mot','$cr','$AddCat','$AddQuo','$state12','$state10','$OF','$OM','$income')";
		
		mysqli_select_db($conn,'test');
		$end = mysqli_query($conn,$query);

		if($end){

			echo "<alert> Data Added Successfully</alert>";
			header( "Location: First_page.php" );
			exit();

		}
		else{
			echo "<alert> Data Entry Failed</alert>";
			exit();
		}


	}

 ?>