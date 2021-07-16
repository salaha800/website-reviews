<!DOCTYPE html>
<html>
<body>
<?php
require_once('config.php');

?>

<table border="1" align="center">
<tr>
  <td>Reviewer Name</td>
  <td>Stars</td>
  <td>Details</td>
</tr>

<?php
require_once('config.php');
$query = mysqli_query($dbconnect, "SELECT * FROM user_review")
   or die (mysqli_error($dbconnect));

while ($row = mysqli_fetch_array($query)) {
  echo
   "<tr>
    <td>{$row['reviewer_name']}</td>
    <td>{$row['star_rating']}</td>
    <td>{$row['details']}</td>
   </tr>\n";

}

?>
</table>
</body>
</html>