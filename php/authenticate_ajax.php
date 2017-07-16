<?php
$q = strval($_GET['q']);

$con = mysqli_connect('localhost','root','','elevator');
if (!$con) {
    die('Could not connect: ' . mysqli_error($con));
}

$sql="SELECT * FROM memberInfo WHERE username = '".$q."'";

//$sql="SELECT * FROM memberInfo WHERE username='admin'";
$result = mysqli_query($con,$sql);

echo "<table>
<tr>
<th>username</th>
<th>password</th>
<th>email</th>
<th>bio</th>
</tr>";
while($row = mysqli_fetch_array($result)) {
    echo "<tr>";
    echo "<td>" . $row['username'] . "</td>";
    echo "<td>" . $row['password'] . "</td>";
    echo "<td>" . $row['email'] . "</td>";
    echo "<td>" . $row['bio'] . "</td>";
    echo "</tr>";
}
echo "</table>";
mysqli_close($con);
?>
