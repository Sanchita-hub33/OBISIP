<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register & Login</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container" id="signUp" style="display: none;">
        <h2 id="title">Register</h2>
        <form method="post" action="register.php">
            <div class="inputForm">
                <input type="text" name="fName" id="fName" placeholder="First Name" required>
                <label for="fName">First name</label>
            </div>
            <div class="inputForm">
                <input type="text" name="lName" id="fName"placeholder="Last Name" required>
                <label for="lName">Last name</label>
            </div>
            <div class="inputForm">
                <input type="email" name="mailId" id="mailId" placeholder="Email" required>
                <label for="mailId">Email</label>
            </div>
            <div class="inputForm">
                <input type="password" name="pass" id="pass" placeholder="Password" required>
                <label for="pass">Password</label>
            </div>
            <input type="submit" value="Sign Up" class="btn" name = "signUp" id="up-btn-input" required>
        </form>
        <div class="links">
            <p>Already have an account?</p>
            <button type="submit" id="signIn-btn">Sign In</button>
        </div>
    </div>

    <div class="container" id="signIn">
        <h2 id="title">Sign In</h2>
        <form method="post" action="register.php">
            <div class="inputForm">
                <input type="email" name="mailId" id="mailId" placeholder="Email" required>
                <label for="mailId">Email</label>
            </div>
            <div class="inputForm">
                <input type="password" name="pass" id="pass" placeholder="Password" required>
                <label for="pass">Password</label>
            </div>
            
            <input type="submit" value="Sign In" class="btn" name = "signIn"required>
        </form>
        <div class="links">
            <p>Don't have account yet?</p>
            <button type="submit" id="signUp-btn">Sign Up</button>
        </div>
    </div>

    <script src="script.js"></script>
</body>
</html>