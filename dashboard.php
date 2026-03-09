<?php

include("../config/db.php");

$result=mysqli_query($conn,"SELECT * FROM applicants");

?>

<h2>Recruit Applications</h2>

<table border="1">

<tr>
<th>Name</th>
<th>ID</th>
<th>County</th>
<th>Status</th>
<th>Action</th>
</tr>

<?php

while($row=mysqli_fetch_assoc($result)){

echo "

<tr>

<td>".$row['fullname']."</td>

<td>".$row['id_number']."</td>

<td>".$row['county']."</td>

<td>".$row['status']."</td>

<td>

<a href='approve.php?id=".$row['id']."'>Approve</a>

|

<a href='reject.php?id=".$row['id']."'>Reject</a>

</td>

</tr>

";

}

?>