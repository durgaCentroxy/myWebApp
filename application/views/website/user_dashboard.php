<?php include 'include/header.php'; ?>
    <div id="page-content-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <a href="#menu-toggle" id="menu-toggle">welcome <?php echo $this->session->userdata('username'); ?></a>
                    <?php if($this->session->userdata('id')):?>
                    <a href="<?php base_url('posts/logout');?>" class="btn btn-danger float-right">Logout</a>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
    <div id="wrapper">
        <!-- Sidebar -->
        <div id="sidebar-wrapper">
            <ul class="sidebar-nav">
            <li>
                    <a href="#"><i class="fa fa-home" style="margin-right: 10px;"></i>Home</a>
                </li>
                <li>
                    <a href="#"><i class="fa fa-user"  style="margin-right: 10px;"></i>Profile</a>
                </li>
                <li>
                    <a href="#"><i class="fa fa-shield" style="margin-right: 10px;"></i>Change Password</a>
                </li>
                <li id="nav_hide">
                    <a class="dropdown-btn" style="color: #000000;"><i class="fa fa-users" style="margin-right: 10px;"></i>User
                        <i class="fa fa-caret-down"></i>
                      </a>
                      <div class="dropdown-container">
                        <a href="#"><i class="fa fa-address-card" style="margin-right: 10px;"></i>View Users</a>
                        <a href="#"><i class="fa fa-user-plus" style="margin-right: 10px;"></i>Add User</a>
                        <a href="#"><i class="fa fa-user-circle" style="margin-right: 10px;"></i>Manage Role</a>
                      </div>
                </li>
                <li id="nav_hide">
                    <a href="#"><i class="fa fa-th-list" style="margin-right: 10px;"></i>Log</a>
                </li>
                <li id="nav_hide">
                    <a href="#"><i class="fa fa-id-card" style="margin-right: 10px;"></i>SSO Mapping</a>
                </li>
                <li id="nav_hide">
                    <a href="#"><i class="fa fa-list" style="margin-right: 10px;"></i>Login History</a>
                </li>
                <li>
                    <a href="#"><i class="fa fa-file" style="margin-right: 10px;"></i>Support Guide</a>
                </li>
            </ul>
        </div>
        <!-- /#sidebar-wrapper -->
    </div>
    
    <div class="container">
        <?php include 'include/home.php'; ?>
    </div>
    <script>
        $(document).ready(function(){
            var role = "{{ user }}";
            if(role == "user") {
                $('[id= nav_hide]').hide();
            }
        });
    </script>
<?php include 'include/footer.php'; ?>