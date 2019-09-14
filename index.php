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


<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- Add icon library -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
.btn {
  background-color: white;
  border: none;
  color: black;
  padding: 8px 15px;
  cursor: pointer;
  font-size: 20px;
}

/* Darker background on mouse-over */
.btn:hover {
  background-color: RoyalBlue;
}
</style>
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
  <!-- Upload Button and Modal -->
  <!--------------------------------------------------------------------------------------------->
</br>
  <h1><center><font color="white">Upload a .csv file to convert</font></center></h2>
</br>


</br></br>
<center>
<button type="button" class="btn btn-light" data-toggle="modal" data-target="#exampleModal" data-whatever="@mdo"><i class="fa fa-upload"></i> Upload </button>
</center>
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Pipe Delimited Converter</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="upload.php" method="post" enctype="multipart/form-data">
          <div class="form-group">
                <input type="file"  name="fileToUpload" id="fileToUpload">
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <input type="submit" class="btn btn-primary" value="Submit" name="submit">
          </div>
        </form>
      </div>

    </div>
  </div>
</div>

<!--------------------------------------------------------------------------------------------->
</br>

<center>
<form action="download.php" method="post">
           <button type="submit" name="submit" value="Download File" class="btn"><i class="fa fa-download"></i> Download </button>
       </form>
</center>
</br>
<center><div class="card" style="width: 18rem;">
<div class="card-header">
  1. Press "Upload" then "Choose File" from a folder on your computer"       <i class="fa fa-desktop" aria-hidden="true"></i>
</div>
<ul class="list-group list-group-flush">
  <li class="list-group-item">2. Once selected press "Open" then hit "Submit" in the modal    <i class="fa fa-check-square" aria-hidden="true"></i></li>
  <li class="list-group-item">3. Wait a few seconds for the conversion process to complete.    <i class="fa fa-clock-o" aria-hidden="true"></i></li>
  <li class="list-group-item">4. Press "Download" to get your pipe delimited version in .txt format   <i class="fa fa-download"></i></li>
</ul>
</div></center>
</body>
</html>
