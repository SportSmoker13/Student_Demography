<?php 

     session_start();

    $_SESSION['AddCat']   = $_POST['admission_category'];
    $_SESSION['AddQuo']   = $_POST['admission_quota'];
    $_SESSION['state12']  = $_POST['state_12th_exam'];
    $_SESSION['state10']  = $_POST['medium_10th_passed'];

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
  <title>Occupational Details</title>
</head>

<body style="background-color:white;">
  <div class="jumbotron jumbotron-fluid" style="padding-bottom: 10px ; background-color: white">
    <div class="container" style="text-align: center">
      <h1 style="font-size: 50px ;font-family: minion pro regular;color: #9F1C33;"><b>STUDENT DEMOGRAPHY FORM</b></h1>
      <br>
      <h2 style="font-size: 40px;font-weight: bold; color: #444444;"><i class="fas fa-user-md"></i> OCCUPATIONAL DETAILS
      </h2>
    </div>
  </div>
  <br>
  <p style="color:darkblue;text-align:center; font-family:Times; font-size:30px"><b></b></p>
  <form class="form-control" action="stream.php" method="POST" style="color: #444444 ; margin-left:15% ;width: 70%">
    <table style="background-color: white; font-family:Times ;font-size: 17px; margin-left:28%; margin-right:15%" cellpadding="20">

      <tr>
        <td>
          <b>Occupation of Father:</b>
        </td>
        <td style="width:70% ; text-align:left">
          <input  type="text" name="occupation_of_father" placeholder="Father's Occupation">
        </td>
      </tr>
      <tr>
        <td>
          <b>Occupation of Mother:</b>
        </td>
        <td>
          <input type="text" name="occupation_of_mother" placeholder="Mother's Occupation">
        </td>
      </tr>
      <tr>
        <td>
          <b>Total Family Income:</b>
        </td>
        <td>
          <select name="total_income" id="total_income" required>
              <option value="">--SELECT--</option>
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
    <div style="margin-left: 40% ; margin-bottom: 1%">
      <input type="checkbox" required>
      <label for="vehicle1">All Data entered is correct.</label><br>
    </div>
    <div>
      <button class="btn btn-primary btn-lg" name="submit"
        style="background-color: #9F1C33; border-color: #9F1C33; margin-left:45% ; margin-right: 45%; margin-bottom; width: 10% "
        type="submit">SUBMIT</button>
    </div>

  </form>


</body>

</html>