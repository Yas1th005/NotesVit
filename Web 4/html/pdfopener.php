<?php
session_start();
include ('../css/connect.php');
if (!isset($_SESSION['FName'])) {
    header("location:../html/signin.php");
    die();
}
$pdf = $_GET['pdf'];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PDF Viewer</title>
    <style>
        #pdfViewer {
            position: relative;
            width: 100%;
            height: 95vh;
        }

        .overlay {
            position: absolute;
            top: 0;
            left: 0;
            width: 98%;
            height: 100%;
            background: rgba(255, 255, 255, 0.001);
            z-index: 2;
        }

        iframe {
            position: absolute;
            width: 100%;
            height: 100%;
            z-index: 1;
            border: none;
        }
    </style>
</head>

<body>
    <div id="pdfViewer">
        <iframe src="<?php echo htmlspecialchars($pdf); ?>"></iframe>
        <div class="overlay"></div>
    </div>

    <script>

        document.addEventListener('contextmenu', event => event.preventDefault());
        document.addEventListener('keydown', function (event) {
            if (event.ctrlKey && (event.key === 'p' || event.key === 's')) {
                event.preventDefault();
            }
        });
        document.addEventListener('keyup', function (event) {
            if (event.key === 'PrintScreen') {
                document.getElementById('pdfViewer').style.display = 'none';
            }
        });
        window.addEventListener('keydown', function (event) {
            if (event.metaKey && event.shiftKey && event.key === 'S') {
                document.getElementById('pdfViewer').style.display = 'none';
            }
        });


    </script>

</body>

</html>