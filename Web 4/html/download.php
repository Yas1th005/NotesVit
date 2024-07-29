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
    <title>Downloads</title>
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <link rel="stylesheet" href="../css/styles.css">
</head>

<body>
    <main>
        <div class="header">
            <h1>Downloads</h1>
            <div style="color:white;text-transform:capitalize;"> <?php echo "User: ";
            echo $_SESSION['FName'];
            echo " ";
            echo $_SESSION['LName']; ?>
            </div>
            <div class="menu">
                <a href="">menu <span>&DoubleDownArrow;</span></a>
                <div class="dropdown">
                    <ul>
                        <li><a href="../html/home.php">Home</a></li>
                        <li><a href="../html/signout.php">Logout</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="middle">
            <table>
                <thead>
                    <tr>
                        <th>Chapter</th>
                        <th>Module</th>
                        <th>Price</th>
                        <th>Open PDF</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $reg = $_SESSION['RegNumber'];
                    $query = "SELECT T1.PDF_Name,T1.Module,T1.Amount,T1.Link FROM final_data T1 WHERE RegNumber='$reg'";
                    $data = mysqli_query($conn, $query);
                    if (mysqli_num_rows($data) > 0) {
                        while ($data_row = mysqli_fetch_array($data, MYSQLI_ASSOC)) {
                            ?>
                            <tr>
                                <td><?php echo $data_row['PDF_Name']; ?></td>
                                <td><?php echo $data_row['Module']; ?></td>
                                <td><?php echo $data_row['Amount'];
                                echo "/-"; ?></td>
                                <td>
                                    <a href="<?= $data_row['Link']; ?>" target="_"><button>view</button></a>
                                </td>
                            </tr>
                            <?php
                        }
                    }
                    ?>
                </tbody>
            </table>
            <br><br>
            <p style="color:white;letter-spacing:1.5px;text-align: center;">If you bought a PDF and it is not visible
                then wait for 2-3
                hours</p>
            <br><br>
            <div class="footer" id="foot">
                <div>
                    <p>click <a href="">here</a> to post <b>your notes</b> and <b>get paid</b> $$</p>
                </div>
            </div>
        </div>

    </main>
</body>

</html>