<?php

    session_start();

    $_SESSION['roll']     = $_POST['roll_number'];
    $_SESSION['fname']    = $_POST['first_name'];
    $_SESSION['mname']    = $_POST['middle_name'];
    $_SESSION['lname']    = $_POST['last_name'];
    $_SESSION['class']    = $_POST['class'];
    $_SESSION['batch']    = $_POST['batch'];
    $_SESSION['branch']   = $_POST['branch'];
    $_SESSION['div']      = $_POST['div'];
    $_SESSION['dob']      = $_POST['dob'];
    $_SESSION['gender']   = $_POST['gender'];
    $_SESSION['nos']      = $_POST['no_of_siblings'];
    $_SESSION['religion'] = $_POST['religion'];
    $_SESSION['category'] = $_POST['category'];
    $_SESSION['society']  = $_POST['society'];
    $_SESSION['motong']   = $_POST['mother_tongue'];
    $_SESSION['handi']    = $_POST['physically_handicap'];
    

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
  <title>Residential Contact Details</title>
</head>

<body style="background-color:white;" class="">
  <div class="jumbotron jumbotron-fluid" style="padding-bottom: 10px ; background-color: white">
    <div class="container" style="text-align: center">
      <h1 style="font-size: 50px ;font-family: minion pro regular;color: #9F1C33;"><b>STUDENT DEMOGRAPHY FORM</b></h1>
      <br>
      <h2 style="font-size: 40px;font-weight: bold; color: #444444;"><i class="fas fa-home"></i> RESIDENTIAL AND CONTACT
        DETAILS </b></p>
      </h2>
    </div>
  </div>
  <form style="color: #444444 ; margin-left:15% ;width: 70%" class="form-control" method="POST" action="Educational_details.php">
    <table style="background-color: white;font-family:Times ; font-size: 17px;margin-left:26%; margin-right:25%" cellpadding="25">
      <tr>
        <td style="width:70% ">
          <b>Permanent Address:</b>
        </td>
        <td style="text-align:center">
          <textarea type="text" name="perm_address" placeholder="Permanent Add." required rows="4" cols="30"></textarea>
        </td>
      </tr>
      <tr>
        <td>
          <b>Permanent Address Pincode:</b>
        </td>
        <td style="text-align:center">
          <input type="text" name="perm_pincode" placeholder="pincode" minlength="6" maxlength="6" required>
        </td>
      </tr>
      <tr>
        <td>
          <b>Corresponding Address:</b>
        </td>
        <td style="text-align:center">
          <textarea type="text" name="corres_address" placeholder="Corresponding Add." required rows="4" cols="30"></textarea>
        </td>
      </tr>
      <tr>
        <td>
          <b>Corresponding Address Pincode:</b>
        </td>
        <td style="text-align:center">
          <input type="text" name="corres_pincode" placeholder="pincode" required>
        </td>
      </tr>
      <tr>
        <td>
          <b>Mobile Number:</b>
        </td>
        <td style="text-align:center">
          <input type="text" name="mob_number" placeholder="Mobile number" minlength="10" maxlength="10" required>
        </td>
      </tr>
      <tr>
        <td>
          <b>Email ID:</b>
        </td>
        <td style="text-align:center">
          <input type="text" name="email" placeholder="username@xyz.com" required>
        </td>
      </tr>
      <tr>
        <td>
          <b>Parents Mobile Number:</b>
        </td>
        <td style="text-align:center">
          <input type="text" name="parents_mob_number" placeholder="Mobile number" minlength="10" maxlength="10"
            required>
        </td>
      </tr>
      <tr>
        <td>
          <b>Parents Email ID:</b>
        </td>
        <td style="text-align:center">
          <input type="text" name="parents_email" placeholder="username@xyz.com" required>
        </td>
      </tr>

      <tr>
        <td>
          <b>Mode of Transport:</b>
        </td>
        <td style="text-align:center">
          <input type="text" name="mode_of_tansport" placeholder="Mode of Transport" required>
        </td>
      </tr>
      <tr>
        <td>
          <b>City of Residence to attend college:</b>
        </td>
        <td style="text-align:center">
          <input type="text" name="city_of_residence" placeholder="City of Residence" required>
        </td>
      </tr>
    </table>
    
    <div style="margin-left: 40% ; margin-bottom: 1%">
      <input type="checkbox" required>
      <label for="vehicle1">All Data entered is correct.</label><br>
    </div>
    <button class="btn btn-primary btn-lg"
      style="background-color: #9F1C33; border-color: #9F1C33; margin-left:45% ; margin-right: 45%; margin-bottom; width: 10% "
      type="submit">SUBMIT</button>

  </form>
  <br>
  <br>
</body>

</html>