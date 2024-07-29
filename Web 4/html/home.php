<?php
session_start();
include ('../css/connect.php');
if (!isset($_SESSION['FName'])) {
    header("location:../html/signin.php");
    die();
}
?>

<!doctype html>
<html lang="en-us" dir="ltr">

<head>
    <meta charset="UTF-8">
    <title>Home Page</title>
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <link rel="stylesheet" href="../css/styles.css">
</head>

<body>
    <main>
        <div class="header">
            <h1>notes vit</h1>
            <div style="color:white;text-transform:capitalize;"> Welcome <?php echo $_SESSION['FName'];
            echo " ";
            echo $_SESSION['LName']; ?> </div>
            <div class="menu">
                <a href="">menu <span>&DoubleDownArrow;</span></a>
                <div class="dropdown">
                    <ul>
                        <li><a href="../html/download.php">Downloads</a></li>
                        <li><a href="../html/signout.php">Logout</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="middle">
            <div>
                <input type="Search" required placeholder="Type and hit enter to search PDF...">
            </div>
            <div class="sem">
                <ul>
                    <li><a href="../html/home.php"><button style="background-color: #48b419;">notes</button></a></li>
                    <li><a href="../html/soon.html"><button style="background-color: #f70801;">pyq's</button></a></li>
                    <li><a href="../html/soon.html"><button style="background-color: #009de1;">text
                                books</button></a></li>
                    <li><a href="../html/soon.html"><button style="background-color: #df9917;">xxxxx</button></a></li>
                </ul>
            </div>
            <div class="box">
                <div class="notice">
                    <p>simply click <a href=""><b>here</b></a> for any broken links or to get any help from us</p>
                </div>
            </div>
            <div class="pages">
                <ul>
                    <li><a href="../html/phy.php"><img src="../images/phy.jpg" alt="Physics"></a></li>
                    <li><a href="../html/chem.php"><img src="../images/chem.webp" alt="Chemistry"></a></li>
                    <li><a href="../html/eee.php"><img src="../images/eee.jpg" alt="EEE"></a></li>
                    <li><a href="../html/calculus.php"><img src="../images/calculus.jpg" alt="Calculus"></a></li>
                    <li><a href="../html/chem.php"><img src="../images/dsd.jpeg" alt="DSD"></a></li>
                    <li><a href="../html/chem.php"><img src="../images/diff.jpg" alt="Differential"></a></li>
                </ul>
            </div>
            <p class="page-opened">Notes</p>
            <div class="footer">
                <div>
                    <p>click <a href="">here</a> to post <b>your notes</b> and <b>get paid</b> $$</p>
                </div>
            </div>
        </div>
    </main>
</body>

</html>