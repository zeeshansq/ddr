<?php include "header.php"?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <?php include "status.php"?>
    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">

                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Driver Duty Roaster</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <table id="example1"
                                class="table table-bordered table-striped text-sm datatables-responsive">

                                <thead>
                                    <tr>
                                        <th>EID</th>
                                        <th>NAME</th>
                                        <th>POSITION</th>
                                        <th>OFFICE</th>
                                        <th>AGE</th>
                                        <th>START_DATE</th>
                                        <th>SALARY</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                        $sql = "SELECT * FROM EMP";
                        $rs = $conn->query($sql);
                        $fun_call = "";
                        while($row = $rs->fetch_assoc()){
                            if($row['EID']==1){
                                $fun_call ="ondblclick='playSound(".$row['EID'].")'";
                            }
                            else{
                                $fun_call ="ondblclick='showModal(".$row['EID'].")'";
                            }
                            if($row['STATUS']==0){
                                ?>
                                    <script type="text/javascript">
                                    jQuery(document).ready(function($) {
                                        playSound(<?=$row['EID']?>);
                                    });
                                    </script>';
                                    <?php }?>
                                    <tr <?=$fun_call?>>
                                        <td align=" center"><?=$row['EID']?></td>
                                        <td><?=$row['NAME']?></td>
                                        <td><?=$row['POSITION']?></td>
                                        <td><?=$row['OFFICE']?></td>
                                        <td align="center"><?=$row['AGE']?></td>
                                        <td><?=$row['START_DATE']?></td>
                                        <td><?=$row['SALARY']?></td>
                                    </tr>
                                    <?php
                                            $sql_udate = "UPDATE EMP SET STATUS=1 WHERE EID=".$row['EID'];
                                            $conn->query($sql_udate);
                                         } ?>
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <th>EID</th>
                                        <th>Name</th>
                                        <th>Position</th>
                                        <th>Office</th>
                                        <th>Age</th>
                                        <th>Start date</th>
                                        <th>Salary</th>
                                    </tr>
                                </tfoot>
                            </table>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
</div>
<?php include "footer.php"; ?>
</div>
<!-- ./wrapper -->
<script src="zeescript.js"></script>