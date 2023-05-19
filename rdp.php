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