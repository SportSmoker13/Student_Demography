<?php 

  session_start();

  $_SESSION['pa']     = $_POST['perm_address'];
  $_SESSION['pap']    = $_POST['perm_pincode'];
  $_SESSION['ca']     = $_POST['corres_address'];
  $_SESSION['cap']    = $_POST['corres_pincode'];
  $_SESSION['mob']    = $_POST['mob_number'];
  $_SESSION['email']  = $_POST['email'];
  $_SESSION['pmob']   = $_POST['parents_mob_number'];
  $_SESSION['pemail'] = $_POST['parents_email'];
  $_SESSION['MOT']    = $_POST['mode_of_tansport'];
  $_SESSION['CR']     = $_POST['city_of_residence'];
  
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
  <title>Educational Details</title>
</head>

<body style="background-color:white">
  <div class="jumbotron jumbotron-fluid" style="padding-bottom: 10px ; background-color: white">
    <div class="container" style="text-align: center">
      <h1 style="font-size: 50px ;font-family: minion pro regular;color: #9F1C33;"><b>STUDENT DEMOGRAPHY FORM</b></h1>
      <br>
      <h2 style="font-size: 40px;font-weight: bold; color: #444444;"><i class="fas fa-university"></i> EDUCATIONAL
        DETAILS</h2>
    </div>
  </div>
  <br>


  <form style="color: #444444 ; margin-left:15% ;width: 70%" class="form-control" action="Occupational_details.php" method="POST">
    <table style="background-color: white; font-family:Times;  font-size: 17px;margin-left:22%; margin-right:21%" cellpadding="25">

      <tr>
        <td style="width:58%">
          <b>Admission Category:</b>
        </td>
        <td>
          <select name="admission_category" id="admission_category" required>
              <option value="">--SELECT--</option>
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
          <select name="admission_quota" id="admission_quota" required>
              <option value="">--SELECT--</option>
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
          <select name="state_12th_exam" id="state_12th_exam" required>
              <option value="">--SELECT--</option>
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
          <select name="medium_10th_passed" id="medium_10th_passed" required>
              <option value="">--SELECT--</option>
              <option value="English">English</option>
              <option value="Semi-English">Semi-English</option>
              <option value="Vernacular">Vernacular</option>
          </select>  
            <br>
        </td>
      </tr>
    </table>
    <br>
    <div style="margin-left: 40% ; margin-bottom: 1%">
      <input type="checkbox" required>
      <label for="vehicle1">All Data entered is correct.</label><br>
    </div>
    <button class="btn btn-primary btn-lg"
      style="background-color: #9F1C33; border-color: #9F1C33; margin-left:45% ; margin-right: 45%; margin-bottom; width: 10% "
      type="submit">SUBMIT</button>

  </form>
</body>

</html>