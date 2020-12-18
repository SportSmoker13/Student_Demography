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
  <title>Update Details</title>
</head>



<body style="background-color:white;" class="">
  <div class="jumbotron jumbotron-fluid" style="padding-bottom: 10px ; background-color: white">
    <div class="container" style="text-align: center">
      <h1 style="font-size: 50px ;font-family: minion pro regular;color: #9F1C33;"><b>STUDENT DEMOGRAPHY FORM</b></h1>
      <br>
      <h2 style="font-size: 40px;font-weight: bold; color: #444444;">
<i class="fas fa-user-edit"></i> UPDATE DETAILS </b></p>
      </h2>
    </div>
  </div>


  <form  class="form-control" action="up_stream.php" method="POST" style="color: #444444 ; margin-left:15% ;width: 70%">
   
    <table style="background-color: white;  font-family:Times; font-size: 17px;margin-left:29%; margin-right:23%" cellpadding="20">
      
      <tr>
        <td style="width:46%;">
          <b>Roll Number:</b>
        </td>
        <td style="text-align:center">
          <input type="text" name="roll_number" placeholder="Roll number" minlength="8" maxlength="8">
        </td>
      </tr> 
      <tr>
        <td>
          <b>Branch:</b>
        </td>
        <td>
            <select name="branch" id="branch" required>
              <option value="">--SELECT--</option>
              <option value="Computer Engineering">Computer Engineering</option>
              <option value="Information Technology">Information Technology</option>
              <option value="Electronics and Telecommunication Engineering">Electronics and Telecommunication Engineering</option>
              <option value="Electronics Engineering">Electronics Engineering</option>
              <option value="Instrumentation Engineering">Instrumentation Engineering</option>
            </select>  
            <br>
        </td>
      </tr>
      <tr>
        <td style="width:46%;">
          <b>Mobile Number:</b>
        </td>
        <td style="text-align:center">
          <input type="text" name="mob_number" placeholder="Mobile number" minlength="10" maxlength="10">
        </td>
      </tr>
    <tr>
      <td>
        <b>Email ID:</b>
      </td>
      <td style="text-align:center">
        <input type="text" name="email" placeholder="username@xyz.com">
      </td>
    </tr>
    <tr>
      <td>
        <b>Parents Mobile Number:</b>
      </td>
      <td style="text-align:center">
        <input type="text" name="parents_mob_number" placeholder="Mobile number" minlength="10" maxlength="10">
      </td>
    </tr>
    <tr>
      <td >
        <b>Parents Email ID:</b>
      </td>
      <td style="text-align:center">
        <input type="text" name="parents_email" placeholder="username@xyz.com">
      </td>
    </tr>
    <tr>
      <td>
        <b>Total Family Income:</b>
      </td>
      <td style="width:70%">
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
    <tr>
      <td style="width:70%">
        <b>Permanent Address:</b>
      </td>
      <td style="text-align:center">
        <input type="text" name="pa" placeholder="Permanent Add." required>
      </td>
    </tr>
    <tr>
      <td>
        <b>Permanent Address Pincode:</b>
      </td>
      <td style="text-align:center">
        <input type="text" name="pap" placeholder="pincode" minlength="6" maxlength="6" required>
      </td>
    </tr>
    <tr>
      <td>
        <b>Corresponding Address:</b>
      </td>
      <td style="text-align:center">
        <input type="text" name="ca" placeholder="Corresponding Add." required />
        <br>
    </tr>
    <tr>
      <td>
        <b>Corresponding Address Pincode:</b>
      </td>
      <td style="text-align:center">
        <input type="text" name="cap" placeholder="pincode" required />

      </td>
    </tr>
    <tr>
      <td>
        <b>Mode of Transport:</b>
      </td>
      <td style="text-align:center">
        <input type="text" name="mode_of_tansport" placeholder="Mode of Transport">
      </td>
    </tr>
    <tr>
      <td>
        <b>City of Residence to attend college:</b>
      </td>
      <td style="text-align:center">
        <input type="text" name="city_of_residence" placeholder="City of Residence">
      </td>
    </tr> 
    </table>
    <div style="margin-left: 40% ; margin-bottom: 1%">
      <input type="checkbox" required>
      <label for="vehicle1">All Data entered is correct.</label><br>
    </div>
    <button class="btn btn-primary btn-lg"
      style="background-color: #9F1C33; border-color: #9F1C33; margin-left:45% ; margin-right: 45%; margin-bottom; width: 10% "
      type="submit" name="submit">SUBMIT</button>
    <br>
    <br>
  </form>
  <br>
</body>
</html>
