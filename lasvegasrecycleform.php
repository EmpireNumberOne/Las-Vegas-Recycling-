 <!DOCTYPE html>
<html>

    <head>
        <title>lasvegasrecycleform</title>
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
            <meta name="viewport" content="width=device-width, initial-scale=1">

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
        .border {
                position: absolute;
                top:   800px;
                bottom:  0px;
                left: -750px;
                right:   0px;
                width: 1200px;
                height: 10px;
                background: black;
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
            color: white; 
            background: black;
            height: 100px;
            width:  1000px;
        } 

        /* Listing */
        .listing {
            position: absolute;
            top: 200px;
            bottom: 0px;
            left:   0px;
            right: 0px;
            font-size: 35px;
            font-weight: 550;
			color: black;
            margin: 10px;
            padding: 10px;
            text-align: left;

        }

        fieldset {
            border: solid 2px black;
        }

        .icon {
            position: absolute;
            top:   85px;
            bottom: 0px;
            left: 1000px;
            right: 0px;
            font-size: 100px;
            font-weight: 550; 
        }
        .icon a {
            color: white;
        }
        .footer {
            position: absolute;
            top:  900px;
            bottom: 0px;
            left: -20px;
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
        .business {
            position: absolute;
            top:   10px;
            bottom: 0px;
            left:   0px;
            right:  0px;
            font-size: 40px;
            font-weight: 550;
            width: 500px;
            color: white;
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
            top:    80px;
            bottom:  0px;
            left:-1180px;
            right:   0px;
            font-size: 15px;
            font-weight: 550;

        }
        .next {
            position: absolute;
            top:   80px;
            bottom: 0px;
            left: -1000px;
            right:  0px;
            font-size: 15px;
            font-weight: 550;
        }
        .icon-bar {
			position: absolute;
			top:     0px;
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
            top:  160px;
            bottom: 0px;
            left: 250px;
            right:  0px;
            font-size: 30px;
            font-weight: 550;
            width: 800px;
        }  

          



    </style>
    

        <body>
            <div class="container">
                <div class="company">Las Vegas Recycling Center</div>
                <div class="listing">
                <ul>
                    <li>Recycle unwanted metal</li>
                    <li>Recycle unwanted automobiles</li>
                    <li>Locally-owned and operated</li>
                    <li>Available 7 days a week</li>
                    <li>Licensed, Insured and Bonded</li>
                    <li>Contact Us @ (702) 374-3350</li>
                    <li>lasvegasrecyclingcenter@google.com</li>
                </ul>
                </div>   

           <!--right column -->
			    <div class="col-sm-4">
			        <form method="post" action="mailto:lasvegasrecyclingcenter@gmail.com">
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
            </div>
            <div class="footer">
            <footer></footer>
            <div class="business">Las Vegas Recycling Center</div>
            <div class="line"></div>
            <div class="list">
            <ul style="list-style-type:none;">
            <li>Spring Valley</li>
            <li>Green Valley</li>
            <li>Las Vegas</li>
            <li>Henderson</li>
            <li>Paradise</li>
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
            <div class="copyright">&copy; Copyright 2019 Las Vegas Recycling Center</div>

            <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script> 







        </body>



</html>     