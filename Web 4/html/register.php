<?php
session_start();
include ('../css/connect.php');
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $email = $_POST['email'];
    $regno = $_POST['regno'];
    $paswd = $_POST['paswd'];
    $check = "SELECT * FROM user_input WHERE RegNumber='$regno'";
    $check1 = "SELECT * FROM users WHERE email='$email'";
    $data = mysqli_query($conn, $check);
    $data1 = mysqli_query($conn, $check1);
    if (mysqli_num_rows($data) > 0) {
        $user_data = mysqli_fetch_assoc($data);
        if ($user_data['RegNumber']) {
            echo "<script type='text/javascript'> alert('User already exists')</script>";
        }
    } elseif (mysqli_num_rows($data1) > 0) {
        $user_data = mysqli_fetch_assoc($data1);
        if ($user_data['email']) {
            echo "<script type='text/javascript'> alert('Email already exists')</script>";
        }
    } else {
        $query = "INSERT INTO user_input VALUES ('$fname','$lname','$regno','$paswd')";
        $query1 = "INSERT INTO users VALUES ('$regno','$email','$paswd')";
        $data = mysqli_query($conn, $query);
        $data1 = mysqli_query($conn, $query1);
        if ($data) {
            echo "<script type='text/javascript'> alert('Succesfully Registered')</script>";
        } else {
            echo "<script type='text/javascript'> alert('NOT Registered')</script>";
        }
    }
}
?>
<!doctype html>
<html lang="en-us" dir="ltr">

<head>
    <meta charset="UTF-8">
    <title>Register</title>
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
            <div class="logreg" id="pass2">
                <h1>Register</h1>
                <form method="post">
                    <div class="form_grp">
                        <input type="text" placeholder="First Name" required name="fname">
                    </div>
                    <div class="form_grp">
                        <input type="text" placeholder="Last Name" required name="lname">
                    </div>
                    <div class="form_grp">
                        <input type="text" placeholder="Email" required name="email">
                    </div>
                    <div class="form_grp">
                        <input type="text" placeholder="Registration Number" required name="regno">
                    </div>
                    <div class="form_grp">
                        <input type="password" placeholder="Password" required name="paswd">
                    </div>
                    <div class="reg_grp">
                        <button type="submit">Register</button>
                    </div>
                </form>
                <div class="form_grp">
                    <p style="margin: 10px 0px;">Already Have an account ? <a href="../html/signin.php">Sign In</a></p>
                </div>
            </div>
        </div>
    </main>
</body>

</html>