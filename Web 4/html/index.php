<?php
session_start();
include ('../css/connect.php');
if (!isset($_SESSION['FName'])) {
    header("location:../html/signin.php");
    die();
}
?>
<!-- <?php
// $user = $_SESSION['FirstName'];
// $query = mysqli_query($conn, "SELECT * FROM user_input WHERE FirstName='$user'");
// $row = mysqli_fetch_array($query);
// $id = $row['FirstName'];
// if (isset($_REQUEST['submit'])) {
//     $title = $_REQUEST['title'];
//     $content = $_REQUEST['content'];
//     mysqli_query($conn, "INSERT INTO ");
// }
?> -->

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
                    <li><img src="../images/eee.jpg" alt="EEE"></li>
                    <li><img src="../images/dsd.jpeg" alt="DSD"></li>
                    <li><img src="../images/calculus.jpg" alt="Calculus"></li>
                    <li><img src="../images/diff.jpg" alt="Differential"></li>
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