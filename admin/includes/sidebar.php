<div class="cbp-spmenu cbp-spmenu-vertical cbp-spmenu-left" id="cbp-spmenu-s1">
    <!--left-fixed -navigation-->
    <aside class="sidebar-left">
        <nav class="navbar navbar-inverse">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".collapse" aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <h1><a class="navbar-brand" href="#"><span class="fa fa-area-chart"></span> Ticket<span class="dashboard_text">Procurement System</span></a></h1>
            </div>
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="sidebar-menu">
                    <li class="header">MAIN NAVIGATION</li>

                    <?php
                    if ($role == "admin") {
                        ?>
                        <li class="treeview">
                            <a href="Home">
                                <i class="fa fa-dashboard"></i> <span>Home</span>
                            </a>
                        </li>
                        <li class="treeview">
                            <a href="addmanagegames">
                                <i class="fa fa-book"></i> <span> Add | Manage Games</span>
                            </a>
                        </li>
                        <li class="treeview">
                            <a href="addmanageevents">
                                <i class="fa fa-book"></i> <span> Add | Manage Event</span>
                            </a>
                        </li>
                        
                       
                        
                        <li class="treeview">
                            <a href="viewmanageticket">
                                <i class="fa fa-book"></i> <span> View | Manage Ticket</span>
                            </a>
                        </li>
                                                

                        <li class="treeview">
                            <a href="addmanagefeedback">
                                <i class="fa fa-book"></i> <span> Add | Manage Feedback</span>
                            </a>
                        </li>

                       

                        <?php
                    }
                    ?>

                    <li class="treeview">
                        <a href="changepass">
                            <i class="fa fa-lock"></i> <span>Change Password</span>
                        </a>
                    </li>
                    <li class="treeview">
                        <a href="logout">
                            <i class="fa fa-windows "></i> <span>Logout</span>
                        </a>
                    </li>



                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </nav>
    </aside>
</div>