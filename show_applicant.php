


<html>
    <title>applicant</title>
    <link rel="stylesheet" href="vvvv.css">
    <body>

<?php
$url='127.0.0.1:3306';
$username='root';
$password='';
$conn=mysqli_connect($url,$username,$password,"sdf_database");
if(!$conn){
 die('Could not Connect My Sql:' .mysql_error());
}
?>




<?php
$last_id=$_REQUEST['applicant_id'];
$result = mysqli_query($conn,"SELECT * FROM applicants WHERE id=$last_id");
?>
<!DOCTYPE html>
<html>
 <head>
 <title> Retrive data</title>
 </head>
<body>
<?php
if (mysqli_num_rows($result) > 0) {
?>
<h1>Applicant information</h1>
  <table border=1>
   
  <tr class="bb">
    <td>no</td>
    <td>First Name</td>
    <td>Last Name</td>
    <td>Gender</td>
    <td>Date of birth</td>
    <td>Highest academic level</td>
    <td>Province</td>
    <td>District</td>
    <td>Sector</td>
    <td>Cell</td>
    <td>ESmail</td>
    <td>password</td>
    <td>learning option</td>
  </tr></div>
<?php
$i=0;
while($row = mysqli_fetch_array($result)) {
?>
<tr>
<td><?php echo $row["id"]; ?></td>
    <td><?php echo $row["first_name"]; ?></td>
    <td><?php echo $row["last_name"]; ?></td>
    <td><?php echo $row["gender"]; ?></td>
    <td><?php echo $row["date_of_birth"]; ?></td>
    <td><?php echo $row["education_level"]; ?></td>
    <td><?php echo $row["province"]; ?></td>
    <td><?php echo $row["district"]; ?></td>
    <td><?php echo $row["sector"]; ?></td>
    <td><?php echo $row["cell"]; ?></td>
    <td><?php echo $row["email"]; ?></td>
    <td><?php echo $row["password"]; ?></td>
    <td><?php echo $row["course"]; ?></td>
</tr>
<?php
$i++;
}
?>
</table>
 <?php
}
else{
    echo "No result found";
}
?>
 </body>
</html>