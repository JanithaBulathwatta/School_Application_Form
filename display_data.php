<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Display Data</title>
    <link rel="stylesheet" href="displaystyle.css">
</head>
<body>
    
    <?php
    // Define your database connection parameters
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "admission";

// Create a connection to the database
$conn = new mysqli($servername, $username, $password, $dbname);

// Check the connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Define your SQL query to retrieve the last row
$sql1 = "SELECT * FROM student ORDER BY stuID DESC LIMIT 1";

// Execute the SQL query
$result1 = $conn->query($sql1);

// Check if there are results
if ($result1->num_rows > 0) {
    // Fetch the data from the last row
    $row1 = $result1->fetch_assoc();
}

//parent
$sql2 = "SELECT * FROM parent ORDER BY pID DESC LIMIT 1";

$result2 = $conn->query($sql2);

if ($result2->num_rows > 0) {
    // Fetch the data from the last row
    $row2 = $result2->fetch_assoc();
}
else{
    echo "No data found in the table.";
}

//school_info
$sql3 = "SELECT * FROM school_info ORDER BY sID DESC LIMIT 1";

$result3 = $conn->query($sql3);

if ($result3->num_rows > 0) {
    // Fetch the data from the last row
    $row3 = $result3->fetch_assoc();
}
else{
    echo "No data found in the table.";
}



// Close the database connection
$conn->close();
    ?>

<div class="head">
    <table style="padding-top: 10px;">
        <tr>
        <td style="text-align: right;padding: 0;"><img src="col.png" ></td>
        <td style="text-align: left;float: left;"><h1 style="padding: 0;">Gateway International College</h1><br>
            <h5 style="text-align: center;padding: 0;">Another way to Education</h5></td>
        </tr>
        <!--<tr>
        <td colspan="2" style="text-align: center;padding: 0px;"><h3 style="padding-bottom: 5px;">Another way to Education</h3></td>
        </tr>-->
        
    </table>
</div>



  
    <form id="myform">
        <div class="color">
        <div class="back">
        <h2>Details</h2>
        <fieldset>
            
        <table>
            
            
            <tr>
                <td><h3 >Student Information</h3></td>
                <td></td>
            </tr>
            <tr>
                
                <td>Full name of student: </td>
                <td><?php echo $row1["Fname"]; ?></td>
            </tr>
            <tr>
                <td>Date of Birth: </td>
                <td><?php echo $row1["dob"]; ?></td>
            </tr>
            <tr>
                <td>Gender: </td>
                <td><?php echo $row1["gender"]; ?></td>
            </tr>
            <tr>
                <td>Nationality: </td>
                <td><?php echo $row1["Nationality"]; ?></td>
            </tr>
            <tr>
                <td>Place of Birth: </td>
                <td><?php echo $row1["Place_of_Birth"]; ?></td>
            </tr>
            <tr>
                <td>Religion: </td>
                <td><?php echo $row1["Religion"]; ?></td>
            </tr>
            <tr>
                <td>Curent Address: </td>
                <td><?php echo $row1["Address"]; ?></td>
            </tr>
            <tr>
                <td>City: </td>
                <td><?php echo $row1["City"]; ?></td>
            </tr>
            <tr>
                <td>Province: </td>
                <td><?php echo $row1["Province"]; ?></td>
            </tr>
            <tr>
                <td>Postal Code: </td>
                <td><?php echo $row1["Postal"]; ?></td>
            </tr>
            <tr>
                <td>Phone Number: </td>
                <td><?php echo $row1["Phone_Number"]; ?></td>
            </tr>
            <tr>
                <td>Email Address: </td>
                <td><?php echo $row1["Email"]; ?></td>
            </tr>
            <tr>
                <td>Current Grade: </td>
                <td><?php echo $row1["Current_Grade"]; ?></td>
            </tr>
            <tr>
                <td>Class for Admission: </td>
                <td><?php echo $row1["Class_admi"]; ?></td>
            </tr>
            
        </table>
        <br>
        
        <table>
            <tr>
                <td colspan="2"><h3 >Parent/Guardian Information</h3></td>
                
            </tr>
            <tr>
                <td>Parent/Guardian full name: </td>
                <td><?php echo $row2["Pname"]; ?></td>
            </tr>
            <tr>
                <td>Relationship to Student: </td>
                <td><?php echo $row2["rela_to_parent"]; ?></td>
            </tr>
            <tr>
                <td>Phone Number: </td>
                <td><?php echo $row2["mobile"]; ?></td>
            </tr>
            <tr>
                <td>Email Address: </td>
                <td><?php echo $row2["Email"]; ?></td>
            </tr>
        </table>
        <br>
        
        <table>
            <tr>
                <td colspan="2"><h3 >Previous School Information (if applicable)</h3></td>
                
            </tr>
            <tr>
                <td>Previous School Name: </td>
                <td><?php echo $row3["Sname"]; ?></td>
            </tr>
            <tr>
                <td>School Address: </td>
                <td><?php echo $row3["address"]; ?></td>
            </tr>
            <tr>
                <td>City: </td>
                <td><?php echo $row3["city"]; ?></td>
            </tr>
            <tr>
                <td>Reason for Transfer: </td>
                <td><?php echo $row3["reason"]; ?></td>
            </tr>
        </table>
        
        
        
        
        </fieldset>
    
    </form>
 
    

    <button id="but">PDF</button>

    

    <footer>
        <img src="facebook.png" alt="facebook">
        <img src="twitter.png" alt="facebook">
        <img src="instagram.png" alt="facebook">
        <img src="linkedin.png" alt="facebook">
        

        <h4 style="margin-left: 200px;">CONTACT US</h4>
        <h4 style="margin-left: 200px;">STAFF DERECTORY</h4>
        <h4>JOBS</h4>
        <h4>DISTRIC BOARD</h4>



        <p>&copy; 1990 Gateway International College</p>
    </footer>
</div>
</div>
<script>
        const btn = document.getElementById('but');

        btn.addEventListener('click',function(){
            print();
        })
            
    </script>
</body>
</html>
