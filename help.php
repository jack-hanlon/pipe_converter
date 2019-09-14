
<!DOCTYPE html>

<html>


<head>
<!-- All imported css and js libraries -->
<!--------------------------------------------------------------------------------------------->
<script src="jquery-3.4.1.min.js"></script>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<!--------------------------------------------------------------------------------------------->
</head>

<body>
  <!-- Navigation Menu bar at top of page -->
  <!--------------------------------------------------------------------------------------------->
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="http://localhost:8080/raw_pipe_converter/">Import File Converter</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
      <ul class="navbar-nav">
        <li class="nav-item active">
          <a class="nav-link" href="http://localhost:8080/raw_pipe_converter/">Home <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="http://localhost:8080/raw_pipe_converter/about.php">About</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="http://localhost:8080/raw_pipe_converter/help.php">Help</a>
        </li>

      </ul>
    </div>
  </nav>
  <!-- in built css style to add blue background -->
  <!--------------------------------------------------------------------------------------------->
  <style>
    body{
          background-image: url("bg.png");
        }

  </style>


</br></br></br></br>
<div class="card">
<div class="card-body">
  <h2>Before Using this Converter:</h2></br>
<h5>  1. Verify your input file is in .csv format.</h5> Do this by pressing "Save as" and .csv in Microsoft Excel.</br></br>
<h5>  2. Verify your "Amount" column are formatted as numbers:</h5>
  Before uploading a .csv file into the converter one should note that occasionally Microsoft Excel saves columns of numbers as a column of strings. This will lead to the converter adding brackets around a negative number rather than putting a negative sign in front. A simple easy solution to this is enter the number 1 in a separate box -> Copy it -> Select the column you wish to turn into Numbers -> Go to Home/Clipboard/Paste/Paste Special -> Then select “Multiply” and hit enter. Excel will now consider this column as Numbers.</br></br>
<h5>  3. Verify you have a ResortID column as the last column of your .csv file. </h5>Enter the word "ResortID" into the first row of that column and then enter your ResortID number for every data filled row.
</div>
</div>

</body>
