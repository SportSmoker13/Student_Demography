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
  <title>Login Page</title>
</head>

<body style="background-color: white; text-align: center">
  <div class="jumbotron jumbotron-fluid" style="background-color: white;">
    <div class="container">
      <h1 style="font-size: 50px ;font-family: minion pro regular;color: #9F1C33;">STUDENT DEMOGRAPHY FORM</h1>
      <br>
      <h2 style="font-weight: bold; color: #444444;">Welcome to the <h style="color: #9F1C33;">Admin Page</h> of Student
        Demography Form.</h2>
    </div>
  </div>

  <div>
    <form action="filter.php" method="POST">
    
      <button type="submit" class="btn btn-primary btn-lg" name="branch" value="Computer Engineering" 
        style="background-color: #9F1C33; border-color: #9F1C33; align-self: left"><i
          class="fas fa-users-cog"></i>Computer Engineering</button></a>
      <button type="submit" class="btn btn-primary btn-lg" name="branch" value="Information Technology" 
        style="background-color: #9F1C33; border-color: #9F1C33"><i class="fas fa-users-cog"></i>Information
        Technology</button></a>

      <button type="submit" class="btn btn-primary btn-lg" name="branch" value="Electronics and Telecommunication Engineering" 
        style="background-color: #9F1C33; border-color: #9F1C33"><i class="fas fa-users-cog"></i>Electronics and
        Telecommunication Engineering</button></a>
      <br>
      <br>
      <br>
      <button type="submit" class="btn btn-primary btn-lg" name="branch" value="Electronics Engineering" 
        style="background-color: #9F1C33; border-color: #9F1C33;"><i class="fas fa-users-cog"></i>Electronics
        Engineering</button></a>
      <button type="submit" class="btn btn-primary btn-lg" name="branch" value="Instrumentation Engineering" 
        style="background-color: #9F1C33; border-color: #9F1C33"><i class="fas fa-users-cog"></i>Instrumentation
        Engineering</button></a>
    </form>
  </div>
</body>

</html>