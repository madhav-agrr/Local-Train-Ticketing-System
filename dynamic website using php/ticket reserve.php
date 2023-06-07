<?php
session_start();
if($_SESSION['auth']!='true'){
	header('location:login.php');
}
?>
<html>
<head>
    <title>e-TICKET - Train Ticket Booking</title>
    <style>
        .header {
            background-color: #333;
            color: white;
            padding: 10px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            box-shadow: 0 0 5px rgba(0, 0, 0, 0.2);
        }

        .logo {
            display: flex;
            align-items: center;
        }

        .logo img {
            height: 40px;
            width: 40px;
            margin-right: 20px;
            margin-left: 10px;
        }

        .nav {
            display: flex;
            margin-right: 5px;
            align-items: center;
        }

        .nav a {
            color: white;
            text-decoration: none;
            padding: 5px 10px;
            border-radius: 4px;
            transition: background-color 0.3s;
        }

        .nav a:hover {
            background-color: #555;
        }
        
        .user-profile {
            display: flex;
            align-items: center;
            position: relative;
        }

        .user-profile img {
            height: 40px;
            width: 40px;
            border-radius: 50%;
            margin-right: 10px;
        }
        
        .dropdown {
            position: relative;
            display: inline-block;
        }

        .dropdown-content {
            display: none;
            position: absolute;
            background-color: #333;
            min-width: 160px;
            box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2);
            z-index: 1;
            right: 0;
        }

        .dropdown:hover .dropdown-content {
            display: block;
        }

        .dropdown-content a {
            color: white;
            padding: 12px 16px;
            text-decoration: none;
            display: block;
            border-radius: 4px;
            transition: background-color 0.3s;
        }

        .dropdown-content a:hover {
            background-color: #555;
        }
				
        html {
            margin-top: 0;
            padding: 0;
        }

        body {
            font-family: Helvetica, Times New Roman;
            font-weight: bold;
            margin: 0;
            padding: 0;
        }

        .container {
            max-width: 400px;
            margin: 0 auto;
            padding: 20px;
        }

        input[type="date"]::-webkit-calendar-picker-indicator {
            padding: 4px;
            border-radius: 4px;
            cursor: pointer;
			filter: invert(0.1%);
        }

        img {
            display: block;
            margin: 0 auto;
            margin-bottom: 0;
        }

        h1 {
            text-align: center;
            color: #333;
            margin-bottom: 20px;
            margin-top: 0;
        }

        form {
            background-color: #f4f4f4;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-shadow: 0px 0px 5px rgba(0, 0, 0, 0.2);
        }

        .form-group {
            margin-bottom: 15px;
        }

        label {
            color: #333;
        }

        input[type="text"],
        input[type="number"],
        select,
        input[type="date"] {
            padding: 10px;
            margin: 10px;
            width: 100%;
            border: none;
            border-radius: 4px;
            border: 1px solid #ccc;
            box-sizing: border-box;
        }
		 input[type="radio"] {
		 margin-left: 20px;
		 }

        td,
        tr {
            padding: 8px;
            text-align: center;
			font-family: Helvetica, Times New Roman;
            font-weight: bold;
        }

        input[type="submit"] {
            background-color: #222;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            width: 100%;
            transition: background-color 0.3s;
        }

        input[type="submit"]:hover {
            background-color: #000;
        }

        .signin-link {
            text-align: center;
            margin-top: 10px;
        }
    </style>
</head>
<body>
    <div class="header">
        <div class="logo">
            <img src="http://localhost/website/logo.jpg" alt="Train Logo">
            <span><i>e-TICKET</i></span>
        </div>
        <nav class="nav">
            <a href="Contact us.php">Contact Us</a>
            <div class="user-profile dropdown">
                <img src="http://localhost/website/travel.png" alt="Profile Photo">
                <div class="dropdown-content">
                    <a href="logout.php">Sign Out</a>
                    <a href="myprofile.php">My Account</a>
                </div>
            </div>
        </nav>
    </div>
    <div class="container">
        <h1>Reserve Your Ticket</h1>
        <form>
             <input type="radio" class="radio" name="r">
             <label class="text-white">One Way</label>
             <input type="radio" class="radio" name="r">
             <label class="text-white">Round-trip</label>
			 <table>
                <tr>
                    <td><input type="text" placeholder="From:"></td>
                    <td><input type="text" placeholder="To:"></td>
                </tr>
                <tr>
                    <td><label>Departure</label>
                    <input type="date"></td>
                    <td><label>Return</label>
                    <input type="date"></td>
                </tr>
                <tr>
                    <td><label>Total No. Of Passengers:</label></td>
                    <td><input type="number" placeholder="Total Passengers"></td>
                </tr>
                <tr>
                    <td>
                        <label>Travel Class:</label>
                    </td>
                    <td>
                        <select>
                            <option></option>
                            <option>First Class - 1A</option>
                            <option>AC 2tier - 2A</option>
                            <option>AC 3tier - 3A</option>
                            <option>Executive class chair car</option>
                            <option>AC Chair Car</option>
                            <option>Sleeper Class</option>
                            <option>Second Class</option>
                            <option>General</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td colspan="2" align="center">
                        <input type="submit" value="Check Availability">
                    </td>
                </tr>
            </table>
        </form>
    </div>
</html>
