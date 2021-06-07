<?php
session_start();
if(!isset($_SESSION['userdata']))
{
    header("location:");
}

$userdata = $_SESSION['userdata'];
$groupsdata = $_SESSION['groupsdata'];

if($userdata['status']==0)
{
    $status = '<b style="color: red;">Not voted</b>';
}
else
{
    $status = '<b style="color: green;">Voted</b>';
}

?>

<!DOCTYPE html>
<html lang="en">
<html>
    <head>
        <meta charset="utf-8" />
        <title>Vote</title>
        <link rel="stylesheet" href="Styles/styles.css" />
</head> 

<body>

     <div id="headerSection">
        <button id="backbtn">back</button>
        <button id="logoutbtn">Logout</button>
        <h1>Online voting system</h1>
    </div>
    <hr>
    <div id="mainSection">
        <div id="Profile">
        <img src="uploads/vote1.jpg/<?php echo $userdata['photo']; ?>" height="100" whidth="100"><br>
        <b>Name :</b><?php echo $userdata['name'] ?><br><br>
        <b>Mobile :</b><?php echo $userdata['mobile'] ?><br><br>
        <b>Adress:</b><?php echo $userdata['adress'] ?><br><br>
        <b>Status :</b><?php echo $status['status'] ?><br><br>
        
    </div>
    <div id="Group"></div>
        <?php

        if($_SESSION['grousdata'])
        {
            for($i = 0; $i < count($groupsdata); $i++)
            {
                ?>
                <div>
                    <img src="uploads/<?php echo $groupsdata[$i]['photo'] ?>" height="100" whidth="100">
                    <b>Group Name :<?php echo $groupsdata[$i]['name'] ?> <br>
                    <b>Votes :</b></b><?php echo $groupsdata[$i]['votes'] ?> <br>
                    <form action="#">
                        <input type="hidden" name="gvotes" value="<?php echo $groupsdata[$i]['votes'] ?>">
                        <input type="submit" id="votebtn" name="gvotes" value="vote">
                    </form>
                </div>
                <hr>
                <?php
            }
        }
        else
        {
        }
    
    

   

        ?>
    </body>
</html>        