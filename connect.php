<?php
// Database connection parameters
$servername = "localhost"; // Change this to your database server name
$username = "root"; // Change this to your database username
$password = ""; // Change this to your database password
$dbname = "admission"; // Change this to your database name

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get form data
//student
$name = $_POST['name'];
$date = $_POST['date'];
$gender = $_POST['gen'];
$nationality = $_POST['nationality'];
$place = $_POST['place'];
$Religion = $_POST['reli'];
$Address = $_POST['Address'];
$City = $_POST['city'];
$Province = $_POST['Province'];
$Postal = $_POST['Postal'];
$Number = $_POST['Number'];
$Email = $_POST['Email'];
$Grade = $_POST['Grade'];
$Admission = $_POST['Admission'];

//parent
$Pname = $_POST['pname'];
$Relation = $_POST['relation'];
$mobile = $_POST['mobile'];
$mail = $_POST['mail'];

//school
$Sname = $_POST['Sname'];
$Saddress = $_POST['Saddress'];
$Scity = $_POST['Scity'];
$reason = $_POST['reason'];


// Insert data into the database
$sql1 = "INSERT INTO student (Fname,dob,gender,Nationality,Place_of_Birth,Religion,Address,city,Province,Postal,Phone_Number,Email,Current_Grade,Class_Admi) VALUES 
                            ('$name','$date','$gender','$nationality','$place','$Religion','$Address','$City','$Province','$Postal','$Number','$Email','$Grade','$Admission' )";

$result1 = $conn->query($sql1);                            

$sql2 = "INSERT INTO parent (Pname,rela_to_parent,mobile,Email) VALUES
                            ('$Pname','$Relation','$mobile','$mail')";

$result2 = $conn->query($sql2);                            

$sql3 = "INSERT INTO school_info (Sname,address,city,reason) values
                                 ('$Sname','$Saddress','$Scity','$reason')";

$result3 = $conn->query($sql3);                                 

if ($result1 && $result2 && $result3) {
    // Close the database connection
    
    
    $conn->close();

    // Redirect user to the display page after successful submission
    header("Location: display_data.php?signup=success");
    exit();
} else {
    echo "Error: " . $sql1 . "<br>" . $conn->error;
    echo "Error: " . $sql2 . "<br>" . $conn->error;
    echo "Error: " . $sql3 . "<br>" . $conn->error;
}

$conn->close();
?>
