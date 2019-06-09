<!DOCTYPE html>
<html>

    <head>
        <title>recycleservices</title>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <meta name="viewport" content="width=device-width, initial-scale=1">
    </head>

        <style>
            /* Navbar container */
            .navbar {
                overflow: hidden;
                background-color: black;
                font-family: Arial;
            }

            /* Links inside the navbar */
            .navbar a {
                float: left;
                font-size: 16px;
                color: white;
                text-align: center;
                padding: 14px 16px;
                text-decoration: none;
            }

            /* The dropdown container */
            .dropdown {
                float: left;
                overflow: hidden;
            }

            /* Dropdown button */
            .dropdown .dropbtn {
                font-size: 16px; 
                border: none;
                outline: none;
                color: white;
                padding: 14px 16px;
                background-color: inherit;
                font-family: inherit; /* Important for vertical align on mobile phones */
                margin: 0; /* Important for vertical align on mobile phones */
            }

            /* Add a red background color to navbar links on hover */
            .navbar a:hover, .dropdown:hover .dropbtn {
                background-color: gray;
            }

            /* Dropdown content (hidden by default) */
            .dropdown-content {
                display: none;
                position: absolute;
                background-color: #f9f9f9;
                min-width: 160px;
                box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
                z-index: 1;
            }

            /* Links inside the dropdown */
            .dropdown-content a {
                float: none;
                color: black;
                padding: 12px 16px;
                text-decoration: none;
                display: block;
                text-align: left;
            }

            /* Add a grey background color to dropdown links on hover */
            .dropdown-content a:hover {
                background-color: #ddd;
            }

            /* Show the dropdown menu on hover */
            .dropdown:hover .dropdown-content {
                display: block;
            }

            .header {
                position: absolute;
                top: 100px;
                bottom: 0px;
                left: 20px;
                right: 0px;
                font-size: 50px;
                width: 800px;
                font-weight: 550;

            }
            .message {
                position: absolute;
                top: 200px;
                bottom: 0px;
                left: 20px;
                right: 0px;
                font-size: 30px;
                font-weight: 550;
                width: 1200px;

            } 
            .icon {
                position: absolute;
                top:   100px;
                bottom:  0px;
                left: 1080px;
                right:   0px;
                font-size: 100px;
                font-weight: 550;
                color: black; 
            }
            .icon a {
                color: white;
            } 
            .border {
                position: absolute;
                top:   500px;
                bottom:  0px;
                left:   20px;
                right:   0px;
                width: 1300px;
                height:   8px;
                background: black;
            }
            .footer {
                position: absolute;
                top:  600px;
                bottom: 0px;
                left:  10px;
                right:  0px;
                font-size: 40px;
                font-weight: 550;
                font-family: serif;
                height: 200px;
                width: 1300px;
                color: white;
                background-color: black;
                margin:  10px;
                padding: 10px;
            }
            .line {
                position: absolute;
                top:   70px;
                bottom: 0px;
                left:  10px;
                right:  0px;
                height: 3px;
                width: 1300px;
                background-color: white;
            }
            .list {
                position: absolute;
                top:   80px;
                bottom: 0px;
                left: -20px;
                right:  0px;
                font-size: 15px;
                font-weight: 550;

            }
            .next {
                position: absolute;
                top:   80px;
                bottom: 0px;
                left: 100px;
                right:  0px;
                font-size: 15px;
                font-weight: 550;
            }
            .icon-bar {
				position: absolute;
				top:    10px;
				bottom:  0px;
				left:  960px;
				right:   0px;
                font-size: 50px;

			} 
            .icon-bar a {
                color: white;
            }
            .copyright {
                position: absolute;
                top:  180px;
                bottom: 0px;
                left: 500px;
                right:  0px;
                font-size: 30px;
                font-weight: 550;
                width: 500px;
            }











        </style>

            <body>
                <div class="navbar">
                    <a href="recyclelasvegasrecycle.php"title="Website name">Home</a>
                    <a href="recycleservices.php"title="Website name">Services</a>
                    <a href="recycleaboutus.php"title="Website name">About Us</a>
                    <a href="lasvegasrecycleform.php"title="Website name">Pick Up</a>
                    </div> 
                </div>
                <div class="header">Services</div>

                <div class="message">
                    Las Vegas Recycling Center purchases all ferrous materials such as old iron pipes, appliances, fencing, filling cabinets and scrap vehicles.<br><br> 
                    Las Vegas Recycling Center purchases all non-ferrous materials such as aluminum siding and doors, radiators, batteries and wiring.<br><br>
                    Las Vegas Recycling Center purchases brass, aluminum and copper.</div>
    
                </div>
                <div class="border"></div>
                <div class="footer">
                    <footer>Las Vegas Recycling Center</footer>
                    <div class="line"></div>
                    <div class="list">
                    <ul style="list-style-type:none;">
                        <li>Spring Valley</li>
                        <li>Green Valley</li>
                        <li>Las Vegas</li>
                        <li>Henderson</li>
                        <li>Paradise</li>
                        <li></li>
                    </ul>
                    </div>
                    <div class="next">
                    <ul style="list-style-type:none;">
                        <li>Aluminum</li>
                        <li>Copper</li>
                        <li>Steel</li>
                        <li>Iron</li>
                        <li>Tin</li>
                    </ul>    
                    </div>
                    <div class="icon-bar">
                        <a href="#"><i class="fa fa-facebook"></i></a>
					    <a href="#"><i class="fa fa-instagram"></i></a>
					    <a href="#"><i class="fa fa-apple"></i></a>
					    <a href="#"><i class="fa fa-youtube"></i></a>
                        <a href="#"><i class="fa fa-twitter"></i></a>
                        <a href="#"><i class="fa fa-spotify"></i></a>
                    </div>
                    <div class="icon">
                    <a href="lasvegasrecyclecenter.php"title="Website name"><i class="fa fa-recycle"></i></a>
                    </div> 
                    <div class="copyright">&copy; Copyright Las Vegas Recycling Center</div>    









            </body>


</html>                