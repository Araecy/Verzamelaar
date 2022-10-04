<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
        <link rel="stylesheet" href="css/signupAndLoginStyle.css">
    </head>
    <body>
        <!-- Signup: -->
        <!-- Button to open the modal -->
        <button onclick="document.getElementById('id01').style.display='block'">Sign Up</button>

        <!-- The Modal (contains the Sign Up form) -->
        <div id="id01" class="modal">
            <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
            <form class="modal-content" action="/action_page.php">
                <div class="container">
                    <h1>Sign Up</h1>
                    <p>Please fill in this form to create an account.</p>
                    <hr>
                    <label for="email"><b>Email</b></label>
                    <input type="text" placeholder="Enter Email" name="email" required>

                    <label for="psw"><b>Password</b></label>
                    <input type="password" placeholder="Enter Password" name="psw" required>

                    <label for="psw-repeat"><b>Repeat Password</b></label>
                    <input type="password" placeholder="Repeat Password" name="psw-repeat" required>

                    <label>
                        <input type="checkbox" checked="checked" name="remember" style="margin-bottom:15px"> Remember me
                    </label>

                    <p>By creating an account you agree to our <a href="#" style="color:dodgerblue">Terms & Privacy</a>.</p>

                    <div class="clearfix">
                        <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
                        <button type="submit" class="signupbtn">Sign Up</button>
                    </div>
                </div>
            </form>
        </div>
        
        <!-- Login: -->
        <!-- Button to open the modal login form -->
        <button onclick="document.getElementById('id02').style.display='block'" class="loginButton">Login</button>

        <!-- The Modal -->
        <div id="id02" class="modal2">
            <span onclick="document.getElementById('id02').style.display='none'" class="close" title="Close Modal">&times;</span>

            <!-- Modal Content -->
            <form class="modal-content2 animate" action="/action_page.php">
                <div class="container">
                    <label for="uname"><b>Username</b></label>
                    <input type="text" placeholder="Enter Username" name="uname" class="loginInput" required>

                    <label for="psw"><b>Password</b></label>
                    <input type="password" placeholder="Enter Password" name="psw" class="loginInput" required>

                    <button type="submit" class="loginButton">Login</button>
                    <label>
                        <input type="checkbox" checked="checked" name="remember" class="loginInput"> Remember me
                    </label>
                </div>

                <div class="container" style="background-color:#1e1e1e">
                    <button type="button" onclick="document.getElementById('id02').style.display='none'" class="cancelbtn2 loginButton">Cancel</button>
                    <span class="psw">Forgot <a href="#">password?</a></span>
                </div>
            </form>
        </div>
        <script src="js/signupAndLoginScript.js"></script>
    </body>
</html>