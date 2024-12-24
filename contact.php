<html lang="en">
<head>
    <title>
        Contact Us
    </title>

</head>
<body>
<form action="" method="post">
    <table border="2" bgcolor="#7fffd4">
        <tr>
            <td>Name</td>
            <td><input type="text" name="nm" value="" PLACEHOLDER="Enter Your Name" required></td>
        </tr>
        <tr>
            <td>Email</td>
            <td><input type="text" name="em" value="" PLACEHOLDER="Enter Your Mail Id" required> </td>
        </tr>
        <tr>
            <td>Phone Number</td>
            <td><input type="text" name="pn" value="" PLACEHOLDER="Enter Your Phone Number" required> </td>
        </tr>
        <tr>
            <td>Preferred Timing</td>
            <td><select name="tm" required>
                    <option value="default" name="select">SELECT</option>
                    <option value="10-11" name="10-11">10:00 AM - 11:00 AM</option>
                    <option value="11-12" name="11-12">11:00 AM - 12:00 PM</option>
                    <option value="01-02" name="01-02">01:00 PM - 02:00 PM</option>
                    <option value="02-03" name="02-03">02:00 PM - 03:00 PM</option>

                </select></td>
        </tr>
        <tr>
            <td>Purpose</td>
            <td>
                <textarea type="text" name="pr" placeholder="Enter Your Purpose" id="pur"  required></textarea>
            </td>
        </tr>

        <tr >
            <td COLSPAN="2" align="center">
                <input type="submit" name="submit" value="SUBMIT"  >
            </td>
        </tr>


    </table>

</form>
</body>
</html>


<?php

include("connection.php");

if($_POST['submit']) {

    $name = $_POST['nm'];
    $email = $_POST['em'];
    $phone = $_POST['pn'];
    $time = $_POST['tm'];
    $message = $_POST['pr'];

    echo $name;
    echo $email;
    echo $phone;
    echo $time;
    echo $message;



    $query = "INSERT INTO contact_details  values('$name','$email','$phone','$time','$message')";
    $data = mysqli_query($conn, $query);
}

?>