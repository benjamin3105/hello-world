<?php
// Get a connection for the database
require_once('../config.php');

// Create a query for the database
$query = "SELECT user_id, first_name, last_name, email FROM users";

// Get a response from the database by sending the connection
// and the query
$response = @mysqli_query($dbc, $query);

// If the query executed properly proceed
if($response){

echo '<table align="left"
cellspacing="5" cellpadding="8">

<tr><td align="left"><b>First Name</b></td>
<td align="left"><b>Last Name</b></td>
<td align="left"><b>Email</b></td></tr>';

// mysqli_fetch_array will return a row of data from the query
// until no further data is available
while($row = mysqli_fetch_array($response)){

echo '<tr><td align="left">' . 
$row['first_name'] . '</td><td align="left">' . 
$row['last_name'] . '</td><td align="left">' .
$row['email'] . '</td><td align="left">' .
'<td><a href="edit.php?id=' .$row['user_id']. '">Edit</a></td>' . 
'<td><a href="delete.php?id=' .$row['user_id']. '">Delete</a></td>';


echo '</tr>';
}

echo '</table>';

} else {

echo "Couldn't issue database query<br />";

echo mysqli_error($dbc);

}

// Close connection to the database
mysqli_close($dbc);

?>

<a href="add_user.php">Subscribe another user dit is een test die ik hier neer heb gezet.</a>