<html>
<head>
    <title>Patient Details</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" 
    integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>


<body>
    

<?php
include("func.php");
if(isset($_POST['patient_search_submit']))
{
    $contact=$_POST['search'];
    $query="select * from doctorapp where contact='$contact'";
    $result=mysqli_query($con,$query);
    echo "<div class='container-fluid'>
    <div class'card'>
    <div class='card-body'>
    <a href='patient_details.php' class='btn btn-light'>Go Back</a>
    </div>
    <img src='images/3.jpg' class='card-img-top'>
    <div class='card-body' style='background-color:#16a085;color:#ffffff;' >
    <table class='table table-hover'>
      <thead>
        <tr>
          <th>First Name</th>
          <th>Last Name</th>
          <th>Email</th>
          <th>Contact Details</th>
          <th>Doctor Appointment</th>
        </tr>
      </thead>
      <tbody>";
    while($row=mysqli_fetch_array($result)){
        $fname=$row['fname'];
        $lname=$row['lname'];
        $email=$row['email'];
        $contact=$row['contact'];
        $docapp=$row['docapp'];

        echo" <tr>
       
        <td>$fname</td>
        <td>$lname</td>
        <td>$email</td>
        <td>$contact</td>
        <td>$docapp</td>
      </tr>";
    }
    echo"</tbody></table></div></div></div>";
}
?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" 
integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script> 
</body>
</html>

