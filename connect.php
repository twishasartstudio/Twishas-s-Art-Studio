<?php
$username = $_POST['username'];
$contanctno = $_POST['contanctno'];
$emailid = $_POST['emailid'];
$conn = mysqli_connect("localhost", "root", "", "twishas_art_studio");

$query = "INSERT INTO getupdates (username,contanctno,emailid) VALUES('$username', '$contanctno', '$emailid')";
$data = mysqli_query($conn,$query);
if($data)
{
    echo "successful";
}
else {
    echo"unsuccessful";
}
mysqli_close($conn);
?>