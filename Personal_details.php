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
  <title>Personal Details</title>
</head>

<body style="background-color:white;">
  <div class="jumbotron jumbotron-fluid" style="padding-bottom: 10px ; background-color: white">
    <div class="container" style="text-align: center">
      <h1 style="font-size: 50px ;font-family: minion pro regular;color: #9F1C33;"><b>STUDENT DEMOGRAPHY FORM</b></h1>
      <br>
      <h2 style="font-size: 40px;font-weight: bold; color: #444444;"><i class="fas fa-user"></i> PERSONAL DETAILS</h2>
    </div>
  </div>
  <form class="form-control" action="Residential_Contact_Details.php" method="POST"
    style="color: #444444 ; margin-left:15% ;width: 70%">
    <table style="background-color: white;  font-family:Times; font-size: 17px;margin-left:24%; margin-right:23%" cellpadding="20">
    
      <tr>
        <td style="width:46%;">
          <b>Roll Number:</b>
        </td>
        <td>
          <input type="text" name="roll_number" placeholder="Roll Number" required>
        </td>
      </tr>

      <tr>
        <td>
          <b>First Name:</b>
        </td>
        <td>
          <input type="text" name="first_name" placeholder="First Name" required>
        </td>
      </tr>
      <tr>
        <td>
          <b>Middle Name:</b>
        </td>
        <td>
          <input type="text" name="middle_name" placeholder="Middle Name" required>
        </td>
      </tr>
      <tr>
        <td>
          <b>Last Name:</b>
        </td>
        <td>
          <input type="text" name="last_name" placeholder="Last Name" required>
        </td>
      </tr>
      <tr>
        <td>
          <b>Class:</b>
        </td>
        <td>
            <select name="class" id="class" required>
              <option value="">--SELECT--</option>
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
          <b>Div:</b>
        </td>
        <td>
          <input type="text" name="div" placeholder="Div" required>
        </td>
      </tr>
      <tr>
        <td>
          <b>Batch:</b>
        </td>
        <td>
          <input type="text" name="batch" placeholder="Batch" required>
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
        <td>
          <b>Date of Birth (mm/dd/yyyy):</b>
        </td>
        <td>
          <input type="date" name="dob" required>
        </td>
      </tr>
      <tr>
        <td>
          <b>Gender:</b>
        </td>
        <td>
          <input type="radio" name="gender" value="male" required>Male
          <input type="radio" name="gender" value="female" required>Female
          <input type="radio" name="gender" value="Other" required>Other
        </td>
      </tr>
      <tr>
        <td>
          <b>Number of Siblings:</b>
        </td>
        <td>
          <input type="text" name="no_of_siblings" placeholder="Number of Siblings" required>
        </td>
      </tr>
      <tr>
        <td>
          <b>Religion:</b>
        </td>
        <td>
            <select name="religion" id="religion" required>
              <option value="">--SELECT--</option>
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
           <select name="category" id="category" required>
              <option value="">--SELECT--</option>
              <option value="OPEN">OPEN</option>
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
          <b>Society:</b>
        </td>
        <td>
          <input type="radio" name="society" value="rural" required>Rural
          <input type="radio" name="society" value="urban" required>Urban


        </td>
      </tr>
      <tr>
        <td>
          <b>Mother Tongue:</b>
        </td>
        <td>
           <select name="mother_tongue" id="mother_tongue" required>
              <option value="">--SELECT--</option>
              <option value="Hindi">Hindi</option>
              <option value="English">English</option>
              <option value="Marathi">Marathi</option>
              <option value="Telegu">Telegu</option>
              <option value="Kannada">Kannada</option>
              <option value="Tamil">Tamil</option>
              <option value="Urdu">Urdu</option>
              <option value="Malayalam">Malayalam</option>
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
          <input type="radio" name="physically_handicap" value="Yes" required>Yes

          <input type="radio" name="physically_handicap" value="No" required>No
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
  <br>
</body>

</html>