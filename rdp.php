<?php

include "header.php";

?><?php
session_start();
date_default_timezone_set('UTC');
include "includes/config.php";
if (!isset($_SESSION['sname']) and !isset($_SESSION['spass'])) {
    header("location: ../");
    exit();
}
$usrid = mysqli_real_escape_string($dbcon, $_SESSION['sname']);
?>
html lang="en">
 
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DarkNetShop</title>
    <link rel="shortcut icon" href="layout/img/favicon.png" type="image/x-icon">
    <link rel="stylesheet" href="layout/css/bootstrap.min.css">
            <link rel="stylesheet" href="layout/css/util.css">
    <link rel="stylesheet" href="layout/css/main.css">
    <link href="https://fonts.googleapis.com/css2?family=Lato&display=swap" rel="stylesheet">
    <!-- datatables -->
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/dt/dt-1.10.24/datatables.min.css">
</head>
 
<body class="authentication-bg">
    <header>
        <nav class="navbar navbar-expand-md bg-dark navbar-dark text-white navbar-dark mb-5" style="width: 100%;">
            <div class="container-fluid">
                <a class="navbar-brand" href="https://drklt5.xyz/home.php">
                    <img src="../layout/img/_logo.png" alt="" style="width: 2rem; height:2rem;">
                </a>
                <button class="navbar-toggler mr-2 " type="button" data-toggle="collapse" data-target="#navbar-collapse" aria-controls="navbar-collapse" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon" style="width: 2rem; height:2rem;"></span>
                </button>
 
                <div class="d-block d-lg-none">
                    <div class="dropdown">
                        <a href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <img src="../layout/img/logo.png" alt="" style="width: 2rem; height:2rem;">
                        </a>
                        <div class="dropdown-menu dropdown-menu-right">
                            <a class="dropdown-item" href="deposit.php">Deposit</a>
                            <a href="profile.php" class="dropdown-item">User Profile</a>
                            <a href="https://drklt5.xyz/index.php" class="dropdown-item">Log Out</a>
                        </div>
                    </div>
                </div>
 
                <div class="collapse navbar-collapse" id="navbar-collapse">
                    <ul class="navbar-nav" style="font-size: 15px !important;">
                        <li class="nav-item ">
                            <div class="dropdown">
                                <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" aria-expanded="false" aria-haspopup="true" id="nav-dropdown-2">
                                    <font style="vertical-align: inherit;">
                                        <font style="vertical-align: inherit;">BANK DUMP</font>
                                    </font>
                                </a>
                                <div class="dropdown-menu">
                                    <a class="dropdown-item" href="visa_card.php">VISA CARD</a>
                                    <a class="dropdown-item" href="mastercard.php">MASTERCARD</a>
                                    <a class="dropdown-item" href="amex_card.php">AMEX CARD</a>
                                    <a class="dropdown-item" href="bank_ssn_dob_fullz.php">BANK SSN + DOB FULLZ</a>
                                    <a class="dropdown-item" href="bank_checks.php">BANK CHECKS</a>
                                </div>
                            </div>
                        </li>
 
                        <li class="nav-item ">
                            <div class="dropdown">
                                <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" aria-expanded="false" aria-haspopup="true" id="nav-dropdown-2">
                                    <font style="vertical-align: inherit;">
                                        <font style="vertical-align: inherit;">USA BANK (full info)</font>
                                    </font>
                                </a>
                                <div class="dropdown-menu">
                                    <a class="dropdown-item" href="huntington_usa_fullz.php">Huntington Log(Full info)</a>
                                    <a class="dropdown-item" href="chase_usa_fullz.php">Chase Log(Full info)</a>
                                    <a class="dropdown-item" href="citi_usa_fullz.php">Citi Log(Full info)</a>
                                    <a class="dropdown-item" href="pnc_usa_fullz.php">PNC Log(Full info)</a>
                                    <a class="dropdown-item" href="woodforest_usa_fullz.php">Woodforest Log(Full info)</a>
                                    <a class="dropdown-item" href="chime_usa_fullz.php">Chime Log(Full info)</a>
                                    <a class="dropdown-item" href="nfcu_usa_fullz.php">NFCU Log(Full info)</a>
                                    <a class="dropdown-item" href="bbva_usa_fullz.php">BBVA Log(Full info)</a>
                                    <a class="dropdown-item" href="bb&t_usa_fullz.php">BB&T Log(Full info)</a>
                                    <a class="dropdown-item" href="boa_usa_fullz.php">BOA Log(Full info)</a>
                                    <a class="dropdown-item" href="suntrust_usa_fullz.php">Suntrust Log(Ful</a>
                                </div>
                            </div>
                        </li>
 
                        <li class="nav-item ">
                            <div class="dropdown">
                                <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" aria-expanded="false" aria-haspopup="true" id="nav-dropdown-2">
                                    <font style="vertical-align: inherit;">
                                        <font style="vertical-align: inherit;">CANADA BANK (full info)</font>
                                    </font>
                                </a>
                                <div class="dropdown-menu">
                                    <a class="dropdown-item" href="scotia_canada_fullz.php">Scotia Bank Log(Full info)</a>
                                    <a class="dropdown-item" href="rbc_canada_fullz.php">RBC Log(Full info)</a>
                                    <a class="dropdown-item" href="td_canada_fullz.php">TD Bank Canada(Full info)</a>
                                </div>
                            </div>
                        </li>
 
                        <li class="nav-item ">
                            <div class="dropdown">
                                <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" aria-expanded="false" aria-haspopup="true" id="nav-dropdown-2">
                                    <font style="vertical-align: inherit;">
                                        <font style="vertical-align: inherit;">UK BANK (full info)</font>
                                    </font>
                                </a>
                                <div class="dropdown-menu">
                                    <a class="dropdown-item" href="llyod_uk_fullz.php">Llyod Bank Log(Full info)</a>
                                    <a class="dropdown-item" href="barclays_uk_fullz.php">Barclays Bank Log(Full info)</a>
                                    <a class="dropdown-item" href="hscb_uk_fullz.php">HSBC Bank(Full info)</a>
                                </div>
                            </div>
                        </li>
 
                        <li class="nav-item ">
                            <div class="dropdown">
                                <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" aria-expanded="false" aria-haspopup="true" id="nav-dropdown-2">
                                    <font style="vertical-align: inherit;">
                                        <font style="vertical-align: inherit;">SHOPWITHSCRIP</font>
                                    </font>
                                </a>
                                <div class="dropdown-menu">
                                    <a class="dropdown-item" href="shopwithscript_script.php">ShopWithScrip Log (USA)</a>
                                    <a class="dropdown-item" href="otherAccount.php">Other Account</a>
                                    <a class="dropdown-item" href="enrollment_code.php">Enrollment code</a>
                                </div>
                            </div>
                        </li>
 
                        <li class="nav-item">
                            <div class="dropdown">
                                <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" aria-expanded="false" aria-haspopup="true" id="nav-dropdown-2">
                                    <font style="vertical-align: inherit;">
                                        <font style="vertical-align: inherit;">OTHER TOOLS</font>
                                    </font>
                                </a>
                                <div class="dropdown-menu">
                                    <a class="dropdown-item" href="spamming_tools.php">Spamming Tools</a>
                                    <a class="dropdown-item" href="hosting_tools.php">Hosting Tools</a>
                                    <a class="dropdown-item" href="cracking_tools.php">Cracking Tools</a>
                                    <a class="dropdown-item" href="hacking_tools.php">Hacking Tools</a>
                                    <a class="dropdown-item" href="snipping_tools.php">FREE GIVE AWAY (Tools & Account)</a>
                                </div>
                            </div>
 
                        </li>
 
                        <li class="nav-item">
                            <a class="nav-link" href="ticket.php">Ticket</a>
                        </li>
 
                        <li class="nav-item">
                            <a href="purchased.php" class="nav-link">Purchased</a>
                        </li>
 
                        <li class="nav-item">
                            <div class="dropdown mx-lg-2">
                                <button class="btn btn-danger btn-block dropdown-toggle" type="button" id="newContentButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Balance $0 </button>
                                <div class="dropdown-menu">
                                    <a class="dropdown-item" href="deposit.php">Deposit</a>
                                    <a class="dropdown-item" href="deposit_history.php">History</a>
                                </div>
                            </div>
                        </li>
 
                        <li class="nav-item">
                            <div class="d-none d-lg-block">
                                <div class="dropdown">
                                    <a href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <img src="../layout/img/logo.png" alt="" style="width: 2rem; height:2rem;">
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-right">
                                        <a class="dropdown-item" href="deposit.php">Deposit</a>
                                        <a href="profile.php" class="dropdown-item">User Profile</a>
                                        <a href="https://drklt5.xyz/index.php" class="dropdown-item">Log Out</a>
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
    <!--Main-->
    <div class="container-md my-4">
        <div class="mt-5">
            <div class="card-head">
                <h4 class="h4">Barclays Bank Log(full info)</h4>
            </div>
        </div>
        <div class="bg-white pt-4">
            <form action="barclays_uk_fullz.php" method="post" class="mx-4 pb-2">
                <div class="table-responsive">
                    <table id="myTable" class="table mt-4" style="color:#6c757d;">
                        <thead>
                            <tr>
                                <th>id</th>
                                <th>country</th>
                                <th>website</th>
                                <th>Price</th>
                               <th>Balance</th>
                                <th>Title</th>
                                <th>Info</th>
                                <th>Price</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                        </tbody>
                    </table>
                </div>
            </form>
        </div>
    </div>
    <!--Main end-->
 
    <!--footer-->
    <footer class="mt-4">
        <p class="h6 text-center text-white-50">All Rights Reserved © Drklt5 2021.</p>
    </footer>
    <!--footer end-->
 
    </div>
 
    <script src="layout/js/bootstrap.mom.js"></script>
    <!-- Datatables js Script -->
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script>
    <script src="layout/js/main.js"></script>
 
 
</body>
 
</html>