<?php
include("connection.php");
?>
<html lang="en">
<head>
    <title>
        Package Entry
    </title>
</head>
<body>
<form method="GET" action="">
    <table border="2" bgcolor="#7fffd4" align="center">

        <tr>
            <td>Location :</td>
            <td><input type="text" name="loc" id="location" required></td>
        </tr>
        <tr>
            <td>Location Category :</td>
            <td>
                <select name="location-cat" id="loc_cat" required>
                    <option value="">SELECT</option>
                    <option value="histo">Historical</option>
                    <option value="hill">Hill Station</option>
                    <option value="offbeat">Off-beat</option>
                </select>
            </td>
        </tr>
        <tr>
            <td>Location Details :</td>
            <td><input type="text" name="location-detail" id="location-detail" required></td>
        </tr>
        <tr>
            <td>Location Language :</td>
            <td><input type="text" name="lang" id="lang" required></td>
        </tr>
        <tr>
            <td>Location Description :</td>
            <td><textarea name="location-description" id="location-description" placeholder="Location Description" required></textarea></td>
        </tr>
        <tr>
            <td>Location Map :</td>
            <td><input type="text" name="location-map" id="location-map" required></td>
        </tr>
        <tr>
            <td>Travelling Mode :</td>
            <td>
                <select name="travel" id="travel" required>
                    <option value="">SELECT</option>
                    <option value="bus">Bus</option>
                    <option value="train">Train</option>
                    <option value="flight">Flight</option>
                </select>
            </td>
        </tr>
        <tr>
            <td>Journey Travel Length :</td>
            <td><input type="text" name="journey-length" id="journey-length" required></td>
        </tr>
        <tr>
            <td>No. of Days & Night :</td>
            <td><input type="text" name="no-of-days" id="no-of-days" required></td>
        </tr>
        <tr>
            <td>Tour Description :</td>
            <td><textarea name="tour" id="tour" placeholder="Tour Description" required></textarea></td>
        </tr>

        <tr align="center">
            <td colspan="2"><input type="submit" name="SUBMIT" id="submit"></td>
        </tr>

    </table>
</form>
<?php

if (isset($_GET['SUBMIT'])) {

    $loc = $_GET['loc'];
    $location = $_GET['location-cat'];
    $location_detail = $_GET['location-detail'];
    $lang = $_GET['lang'];
    $location_desc = $_GET['location-description'];
    $location_map = $_GET['location-map'];
    $mode = $_GET['travel'];
    $journey = $_GET['journey-length'];
    $no_of_days = $_GET['no-of-days'];
    $tour_desc = $_GET['tour'];

    if ($loc != "" && $location != "" && $location_detail != "" && $lang != "" && $location_desc != "" && $location_map != "" && $mode != "" && $journey != "" && $no_of_days != "" && $tour_desc != "") {
        $query = "INSERT INTO package_details(location, category, details, language, location_description, map, travel_mode, travel_length, days, tour_description) 
                  VALUES ('$loc', '$location', '$location_detail', '$lang', '$location_desc', '$location_map', '$mode', '$journey', '$no_of_days', '$tour_desc')";
        $data = mysqli_query($conn, $query);

        if ($data) {
            echo "Package Details Added Successfully";
        } else {
            echo "Error: " . mysqli_error($conn);
        }
    } else {
        echo "All fields are required";
    }

    echo "$loc<br>";
    echo "$location<br>";
    echo "$location_detail<br>";
    echo "$lang<br>";
    echo "$location_desc<br>";
    echo "$location_map<br>";
    echo "$mode<br>";
    echo "$journey<br>";
    echo "$no_of_days<br>";
    echo "$tour_desc<br>";
}

?>
</body>
</html>
