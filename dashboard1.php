
<!doctype html>
<html lang="en">
<head>

    <link rel="stylesheet" href="dadhbaord.css">

</head>
<body>
<h1 id="h1">AK restaurant</h1>
<h2 id="h22">Survey Data:</h2>



<?php

$food = $_POST['food_rate'];//Data to insert the table
$menu = $_POST['menu_rate'];
$service = $_POST['service_rate'];
$atmosphere = $_POST['atmosphere_rate'];
$remarks = $_POST['remarks'];
$firstname = $_POST['first_name'];
$lastname = $_POST['last_name'];
$date = $_POST['transcation_date'];
$email = $_POST['email'];
$phonenum = $_POST['phone'];


// INFO FOR CONNECTING TO THE DATABASE
$dbhost="localhost";
$dbuser="root";
$dbpass="";
$dbname="resturantrating";
$tablename1="usersinfo";
$tablename2="ratinginfo";

// CONNECTING TO THE DATABASE
$connection = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
$mysqli = new mysqli($dbhost, $dbuser, $dbpass, $dbname);




$sql1 = "INSERT INTO $tablename1 (first_name,last_name,email,phone) VALUES (
        '{$connection-> real_escape_string($firstname)}', 
        '{$connection-> real_escape_string($lastname)}', 
        '{$connection-> real_escape_string($email)}',
        '{$connection-> real_escape_string($phonenum)}')";
$insert1 = $connection->query($sql1);


if ($insert1 == TRUE) {

  //  echo </h3>";
} else {
    die("Error: {$connection->errno} : {$connection->error}");
}
$user_id = mysqli_insert_id($connection);
// CONNECTING TO THE DATABASE
$connection1 = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);

if ($_POST['food_rate'] == "Very Good") {
    $food = 5;
}
if ($_POST['menu_rate'] == "Very Good") {
    $menu = 5;
}
if ($_POST['service_rate'] == "Very Good") {
    $service = 5;
}
if ($_POST['atmosphere_rate'] == "Very Good") {
    $atmosphere = 5;
} else if ($_POST['food_rate'] == "Good") {
    $food = 4;
}
if ($_POST['menu_rate'] == "Good") {
    $menu = 4;
}
if ($_POST['service_rate'] == "Good") {
    $service = 4;
}
if ($_POST['atmosphere_rate'] == "Good") {
    $atmosphere = 4;
} else if ($_POST['food_rate'] == "okay") {
    $food = 3;
}
if ($_POST['menu_rate'] == "okay") {
    $menu = 3;
}
if ($_POST['service_rate'] == "okay") {
    $service = 3;
}
if ($_POST['atmosphere_rate'] == "okay") {
    $atmosphere = 3;
} else if ($_POST['food_rate'] == "Bad") {
    $food = 2;
}
if ($_POST['menu_rate'] == "Bad") {
    $menu = 2;
}
if ($_POST['service_rate'] == "Bad") {
    $service = 2;
}
if ($_POST['atmosphere_rate'] == "Bad") {
    $atmosphere = 2;
} else if ($_POST['food_rate'] == "Very Bad") {
    $food = 1;
}
if ($_POST['menu_rate'] == "Very Bad") {
    $menu = 1;
}
if ($_POST['service_rate'] == "Very Bad") {
    $service = 1;
}
if ($_POST['atmosphere_rate'] == "Very Bad") {
    $atmosphere = 1;
}


// INSERT VALUES INTO $tablename1 aka "usersinfo"
$sql2 = "INSERT INTO $tablename2 (user_ID,food_rate,menu_rate,service_rate,atmosphere_rate,transcation_date,remarks,status)VALUES(
           '{$connection1-> real_escape_string($user_id)}',                                                                                          
        '{$connection1-> real_escape_string($food)}', 
        '{$connection1-> real_escape_string($menu)}', 
        '{$connection1-> real_escape_string($service)}',
          '{$connection1-> real_escape_string($atmosphere)}',
              '{$connection1-> real_escape_string($date)}',                                                                                                      
                                                                                                                   
          '{$connection1-> real_escape_string($remarks)}',  
           '{$connection1-> real_escape_string(1)}')";

$insert2 = $connection1->query($sql2);


if ($insert2 == TRUE) {


} else {
    die("Error: {$connection1->errno} : {$connection1->error}");
}
$connection3 = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
$sql3 = "SELECT * FROM $tablename1";


$insert3 = $connection3->query($sql3);
if ($insert3 == TRUE) {

    if ($result = mysqli_query($connection3, $sql3)) {
        $rowcount = mysqli_num_rows($result);
       // echo "The total number of users are: " . $rowcount;


    }
} else {
    die("Error: {$connection3->errno} : {$connection3->error}");
}
// INSERT VALUES INTO $tablename1 aka "usersinfo"

$sqlStats = "SELECT * FROM $tablename2";
$userCounter = 0;
$foodRateTotal = 0;
$MenuRateTotal=0;
$serviceRateTotal=0;
$atmosphereRateTotal=0;

if ($result2 = $mysqli -> query($sqlStats)) {
    while ($row = $result2 -> fetch_row()) {
        //printf ("%s %s %s %s %s %s %s %s\n", $row[0], $row[2], $row[3], $row[4], $row[5], $row[6], $row[7], $row[8]);
        $userCounter += 1;
        $foodRateTotal += $row[2];
        $MenuRateTotal+=$row[3];
        $serviceRateTotal+=$row[4];
        $atmosphereRateTotal+=$row[5];


    }

    $result2 -> free_result();


}
$foodaverage = $foodRateTotal/$userCounter;
$menuaverage=$MenuRateTotal/$userCounter;
$serviceaverage=$serviceRateTotal/$userCounter;
$atmosphereaverage=$atmosphereRateTotal/$userCounter;


echo "<table border='5' class='center'>


<tr>

<th>Number of users</th>

<th>Average of food-rate</th>

<th>Average of menu-rate</th>

<th>Average of service-rate</th>

<th>Average of atmosphere-rate</th>

</tr>
<tr>
<td>$userCounter</td>
<td>$foodaverage</td>
<td>$menuaverage</td>
<td>$serviceaverage</td>
<td>$atmosphereaverage</td>
";
echo"</table>";




$connection->close();
?>
</body>
</html>








