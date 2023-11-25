<?php
include 'config/db.php';
$eid = $_POST["eid"];
$sql = "SELECT * FROM EMP WHERE EID=".$eid;
$rs = $conn->query($sql);
$row = $rs->fetch_assoc()
?>
<table class="table table-bordered table-striped text-lg datatables-responsive">
    <tr>
        <th>ID</th>
        <td><?=$row['EID']?></td>
    </tr>
    <tr>
        <th>NAME</th>
        <td><?=$row['NAME']?></td>
    </tr>
    <tr>
        <th>POSITION</th>
        <td><?=$row['POSITION']?></td>
    </tr>
    <tr>
        <th>OFFICE</th>
        <td><?=$row['OFFICE']?></td>
    </tr>
    <tr>
        <th>AGE</th>
        <td><?=$row['AGE']?></td>
    </tr>
    <tr>
        <th>START_DATE</th>
        <td><?=$row['START_DATE']?></td>
    </tr>
    <tr>
        <th>SALARY</th>
        <td><?=$row['SALARY']?></td>
    </tr>
</table>