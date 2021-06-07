<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <title>Systeme de vote en ligne</title>
    <link rel="stylesheet" href="Css/styles.css" />
</head>

<body>
    <?php
    include('include/bdd.php');

    $name = $_POST['name'];
    $mobile = $_POST['mobile'];
    $password = $_POST['password'];
    $password2 = $_POST['password2'];
    $adress = $_POST['adress'];
    $image = $_FILES['photo']['name'];
    $tmpName = $_FILES['photo']['tmp_name'];
    $role = $_POST['role'];

    if($password==$password2)
    {
        move_uploaded_file("$tmpName, './uploads/'.$image");
        $req = $bdd->prepare($bdd, "INSERT INTO user (name, mobile, password, adress, photo, role, status, votes) VALUES ('$name', '$mobile', '$password', '$adress', '$image', '$role', 0,0)");

        if($req)
        {
            echo "Registration successful !";
        }
        else
        {
            echo "Some error occured !";    
        }
    }
    else
    {
        echo 
            "Password and confirm password does not match !"; 
            // window.location = "App/app.php";
        
    }




    ?>


            

    <div id="headerSection">
        <h1>Online voting system</h1>
    </div>
    <hr>
    <div id="bodySection">
        <h2>Register</h2>
        <?php if(isset($message)) echo $message;?>
        <form action="#" method="POST" enctype="multipart/form-data">
            <input type="text" name="name" placeholder="Enter name">
            <input type="number" name="mobile" placeholder="Enter mobile"><br><br>
            <input type="password" name="password" placeholder="Enter password">
            <input type="password" name="password2" placeholder="Confirm password"><br><br>
            <input id="adress" type="text" name="adress" placeholder="Enter adress"><br><br>
            <center>
            <div id="imagepart">
                upload image <input type="file" name="photo">
            </div>
            <br>
           <div id="role">
             Select your role <select name="role">
                <option value="1">Voter</option>
                <option value="2">Group</option>
            </select>
           </div>
            </center>
           <br>
           <input type="submit" name="register" id="buttonbtn" value="Register"><br><br>
           
            Already user ? <a href="App/app.php">Login here</a>
        </form>

    </div>
       

    </body>
</html>