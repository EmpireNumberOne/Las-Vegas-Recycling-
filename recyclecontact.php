 <!DOCTYPE html>
<html>

<head>
    <title>recyclecontact</title>
        <!-- Global site tag (gtag.js) - Google Analytics -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=UA-127710933-1"></script>
        <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'UA-127710933-1');
        </script>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>

        <?php # Script 11.1 - email.php
    
        // Check for form submission:
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {

        // Minimal form validation:
        if (!empty($_POST['name']) && !empty($_POST['email']) && !empty($_POST['comments']) ) {

            // Create the body:
            $body = "Name: {$_POST['name']}\n\nComments: {$_POST['comments']}";

            // Make it no longer than 70 characters long:
            $body = wordwrap($body, 70);

            // Send the email:
            mail('Nate77exprotection@gmail.com', 'Contact Form Submission' , $body,
            "From: {$_POST['email']}"); 
            
            // Print a message:
            echo '<p><em>Your message has been submitted.</em></p>';

            // Clear $_POST (so that the form's not sticky):
            $_POST = [];
            
        } else {
            echo '<p style="font-weight: bold; color: #C00">Please fill out the form completely.
                </p>';

        }
        
        
    }   // End of main isset() IF.

    // Create the HTML form:
    ?>

    <style>

        
        html,body   {
            background: white;
            color: black;
            width: 100%;
            height: 100%;
            margin:  5px;
            padding: 5px;
            font-family: arial;
            font-weight: 550;
        }
        /* Navbar container */
        .navbar {
            overflow: hidden;
            background-color: black;
            font-family: Arial;
            color: white;
            height: 50px;
            text-align: left;
        }

        /* Add a gray background color to navbar links on hover */
        .navbar a:hover, .dropdown:hover .dropbtn {
            background-color: gray;
        }


        /* Container holding the text */
        .container {
            position: absolute;
            text-align: center;
            color: white;
        }

        form   {
            position: absolute;
            right:         0px;
            left:        720px;
            bottom:        0px;
            top:          150px; 
            width:        500px;
            height:       700px;
            margin:       10px;
            padding:      10px;
            font-weight:   550;
            border: solid 3px black;
            font-family: arial;
            background-color: white;
            color: black; 
        }

        form div {
            margin-bottom: 1em;
        }
        div.submit input {
            margin-left: 0px;
            color: black;
            border: 1px black;
            font-size: 20px;
            font-weight: 550;
        }
        label.field {
            display: block;
            float: center;
            margin-right: 15px;
            width: 150px;
            text-align: left;
        }
        input [type="text"], select, textarea {
            width: 300px;
            font: 18px arial;
            border: solid 2px black;
            background-color: white;
            color: black;
            float: center;
        }
        div.required label.field {
            font-weight: bold;
        }
        div.required input, div.required select {
            background-color: white;
            border: solid 2px black;
            font-weight: bold;
        }    
        
        footer {
            position: absolute;
            top:    700px;
            bottom: 0px;
            left:   -750px;
            right:  0px;
            padding: 10px;
            margin:  20px;
            font-size: 30px;
            font-family: arial;
            font-weight: 550;
            width: 800px;
        }

        /* Company */
        .company {
            position: absolute;
            top:    0px;
            bottom: 0px;
            left: 10px;
            right: 0px;
            font-size: 5vw;
            font-weight: 550;
            color: black; 
        } 

        /* Listing */
        .listing {
            position: absolute;
            top: 200px;
            bottom: 0px;
            left: 0px;
            right: 0px;
            font-size: 3vw;
            font-weight: 550;
			color: black;
            margin: 10px;
            padding: 10px;
            text-align: left;

        }

        fieldset {
            border: solid 2px black;
        }

          



    </style>
    
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">



        <body>
            <div class="navbar">
                    <a href="recyclelasvegasrecycle.php"title="Website name">Las Vegas Recycling Center</a>
                    <a href="recycleservices.php"title="Website name">Services</a>
                    <a href="recycleaboutus.php"title="Website name">About Us</a>
                    <a href="recyclecontact.php"title="Website name">Pickup</a>
                </div>  
            </div> 
                <div class="listing">
                <ul>
                    <li>Recycle unwanted metal</li>
                    <li>Recycle unwanted automobiles</li>
                    <li>Locally-owned and operated</li>
                    <li>Available 7 days a week</li>
                    <li>Licensed, Insured and Bonded</li>
                    <li>Contact Us @ (702) 374-3350</li>
                </ul>
                </div>   

           <!--right column -->
			    <div class="col-sm-4">
			        <form method="post" action="">
            <form action="/register" method="post"
                enctype="multipart/form-data">
                    <h1>Pickup</h1>
                    <div class="required">
                        <label class="field" for="first name">First Name</label>
                        <input id="first name" type="text">
                    </div>
                    <div class="required">
                        <label class="field" for="last name">Last Name</label>
                        <input id="last name" type="text">

                    </div>
                    <div class="required">
                        <label class="field" for="phone number">Phone number</label>
                        <input id="phone number" type="text">
                    <div class="required">
                        <label class="field" for="address">Address</label>
                        <input id="address" type="text">
                    </div>    

                    <div>
                        <label class="field">Metal</label>
                        <label><input type="checkbox" name="metal" value="steel"> Steel</label>
                        <label><input type="checkbox" name="metal" value="copper"> Copper</label>
                        <label><input type="checkbox" name="metal" value="aluminum"> Aluminum</label>
                        <label><input type="checkbox" name="metal" value="brass"> Brass</label>
                    </div>

                    <div>
                        <label class="field" for="message">Message</label>
                        <textarea id="bio" rows="6" cols="40"></textarea>
                    </div>
                    <div class="submit">
                        <input type="submit" value="Submit">
                    </div>
            </form>

            <div class="footer"><footer>&copy; Copyright 2019, Las Vegas Recycling Center</footer>

                <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script> 







        </body>



</html>     