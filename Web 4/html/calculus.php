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
    <title>Calculus</title>
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <link rel="stylesheet" href="../css/styles.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>

<body>
    <div class="header">
        <h1>Calculus</h1>
        <div style="color:white;text-transform:capitalize;"> <?php echo "User: ";
        echo $_SESSION['FName'];
        echo " ";
        echo $_SESSION['LName']; ?>
        </div>
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
    <div class="center" id="phy">
        <ul>
            <li class="mod" id="mod1">
                <a>Module-1 &DoubleRightArrow; Single Variable Calculus</a>
                <ul class="drop1">
                    <li id="oneOne">
                        <p>500/-</p> <a href="../html/pdfopener.php?pdf=../pdfs/calculus/calculusmod1s.pdf"
                            target="_"><button style="background-color: #f70801;">view</button></a><a><button
                                onclick="addToCart(mod1,oneOne)" style="background-color: #48b419;">add</button></a>
                    </li>
                    <!-- <li id="oneTwo">
                        <p>100/-</p> <a href="../pdfs/acknowledgment.pdf" target="_"><button
                                style="background-color: #f70801;">view</button></a><a><button
                                onclick="addToCart(mod1,oneOne)" style="background-color: #48b419;">add</button></a>
                    </li> -->
                </ul>
            </li>
            <li class="mod" id="mod2">
                <a>Module-2 &DoubleRightArrow; Multivariable Calculus</a>
                <ul class="drop1">
                    <li id="twoOne">
                        <p>500/-</p> <a href="../html/pdfopener.php?pdf=../pdfs/calculus/calculusmod2s.pdf"
                            target="_"><button style="background-color: #f70801;">view</button></a><a><button
                                onclick="addToCart(mod2,twoOne)" style="background-color: #48b419;">add</button></a>
                    </li>
                    <!-- <li id="twoTwo">
                        <p>100/-</p> <a href="../pdfs/acknowledgment.pdf" target="_"><button
                                style="background-color: #f70801;">view</button></a><a><button
                                onclick="addToCart(mod2,twoTwo)" style="background-color: #48b419;">add</button></a>
                    </li> -->
                </ul>
            </li>
            <li class="mod" id="mod3">
                <a>Module-3 &DoubleRightArrow; Application of Multivariable Calculus</a>
                <ul class="drop1">
                    <li id="threeOne">
                        <p>500/-</p> <a href="../html/pdfopener.php?pdf=../pdfs/calculus/calculusmod3s.pdf"
                            target="_"><button style="background-color: #f70801;">view</button></a><a><button
                                onclick="addToCart(mod3,threeOne)" style="background-color: #48b419;">add</button></a>
                    </li>
                    <!-- <li id="threeTwo">
                        <p>100/-</p> <a href="../pdfs/acknowledgment.pdf" target="_"><button
                                style="background-color: #f70801;">view</button></a><a><button
                                onclick="addToCart(mod3,threeTwo)" style="background-color: #48b419;">add</button></a>
                    </li> -->
                </ul>
            </li>
            <li class="mod" id="mod4">
                <a>Module-4 &DoubleRightArrow; Multiple integrals</a>
                <ul class="drop1">
                    <li id="fourOne">
                        <p>500/-</p> <a href="../html/pdfopener.php?pdf=../pdfs/calculus/calculusmod4s.pdf"
                            target="_"><button style="background-color: #f70801;">view</button></a><a><button
                                onclick="addToCart(mod4,fourOne)" style="background-color: #48b419;">add</button></a>
                    </li>
                    <!-- <li id="fourTwo">
                        <p>100/-</p> <a href="../pdfs/acknowledgment.pdf" target="_"><button
                                style="background-color: #f70801;">view</button></a><a><button
                                onclick="addToCart(mod4,fourTwo)" style="background-color: #48b419;">add</button></a>
                    </li> -->
                </ul>
            </li>
            <li class="mod" id="mod5">
                <a>Module-5 &DoubleRightArrow; Special Functions</a>
                <ul class="drop1">
                    <li id="fiveOne">
                        <p>500/-</p> <a href="../html/pdfopener.php?pdf=../pdfs/calculus/calculusmod5s.pdf"
                            target="_"><button style="background-color: #f70801;">view</button></a><a><button
                                onclick="addToCart(mod5,fiveOne)" style="background-color: #48b419;">add</button></a>
                    </li>
                    <!-- <li id="fiveTwo">
                        <p>100/-</p> <a href="../pdfs/acknowledgment.pdf" target="_"><button
                                style="background-color: #f70801;">view</button></a><a><button
                                onclick="addToCart(mod5,fiveTwo)" style="background-color: #48b419;">add</button></a>
                    </li> -->
                </ul>
            </li>
            <li class="mod" id="mod6">
                <a>Module-6 &DoubleRightArrow; Vector Differentiation </a>
                <ul class="drop1">
                    <li id="sixOne">
                        <p>500/-</p> <a href="../html/pdfopener.php?pdf=../pdfs/calculus/calculusmod6s.pdf"
                            target="_"><button style="background-color: #f70801;">view</button></a><a><button
                                onclick="addToCart(mod6,sixOne)" style="background-color: #48b419;">add</button></a>
                    </li>
                    <!-- <li id="sixTwo">
                        <p>100/-</p> <a href="../pdfs/acknowledgment.pdf" target="_"><button
                                style="background-color: #f70801;">view</button></a><a><button
                                onclick="addToCart(mod6,sixTwo)" style="background-color: #48b419;">add</button></a>
                    </li> -->
                </ul>
            </li>
            <li class="mod" id="mod7">
                <a>Module-7 &DoubleRightArrow; Vector Integration</a>
                <ul class="drop1">
                    <li id="sevenOne">
                        <p>500/-</p> <a href="../html/pdfopener.php?pdf=../pdfs/calculus/calculusmod7s.pdf"
                            target="_"><button style="background-color: #f70801;">view</button></a><a><button
                                onclick="addToCart(mod7,sevenOne)" style="background-color: #48b419;">add</button></a>
                    </li>
                    <!-- <li id="sevenTwo">
                        <p>100/-</p> <a href="../pdfs/acknowledgment.pdf" target="_"><button
                                style="background-color: #f70801;">view</button></a><a><button
                                onclick="addToCart(mod7,sevenTwo)" style="background-color: #48b419;">add</button></a>
                    </li> -->
                </ul>
            </li>
        </ul>
        <?php
        if (isset($_POST['PDF_Name']) && isset($_POST['Module']) && isset($_POST['Amount']) && isset($_POST['Link'])) {
            $PDF_Name = $_POST['PDF_Name'];
            $Module = $_POST['Module'];
            $Amount = $_POST['Amount'];
            $Link = $_POST['Link'];
            $reg = $_SESSION['RegNumber'];

            $query = "INSERT INTO `invoice_det` (`RegNumber`, `PDF_NAME`, `Module`, `AMOUNT`,`Link`) VALUES ('$reg' ,'$PDF_Name', '$Module', '$Amount','$Link')";
            $data = mysqli_query($conn, $query);

        }

        ?>
        <div class="side">
            <div class="scroll">
                <h1>cart</h1>
                <div id="cart"></div>
            </div>
            <span id="sum">
                <p>total: 0/-</p>
                <a><button onclick="sendTotalPriceCalculus()">Pay</button></a>
            </span>
        </div>

    </div>
    <div class="footer" id="foot">
        <div>
            <p>click <a href="">here</a> to post <b>your notes</b> and <b>get paid</b> $$</p>
        </div>
    </div>
    <script src="../css/script.js"></script>
</body>

</html>