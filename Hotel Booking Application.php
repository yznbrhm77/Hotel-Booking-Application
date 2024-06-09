<!DOCTYPE html>
<html lang = " en "> 

<head> 
    <meta charset = "UTF-8">
    <meta name = "viewport" content = "widthevice - width, initial - scale + 1.0"> 
    <meta http - equiv = "X-UA-Compatible" content = "le-edge"> 
    <title> Hotel Booking App </title>
    <link rel = "stylesheet" href= "css/style.css"> 
    <link rel = "stylesheet" href= "css/JannaLTRegular.css"> 
</head>

<body> 
    <div class = "main">
        <div class = "logo">
            <img src = "Hotel Booking Application.jpg">
            <h2> Hotel Booking Application <h2> 

            <form action="index.php" method="post">
            <!--  General -->
            <input type="text" placeholder="First Name"  name="first name"/>
            <input type="text" placeholder="Last Name"  name="lastname"/>
            <form method=post>Gender: <br>
            <input type="radio" name="option"> Male
            <input type="radio" name="option"checked> Female
            <br>
            <br> 
            <input type="text" placeholder="Email" name= "email"/>
            <input
            placeholder="Date Of Birth"
            class="textbox-n"
            type="text"
            onfocus="(this.type='date')"
            onblur="(this.type='text')"
            id="Date Of Birth" />
            <input type="text" placeholder="Phone" name= "phone"/>
            <input type="text" placeholder="Address" name= "Address"/>
            <input type="text" placeholder="City" name= "citye"/>
            <input type="text" placeholder="Country" name= "country"/>
            <input type="text" placeholder="Nationality" name="nationality"/>
            <button type="submit" value="Book now" class="col-1-7" style="color: Black;">Book now</button>
         </form>

            <?php

            // Cnnect to the server or base
            $host = "localhost";
            $user = "root";
            $password = "rootroot";
            $dbName = "hospital";
        
            $conn = mysqli_connect($host, $user, $password,$dbName);

            // Sending the information entered by the customer to the database
            
            if($_POST['send']){
            
                $pName            = $_POST['name'];
                $pEmail           = $_POST['email'];
                $pDate            = $_POST['date'];            
            
                $query = "INSERT INTO patients(name,email,date) VALUE('$pName ','$pEmail ','$pDate ')";
                $result = mysqli_query($conn,$query);
            }  

            ?> 
        </div>
    </div> 
  </body>
</html> 
            