<?php
session_start();
include ('../css/connect.php');
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $transid = $_POST['transid'];
    $reg = $_SESSION['RegNumber'];
    $check = "INSERT INTO `user_trans` (`RegNumber`, `Transaction ID`) VALUES ('$reg', '$transid')";
    $data = mysqli_query($conn, $check);
    if ($data) {
        echo "<script type='text/javascript'> alert('PDF will be added shortly')</script>";
        header('location:../html/home.php');
    }
}
?>
<!doctype html>
<html lang="en-us" dir="ltr">

<head>
    <meta charset="UTF-8">
    <title>Payment</title>
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <link rel="stylesheet" href="../css/styles.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script type='text/javascript'>
        window.history.forward();
        if (window.history.replaceState) { //To prevent resubmission
            window.history.replaceState(null, null, window.location.href);
        }
    </script>
</head>

<body>
    <div>
        <div class="lside">
            <div style="color:red;text-transform:capitalize;"> <?php echo "Dear ";
            echo $_SESSION['FName'];
            echo " ";
            echo $_SESSION['LName']; ?>
            </div>
            <div>
                <p style="color:white;letter-spacing:1.5px">Follow the below steps to get your PDFS:</p>
                <p style="color:red;letter-spacing:1.5px">(IMPORTANT)</p>
                <br>
                <ul class=" steps">
                    <li>Scan the QR code</li>
                    <li>Pay the amount shown above the QR code</li>
                    <li>Enter the Transaction ID in the box below after the payment</li>
                    <li>Press Submit</li>
                </ul>
                <br>
                <p style="color:white;letter-spacing:1.5px">After following these steps wait for 2-3 hours to get
                    your
                    PDF to
                    be relflected in your account</p>
                <br>
                <p style="color:white;letter-spacing:1.5px">To view the PDF's go to Home -> Menu -> Downloads</p>
                <br><br><br>
                <form method="post" class="transid">
                    <div>
                        <input type="text" placeholder="Transaction ID" required name="transid" required>
                    </div>
                    <div>
                        <button type="submit">Submit</button>
                    </div>
                </form>
                <br>
                <p style="color:white;letter-spacing:1.5px">Enter Transaction ID in above box after payment</p>
            </div>
        </div>


        <div id="qr">
            <button>Show QR</button>
            <br>
            <img src="../images/qr.jpeg" alt="">
        </div>


    </div>





    <script src="../css/script.js"></script>
</body>

</html>