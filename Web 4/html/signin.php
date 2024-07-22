<?php
session_start();
include ('../css/connect.php');
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $regno = $_POST['regno'];
    $paswd = $_POST['paswd'];
    $query = "SELECT * FROM user_input WHERE RegNumber='$regno' && Password='$paswd'";
    $data = mysqli_query($conn, $query);
    if (mysqli_num_rows($data) > 0) {
        $user_data = mysqli_fetch_assoc($data);
        $_SESSION['FName'] = $user_data['FirstName'];
        $_SESSION['LName'] = $user_data['LastName'];
        $_SESSION['RegNumber'] = $regno;
        header('location:../html/home.php');
    } else {
        echo "<script type='text/javascript'> alert('UserName or Password is incorrect !!')</script>";
    }
}
?>
<!doctype html>
<html lang="en-us" dir="ltr">

<head>
    <meta charset="UTF-8">
    <title>Sign In</title>
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <link rel="stylesheet" href="../css/styles.css">
    <script type='text/javascript'>
        window.history.forward();
        if (window.history.replaceState) { //To prevent resubmission
            window.history.replaceState(null, null, window.location.href);
        }
    </script>
</head>

<body>
    <main>
        <div class="middle" id="mid">
            <div class="logreg">
                <h1>Sign In</h1>
                <form method="post">
                    <div class="form_grp">
                        <input type="text" placeholder="Registration Number" name="regno" required>
                    </div>
                    <div class="form_grp">
                        <input type="password" placeholder="Password" name="paswd" required>
                    </div>
                    <div class="reg_grp">
                        <button type="submit">LOgin</button>
                    </div>
                </form>
                <div class="form_grp">
                    <p style="margin: 10px 0px;">Not have an account ? <a href="../html/register.php">Register</a></p>
                </div>

            </div>
        </div>
    </main>
</body>

</html>