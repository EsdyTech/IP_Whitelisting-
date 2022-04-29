<?php include('includes/session.php');?>
<?php include('changePassword_action.php');?>

<!DOCTYPE html>
<html lang="en">
<?php include('head.php');?>

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
                            <li class="breadcrumb-item active">Change Password!</li>
                        </ol>
                        <div class="row">
                        <div class="col-lg-12 mb-4">
                        <div class="card">
                            <div class="card-body">
                            <?php if(isset($message)){echo $message;}?>
                                <h4 class="card-title">Password Change</h4>
                                <div class="basic-form">
                                    <form method="post">
                                    <div class="col-lg-6  mb-4">
                                        <input type="text" name="currentPassword" id="ipaddress" required class="form-control" placeholder="Enter Current Password">
                                    </div>
                                    <div class="col-lg-6  mb-4">
                                        <input type="text" name="newPassword" id="ipaddress" required class="form-control" placeholder="Enter New Password">
                                    </div>
                                    <div class="col-lg-6  mb-4">
                                        <input type="text" name="conPassword" id="ipaddress" required class="form-control" placeholder="Confirm New Password">
                                    </div>
                                    <div class="col-lg-6  mb-4">
                                    <input type="hidden" name="action" id="action" value="updatePassword" />
                                    <input class="btn btn-primary" type="submit" name="submit" id="action" value="Update" />
                                    </div>
                                    </form>
                                </div>
                            </div>
                            
                        </div>

                        
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
