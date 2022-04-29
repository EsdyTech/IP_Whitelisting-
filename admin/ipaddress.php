<?php include('includes/session.php');?>
<?php include('ipaddress_action.php');?>

<!DOCTYPE html>
<html lang="en">
<?php include('head.php');?>
    <script type="text/javascript">
            //Only allows Numbers
            function isNumber(evt) {
                evt = (evt) ? evt : window.event;
                var charCode = (evt.which) ? evt.which : evt.keyCode;
                if (charCode > 31 && (charCode < 48 || charCode > 57)) {
                    return false;
                }
                return true;
            }
        </script>

<script type="text/javascript">
  function ValidateIPaddress() {  
      var ipaddress = document.getElementById('ipaddress').value;
  if (/^(25[0-5]|2[0-4][0-9]|[01]?[0-9][0-9]?)\.(25[0-5]|2[0-4][0-9]|[01]?[0-9][0-9]?)\.(25[0-5]|2[0-4][0-9]|[01]?[0-9][0-9]?)\.(25[0-5]|2[0-4][0-9]|[01]?[0-9][0-9]?)$/.test(ipaddress)) {  
    return (true)  
  }  
  alert("You have entered an invalid IP address!")  
  return (false)  
}      
        
</script>
    <body class="sb-nav-fixed">
    <?php include('navbar.php');?>
        <div id="layoutSidenav">
            <div id="layoutSidenav_nav">
            <?php include('sidebar.php');?>    
            </div>
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">Dashboard</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active">Use this form to add IP Addresses you wish to whitelist!</li>
                        </ol>
                        <div class="row">
                        <div class="col-lg-12 mb-4">
                        <div class="card">
                            <div class="card-body">
                            <?php if(isset($message)){echo $message;}?>
                                <h4 class="card-title">IP Address</h4>
                                <div class="basic-form">
                                    <form method="post">
                                    <div class="col-lg-6  mb-4">
                                        <input type="text" name="ipaddress" id="ipaddress" required class="form-control" placeholder="Enter the IP Address">
                                    </div>
                                    <div class="col-lg-6  mb-4">
                                    <input type="hidden" name="action" id="action" value="Add" />
                                    <input class="btn btn-primary" type="submit" name="action" id="action" onclick="return ValidateIPaddress()" value="Add" />
                                    </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                        </div>
                       
                        <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-table me-1"></i>
                                IP ADDRESS LIST
                            </div>
                            <div class="card-body">
                                <table id="datatablesSimple">
                                    <thead>
                                        <tr>
                                            <th>S/N</th>
                                            <th>IP Address</th>
                                            <th>Allowed Access</th>
                                            <th>Date Created</th>
                                            <th>Created By</th>
                                            <th>Access</th>
                                            <th></th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                        <th>S/N</th>
                                            <th>IP Address</th>
                                            <th>Allowed Access</th>
                                            <th>Date Created</th>
                                            <th>Created By</th>
                                            <th>Access</th>
                                            <th></th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                    <?php
                                        $cnt = 1;
                                        $que=mysqli_query($con,"SELECT  ipaddress_tbl.id,ipaddress_tbl.ipaddress,ipaddress_tbl.dateCreated,
                                        ipaddress_tbl.isAllowed,admin_tbl.firstName,admin_tbl.lastName
                                        from ipaddress_tbl
                                        INNER JOIN admin_tbl ON admin_tbl.id = ipaddress_tbl.createdBy");
                                        while ($row=mysqli_fetch_array($que)) {
                                        ?>
                                        <tr>
                                            <td><?php echo $cnt;?></td>
                                            <td><?php echo $row['ipaddress'];?></td>
                                            <td><?php echo $row['isAllowed'];?></td>
                                            <td><?php echo $row['dateCreated'];?></td>
                                            <td><?php echo $row['firstName'].' '.$row['lastName'];?></td>
                                            <td><a href="?editid=<?php echo $row['id'];?>" onclick="return confirm('Are you sure you want to change the status?');" class="btn btn-success"><i class="fa fa-check"></i></a></td>
                                            <td><a href="?delid=<?php echo $row['id'];?>" onclick="return confirm('Are you sure you want to delete this item?');" class="btn btn-danger"><i class="fa fa-trash"></i></a></td>
                                        </tr>
                                        <?php
                                            $cnt=$cnt+1;
                                        }
                                    ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </main>
                <?php include('footer.php');?>    
            </div>
        </div>
        <?php include('scripts.php');?>    
    </body>
</html>
