<?php
    ob_start();
    session_start();
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>*Company Name* Network Status</title>

    <!-- Bootstrap CSS CDN -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
    <!-- Our Custom CSS -->
    <link rel="stylesheet" href="style.css">

    <!-- Font Awesome JS -->
    <script defer src="https://use.fontawesome.com/releases/v5.15.4/js/all.js" integrity="sha384-rOA1PnstxnOBLzCLMcre8ybwbTmemjzdNlILg8O7z1lUkLXozs4DHonlDtnE7fpc" crossorigin="anonymous"></script>

    <!-- Chart.js -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.7.0/chart.min.js" integrity="sha512-TW5s0IT/IppJtu76UbysrBH9Hy/5X41OTAbQuffZFU6lQ1rdcLHzpU5BzVvr/YFykoiMYZVWlr/PX1mDcfM9Qg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    

</head>

<body>

    <div class="wrapper">
        <!-- Sidebar  -->
        <nav id="sidebar">
            <div class="sidebar-header">
                <h3>SANITAS</h3>
                <strong>
                    <i class="fas fa-heartbeat"></i>
                </strong>
            </div>

            <ul class="list-unstyled components" >
                <li class="active">
                    <a href="index.php">
                        <i class="fas fa-home"></i>
                        Dashboard
                    </a>
                </li>

                <li >
                    <a href="Map.php">
                        <i class="fas fa-map-marked-alt"></i>
                        Map
                    </a>
                </li>

                <li >
                    <a href="#statsSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                        <i class="fas fa-info-circle"></i>
                        Stats
                    </a>
                    <ul class="collapse list-unstyled" id="statsSubmenu">
                        <li >
                            <a href="Traffic.php">Traffic</a>
                        </li>
                        <li >
                            <a href="Devices.php">Devices</a>
                        </li>
                        <li >
                            <a href="Network Structure.php">Network Structure</a>
                        </li>
                    </ul>
                </li>

                <li >
                    <a href="Log.php">
                        <i class="fas fa-history"></i>
                        Logs
                    </a>
                </li>

                <li >
                    <a href="Alerts.php">
                        <i class="fas fa-exclamation-triangle"></i>
                        Alerts
                    </a>
                </li>
            </ul>

        </nav>
        
        <!-- Page Content  -->
        <div id="content">

            <?php include 'Navbar.php'; ?>
            
            <h2>Threat Analysis</h2>

            <div class="line"></div>

            <div class="row">
                <?php include 'ThreatCards.php'; ?>
            </div>

            <div class="line"></div>

            <h2>Lorem Ipsum Dolor</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>

            <div class="line"></div>

        </div>
    </div>

    <!-- jQuery CDN - Slim version (=without AJAX) -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <!-- Popper.JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
    <!-- Bootstrap JS -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
    
    <script type="text/javascript" src="Java.js"></script>
    <script type="text/javascript" src="Jquery.js"></script>
    
</body>

</html>