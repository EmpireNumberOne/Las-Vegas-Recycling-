<!DOCTYPE html>
<html>

    <head>
        <title>recyclebusiness</title>
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
            /* Header */
            .header {
                position: absolute;
                top:   100px;
                bottom: 0px;
                left:  50px;
                right:  0px;
                color: black;
                font-size: 5vw;
                line-height: 0.1;
                font-weight: 550;
                font-stretch: 100;
                width: 1000px;
            }
            .contact {
                position: absolute;
                top:   200px;
                bottom: 0px;
                left:  50px;
                right:  0px;
                color: black;
                font-size: 2vw;
                line-height: 0.1;
                font-weight: 550;
                font-stretch: 100;
                width: 1000px;

            }
            .steel {
                position: absolute;
                top:    300px;
                bottom: 0px;
                left:   20px;
                right:  0px;
            }
            .copper {
                position: absolute;
                top:    300px;
                bottom: 0px;
                left:   355px;
                right:  0px;
            }
            .aluminum {
                position: absolute;
                top:  300px;
                bottom: 0px;
                left: 700px;
                right:  0px;
            }
            .brass {
                position: absolute;
                top: 300px;
                bottom: 0px;
                left: 1000px;
                right: 0px;
            }
            .footer {
                position: absolute;
                top: 800px;
                bottom: 0px;
                left: 10px;
                right: 0px;
                font-size: 30px;
                font-weight: 550;
                width: 800px;
                color: black;
            }
            .text {
                position: absolute;
                top:  250px;
                bottom: 0px;
                left:   80px;
                right:  0px;
                width: 300px;
                font-size: 30px;
                font-weight: 550;
                color: black;
            }
            .content {
                position: absolute;
                top: 250px;
                bottom: 0px;
                left: 80px;
                right: 0px;
                width: 300px;
                font-size: 30px;
                font-weight: 550;
                color: black;
            }
            .ewaste {
                position: absolute;
                top: 250px;
                bottom: 0px;
                left: 70px;
                right: 0px;
                width: 300px;
                font-size: 30px;
                font-weight: 550;
                color: black;
            }
            .iron {
                position: absolute;
                top:    250px;
                bottom:   0px;
                left:    50px;
                right:    0px;
                width:  300px;
                font-size: 30px;
                font-weight: 550;
                color: black;
            }
            .message {
                position: absolute;
                top: 650px;
                bottom: 0px;
                left: 40px;
                right: 0px;
                width: 1300px;
                font-size: 30px;
                font-weight: 550;
                color: black;
            }
            .label {
                position: absolute;
                top: 252px;
                bottom: 0px;
                left: 56px;
                right: 0px;
                width: 242px;
                height: 40px;
                font-size: 30px;
                font-weight: 550;
                color: white;
                background: black;
                text-align: center;
                margin: 5px;
                padding: 5px;
            }
            .note {
                position: absolute;
                top: 252px;
                bottom: 0px;
                left: 391px;
                right: 0px;
                width: 242px;
                height: 40px;
                font-size: 30px;
                font-weight: 550;
                color: white;
                background: black;
                text-align: center;
                margin: 5px;
                padding: 5px;

            }
            .paper {
                position: absolute;
                top: 252px;
                bottom: 0px;
                left: 734px;
                right: 0px;
                width: 242px;
                height: 40px;
                font-size: 30px;
                font-weight: 550;
                color: white;
                background: black;
                text-align: center;
                margin: 5px;
                padding: 5px;

            }
            .pin {
                position: absolute;
                top: 252px;
                bottom: 0px;
                left: 1034px;
                right: 0px;
                width: 242px;
                height: 40px;
                font-size: 30px;
                font-weight: 550;
                color: white;
                background: black;
                text-align: center;
                margin: 5px;
                padding: 5px;
            }
            i.fa {
                position: absolute;
                top: 75px;
                bottom: 0px;
                left: 800px;
                right: 0px;
                font-size: 100px;
                font-weight: 550;
                color: black; 
            }       







        </style>

            <body>
                <div class="navbar">
                    <a href="recyclelasvegasrecycle.php"title="Website name">Las Vegas Recycling Center</a>
                    <a href="recycleservices.php"title="Website name">Services</a>
                    <a href="recycleaboutus.php"title="Website name">About Us</a>
                    <a href="lasvegasrecycleform.php"title="Website name">Pick Up</a>
                    </div>  
                </div> 
                </div>
                <div class="header">Schedule A Pickup!</div>
                </div>
                <div class="contact">Contact Us at 702-374-3350</div>
                <div class="icon bar">
                    <a href="lasvegasrecyclecenter.php"title="Website name"><i class="fa fa-recycle"></i></a>

                <figure class="steel">
                    <img src="Images/scrap1.jpg" alt="" width="250" height="250" style="border:1px solid black;margin-right: 15px;" />
                        <div class="text">Steel</div>
                </figure>

                <figure class="copper">
                    <img src="Images/scrap2.jpg" alt="" width="250" height="250" style="border:1px solid black;margin-right: 15px;" />
                        <div class="content">Iron</div>
                </figure>

                <figure class="aluminum">
                    <img src="Images/scrap3.jpg" alt="" width="250" height="250" style="border:1px solid black;margin-right: 15px;" />
                        <div class="ewaste">Copper</div>
                </figure>

                <figure class="brass">
                    <img src="Images/scrap4.jpg" alt="" width="250" height="250" style="border:1px solid black;margin-right: 15px;" />
                        <div class="iron">Aluminum</div>
                </figure>
                <figure class="label">Metals</div>
                </figure>
                <figure class="note">Metals</div>
                </figure>
                <figure class="paper">Metals</div>
                </figure>
                <figure class="pin">Metals</div>
                </figure>

            </div><!-- .wrap -->

                <div class="message">Las Vegas Recycling Center is a scrap metal buyer. Contact us and we will be happy to pick up
                any type of metal. We are fully licensed, bonded, insured and permitted with the Southern Nevada Health District to operate in Nevada.</div>

            <div class="footer">
            <footer>&copy; Copyright 2019, Las Vegas Recycling Center</footer>








            </body>


</htmL>                