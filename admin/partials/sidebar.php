<div class="sidebar" id="sidebar">
    <div class="sidebar-inner slimscroll">
        <div id="sidebar-menu" class="sidebar-menu">
            <ul>
                <li class="menu-title">
                    <span>Main</span>
                </li>
                <li>
                    <a class="active" href="index.php"><i class="la la-dashboard"></i> <span>
                            Dashboard</span></a>
                </li>
                <?php if (isAdmin()) { ?>
                    <li><a href="categories.php"><i class="la la-files-o"></i> <span> Categories </span></a></li>
                <?php } ?>
                <li><a href="projects.php"><i class="la la-rocket"></i> <span> Products</span></a></li>
                <li>
                    <a href="blogs.php"><i class="la la-file-pdf-o"></i> <span>Blogs</span></a>
                </li>
                <li>
                    <a href="clients.php"><i class="la la-users"></i> <span>Clients</span></a>
                </li>

                <?php if(isAdmin()) { ?>
                    <li class="menu-title">
                        <span>Employees</span>
                    </li>
                    <li class="submenu">
                        <a href="#"><i class="la la-user"></i> <span> Employees</span> <span class="menu-arrow"></span></a>
                        <ul style="display: none;">
                            <li><a href="employees.php">All Employees</a></li>
                            <li><a href="leaves-employee.php">Leaves Employee</a></li>
                            <li><a href="salary.php">Employee Salary</a></li>
                        </ul>
                    </li>
                    <li class="menu-title">
                        <span>Administration</span>
                    </li>
                    <li>
                        <a href="activities.php"><i class="la la-bell"></i> <span>Activities</span></a>
                    </li>
                    <li>
                        <a href="users.php"><i class="la la-user-plus"></i> <span>Users</span></a>
                    </li>
                <?php } ?>

                <li>
                    <a href="settings.php"><i class="la la-cog"></i> <span>Settings</span></a>
                </li>
                <li class="menu-title">
                    <span>Pages</span>
                </li>
                <?php if(isAdmin()) { ?>
                <li class="submenu">
                    <a href="#"><i class="la la-pie-chart"></i> <span> Reports </span> <span class="menu-arrow"></span></a>
                    <ul style="display: none;">
                        <li><a href="expense-reports.php"> Sales Report </a></li>
                        <li><a href="employee-reports.php"> Employee Report </a></li>
                        <li><a href="daily-reports.php"> Daily Report </a></li>
                    </ul>
                </li>
                <?php } ?>
                <li class="submenu">
                    <a href="#"><i class="la la-user"></i> <span> Profile </span> <span class="menu-arrow"></span></a>
                    <ul style="display: none;">
                        <li><a href="profile.php"> Employee Profile </a></li>
                        <li><a href="client-profile.php"> Client Profile </a></li>
                    </ul>
                </li>
                <li>
                    <a href="error-404.php"><i class="la la-exclamation-triangle"></i> <span> Error Pages
                        </span></a>
                </li>

            </ul>
        </div>
    </div>
</div>