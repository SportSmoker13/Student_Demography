<?php

    session_start();

    $_SESSION['branch'] = $_POST['branch'];

?>


<!DOCTYPE html>
<html>

<head>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
    integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
    integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
  </script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
    integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
  </script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
    integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
  </script>
  <script src="https://kit.fontawesome.com/bffaae1c31.js" crossorigin="anonymous"></script>
  <title>Admin Requirements</title>
</head>

<body style="background-color:white;">
  <div class="jumbotron jumbotron-fluid" style="padding-bottom: 10px ; background-color: white">
    <div class="container" style="text-align: center">
      <h1 style="font-size: 50px ;font-family: minion pro regular;color: #9F1C33;"><b>STUDENT DEMOGRAPHY FORM</b></h1>
      <br>
      <h2 style="font-size: 40px;font-weight: bold; color: #444444;"><i class="fas fa-user-md"></i> ADMIN REQUIREMENTS
      </h2>
    </div>
  </div>
  <br>
  <p style="color:darkblue;text-align:center; font-family:Times; font-size:30px"><b></b></p>
  <form class="form-control" action="csv_generator.php" method="POST" style="color: #444444 ; margin-left:15% ;width: 70%">
    <table style="background-color: white; font-family:Times ;font-size: 17px; margin-left:28%; margin-right:15%" cellpadding="20">

      <tr>
        <td>
          <b>Class:</b>
        </td>
        <td>
            <select name="class" id="class" >
              <option value=" " selected>--SELECT--</option>
              <option value="First Year">First Year</option>
              <option value="Second Year">Second Year</option>
              <option value="Third Year">Third Year</option>
              <option value="Fourth Year">Fourth Year</option>
            </select>  
            <br>
        </td>
      </tr>
      <tr>
        <td>
          <b>Gender:</b>
        </td>
        <td>
          <select name="gender" id="gender" >
              <option value=" " selected>--SELECT--</option>
              <option value="male">Male</option>
              <option value="female">Female</option>
              <option value="other">Other</option>
          </select>  
        </td>
      </tr>
      <tr>
        <td>
          <b>Religion:</b>
        </td>
        <td>
            <select name="religion" id="religion" >
              <option value=" " selected>--SELECT--</option>
              <option value="Hindu">Hindu</option>
              <option value="Muslim">Muslim</option>
              <option value="Christian">Christian</option>
              <option value="Sikh">Sikh</option>
              <option value="Buddhist">Buddhist</option>
              <option value="Other">Other</option>

            </select>  
            <br>
        </td>
      </tr>
      <tr>
        <td>
          <b>Category:</b>
        </td>
        <td>
           <select name="category" id="category" >
              <option value=" " selected>--SELECT--</option>
              <option value="Open">Open</option>
              <option value="OBC">OBC</option>
              <option value="SC">SC</option>
              <option value="ST">ST</option>
              <option value="NT">NT</option>
              <option value="VJ">VJ</option>
              <option value="Other">Other</option>

          </select>  
          <br>  
        </td>
      </tr>
     
      <tr>
        <td>
          <b>Mother Tongue:</b>
        </td>
        <td>
           <select name="mother_tongue" id="mother_tongue">
              <option value=" " selected>--SELECT--</option>
              <option value="Hindi">Hindi</option>
              <option value="Marathi">Marathi</option>
              <option value="English">English</option>
              <option value="Telegu">Telegu</option>
              <option value="Kannada">Kannada</option>
              <option value="Tamil">Tamil</option>
              <option value="Urdu">Urdu</option>
              <option value="Malayalam">Malayalam</option>
              <option value="Odia">Odia</option>
              <option value="Other">Other</option>

          </select>  
          <br> 
          

        </td>
      </tr>
      <tr>
        <td>
          <b>Physically Handicap:</b>
        </td>
        <td>
            <select name="physically_handicap" id="physically_handicap" >
              <option value=" " selected>--SELECT--</option>
              <option value="Yes">Yes</option>
              <option value="No">No</option>
          </select>  
            <br>
        </td>
      </tr>
      <tr>
        <td>
          <b>Society:</b>
        </td>
        <td>
          <select name="society" id="society" >
              <option value=" " selected>--SELECT--</option>
              <option value="rural">Rural</option>
              <option value="urban">Urban</option>
          </select>  
            <br>
        </td>
      </tr>
      <tr>
        <td style="width:58%">
          <b>Admission Category:</b>
        </td>
        <td>
          <select name="admission_category" id="admission_category" >
              <option value=" " selected>--SELECT--</option>
              <option value="General">General</option>
              <option value="OBC">OBC</option>
              <option value="SC">SC</option>
              <option value="ST">ST</option>
              <option value="VJ">VJ</option>
              <option value="NT">NT</option>
              <option value="Physically Handicap">Physically Handicap</option>
              <option value="Defence">Defence</option>
              
          </select>  
            <br>
        </td>
      </tr>
      <tr>
        <td>
          <b>Admission Quota:</b>
        </td>
        <td>
          <select name="admission_quota" id="admission_quota" >
              <option value=" " selected>--SELECT--</option>
              <option value="MHTCET">MHTCET</option>
              <option value="Jee-Mains">Jee-Mains</option>
              <option value="Other">Other</option>
          </select>  
            <br>
          
      </td>
      </tr>
      <tr>
        <td>
          <b>State of 12th Examination Passed or Diploma:</b>
        </td>
        <td>
          <select name="state_12th_exam" id="state_12th_exam" >
              <option value=" " selected>--SELECT--</option>
              <option value="Maharashtra">Maharashtra</option>
              <option value="MSBTE">MSBTE</option>
              <option value="Other">Other</option>
          </select>  
            <br>
        </td>
      </tr>
      <tr>
        <td>
          <b>Medium of 10th Examination Passed:</b>
        </td>
        <td>
          <select name="medium_10th_passed" id="medium_10th_passed" >
              <option value=" " selected>--SELECT--</option>
              <option value="English">English</option>
              <option value="Semi-English">Semi-English</option>
              <option value="Vernacular">Vernacular</option>
          </select>  
            <br>
        </td>
      </tr>
      <tr>
        <td>
          <b>Total Family Income:</b>
        </td>
        <td>
          <select name="total_income" id="total_income" >
              <option value=" " selected>--SELECT--</option>
              <option value="Below 1 Lacs">Below 1 Lacs</option>
              <option value="1 Lacs to < 3 Lacs">1 Lacs to < 3 Lacs</option>
              <option value="3 Lacs to < 6 Lacs">3 Lacs to < 6 Lacs</option>
              <option value="6 Lacs to < 10 Lacs">6 Lacs to < 10 Lacs</option>
              <option value="10 Lacs and above">10 Lacs and above</option>
          </select>  
            <br>
        </td>
      </tr>

    </table>
    <br>
    <br>
    <div>
      <button class="btn btn-primary btn-lg" name="submit"
        style="background-color: #9F1C33; border-color: #9F1C33; margin-left:45% ; margin-right: 45%; margin-bottom; width: 10% "
        type="submit">SUBMIT</button>
    </div>

  </form>


</body>

</html>