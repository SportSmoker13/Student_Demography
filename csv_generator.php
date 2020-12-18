<?php

	$host = "localhost"; // MySQL host name eg. localhost
	$user = "root"; // MySQL user. eg. root ( if your on localserver)
	$password = ""; // MySQL user password  (if password is not set for your root user then keep it empty )
	$database = "test"; // MySQL Database name

	// Connect to MySQL Database
	$con = new mysqli($host, $user, $password, $database);

	// Check connection
	if ($con->connect_error) {
		die("Connection failed: " . $con->connect_error);
	}

	
	session_start();

	$branch 				= $_SESSION['branch'];
	$class 					= $_POST['class'];
    $gender 				= $_POST['gender'];
    $religion 				= $_POST['religion'];
    $category 				= $_POST['category'];
    $mother_tongue 			= $_POST['mother_tongue'];
    $physically_handicap 	= $_POST['physically_handicap'];
    $society 				= $_POST['society'];
    $admission_category 	= $_POST['admission_category'];
    $admission_quota 		= $_POST['admission_quota'];
    $state_12th_exam 		= $_POST['state_12th_exam'];
    $medium_10th_passed 	= $_POST['medium_10th_passed'];
    $total_income 			= $_POST['total_income'];
	
	$table="";
	

	switch ($branch)
	{
		case "Computer Engineering":
			$table = "comp";
			break;
		case "Information Technology":
			$table = "infotech";
			break;
		case "Electronics and Telecommunication Engineering":
			$table = "extc";
			break;
		case "Electronics Engineering":
			$table = "etrx";
			
			break;
		case "Instrumentation Engineering":
			$table = "instru";
			break;
	}
	
	$query1 = "SELECT * FROM ".($table)." WHERE Branch='".$branch."'";
	
	$query2 = "";

	if ($class !=" "){
		$query2 = $query2." AND Class='".($class)."'";
	}
	
	if ($gender!=" "){
		$query2 = $query2." AND Gender='".($gender)."'";
	}
	
	if ($religion!=" "){
		$query2 = $query2." AND Religion='".($religion)."'";
	}
	
	if ($category!=" "){
		$query2 = $query2." AND Category='".($category)."'";
	}
	
	if ($mother_tongue!=" "){
		$query2 = $query2." AND MotherTongue='".($mother_tongue)."'";
	}
	
	if ($physically_handicap!=" "){
		$query2 = $query2." AND PhysicallyHandicap='".($physically_handicap)."'";
	}
	
	if ($society!=" "){
		$query2 = $query2." AND Society='".($society)."'";
	}
	
	if ($admission_category!=" "){
		$query2 = $query2." AND AdmissionCategory='".($admission_category)."'";
	}
	
	if ($admission_quota!=" "){
		$query2 = $query2." AND AdmissionQuota='".($admission_quota)."'";
	}
	
	if ($state_12th_exam!=" "){
		$query2 = $query2." AND StateOf12thExamPasssedOrDiploma='".($state_12th_exam)."'";
	}
	
	if ($medium_10th_passed!=" "){
		$query2 = $query2." AND MediumOf10thExamPassed='".($medium_10th_passed)."'";
	}
	
	if ($total_income!=" "){
		$query2 = $query2." AND TotalFamilyIncome='".($total_income)."'";
	}
	
	$query = ($query1).($query2);
	
	if (!$result = mysqli_query($con, $query)) {
		exit(mysqli_error($con));
	}
	
	$users = array();
	
	if (mysqli_num_rows($result)>0)
	{
		while ($row = mysqli_fetch_assoc($result)) 
		{
			$users[] = $row;
		}
	}
	
	header('Content-Type: text/csv; charset=utf-8');
	header('Content-Disposition: attachment; filename=studentsdemography.csv');
	$output = fopen('php://output', 'w');
	fputcsv($output, array('Roll No','First Name','Middle Name','Last Name','Class','Batch','Branch','Division','DOB','Gender','No Of Siblings','Religion','Category','Society','Mother Tongue','Physically Handicap','Permanent Address','Permanent Address Pincode','Corresponding Address','Corresponding Address Pincode','Mobile No','Email ID','Parent Mobile No','Parent Email ID','Mode Of Transport','City Of Residence To Attend College','Admission Category','Admission Quota','State Of 12th Exam Passsed Or Diploma','Medium Of 10th Exam Passed','Occupation Of Father','Occupation Of Mother','Total Family Income'));

	if (count($users) > 0) {
		foreach ($users as $row) {
			fputcsv($output, $row);
		}
	}

  
?>