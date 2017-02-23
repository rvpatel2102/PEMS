<?php /* Template Name: Manager Template */ ?>
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        
        <link rel="stylesheet" type="text/css" href="pems.css">
        <link href="https://fonts.googleapis.com/css?family=Ubuntu:700" rel="stylesheet">
        
        <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.4.8/angular.min.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.4.8/angular-route.js"></script>
        
        <title></title>
    </head>
    <body ng-app="PEMSapp">
        <header>
            <span class="pemscolor">pems</span>online.com
        </header>
        <nav>
            <ul>
                <li><a>Home</a></li>
                <li class="dropdown">
                    <a class="dropbtn">Front Desk</a>
                    <div class="dropdown-content">
                        <a href="dutiestemplate.php">Overview</a>
                        <a href="http://www.pemsonline.com/shift-log/">Shift Log</a>
                        <a href="http://www.pemsonline.com/shift-log/">Manage Duties</a>
                    </div>
                </li>
                                
                <li class="dropdown">
                    <a class="dropbtn">Call Around</a>
                    <div class="dropdown-content">
                        <a href="http://www.pemsonline.com/call-around/">View</a>
                        <a href="http://www.pemsonline.com/shift-log/">Manage</a>
                    </div>
                </li>
                
                <li class="dropdown">
                    <a class="dropbtn">Manage Employees</a>
                    <div class="dropdown-content" style="width: 215px;">
                        <a href="Employee/views/EmployeeDetailsTemplate.php">Active Employee</a>
                        <a href="http://www.pemsonline.com/shift-log/">Inactive Employees</a>
                        <a href="http://www.pemsonline.com/scheduling/">Scheduling</a>
                    </div>
                </li>
                
                <li><a href="http://www.pemsonline.com/complaint-log/">Complaint Log</a></li>                
                <li><a href="http://www.pemsonline.com/inventory-control/">Inventory Control</a></li>
                <li><a href="http://www.pemsonline.com/deposit-log/">Deposit Log</a></li>
                <li><a href="http://www.pemsonline.com/reports/">Reports</a></li>
                <li style="float: right;"><div style="margin: .75em; font-size: 12px; text-decoration: underline ">Change Password</div></li>
            </ul>
        </nav>
        <?php
        session_start();
        echo "Manager  ";
        $pid=$_SESSION["PID"];
        echo $pid;
        ?>
        
        <!--<script src="pems.js"></script>-->
    </body>
</html>
