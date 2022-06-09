<!DOCTYPE HTML>  
<html>
<head>
</head>
<body>  

<?php
// define variables and set to empty values
$name = $email = $gender = $Dateofbirth = $Degree = $Bloodgroup= "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = test_input($_POST["name"]);
  $email = test_input($_POST["email"]);
  $Dateofbirth = test_input($_POST["Dateofbirth"]);
  $Degree = test_input($_POST["Degree"]);
  $gender = test_input($_POST["gender"]);
  $Bloodgroup = test_input($_POST["Bloodgroup"]);
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>

<h2>PHP Form Validation</h2>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
  Name: <input type="text" name="name">
  <br><br>
  E-mail: <input type="text" name="email">
  <br><br>
           <tr>
            <h3>Date of Birth:</h3>    
                <td>
                    <input type="date">
                </td>
            </tr>
            <br>
    <h3>Gender:</h3> 
     <input type="radio" name="gender" value="female">Female
     <input type="radio" name="gender" value="male">Male
     <input type="radio" name="gender" value="other">Other
     <br>
       <tr>  
             <h3>DEGREE:</h3> 
                
                <td>
                    <input type="checkbox"SSC>SSC
                    <input type="checkbox"HSC>HSC
                    <input type="checkbox"Bsc>Bsc
                    <input type="checkbox"Msc>Msc
                </td>
       </tr> 
            <br>
            <tr>
                <h3>Blood Group:</h3>
                <td>
                    <select>
                        <option>Select Option</option>
                        <option>A-</option>
                        <option>A+</option>
                        <option>AB+</option>
                        <option>AB-</option>
                        <option>O+</option>
                        <option>O-</option>
                    </select>
                </td>
            </tr>
            <br>
    <input type="submit" name="submit" value="Submit"> 
  
</form>

</body>
</html>