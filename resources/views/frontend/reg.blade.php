<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;700&family=Poppins:ital,wght@0,200;1,300&display=swap');
        *{
            margin: 0;
            padding: 0;
            font-family: 'poppins',sans-serif;
        }
        body{
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            background: #ffa500;
            transition: .5s;
        }
        body.active{
            background: #141a46; 
            /* background: #03a9f4; */
        }
        .container{
            position: relative;
            width: 800px;
            height: 500px;
            margin: 20px;
        }
        .orange{
            position: absolute;
            top: 40px;
            display: flex;
            justify-content: center;
            align-items: center;
            width: 100%;
            height: 420px;
            background: rgba(255,255,255,.2);
            box-shadow: 0 5px 45px rgba(0,0,0,.15);
        }
        .orange .box{
            position: relative;
            width: 50%;
            height: 100%;
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column; 
        }
        .form-box{
            position: absolute;
            background: #fff;
            height: 100%;
            width: 50%;
            top: 0;
            left: 0;
            z-index: 1000;
            display: flex;
            justify-content: center;
            align-items: center;
            box-shadow: 0 5px 45px rgba(0,0,0,0.25);
            transition: ease-in-out .5s;
            overflow: hidden;
        }
        .form-box.active{
            left: 50%;
        }
        .box h2{
            color: #fff;
            font-size: 1.2em;
            font-weight: 500;
            margin-bottom: 10px;
        }
        .orange .box button{
            padding: 10px 20px;
            background: #fff;
            color: #000;
            font-size: 16px;
            font-weight: 800;
            border: none;
            cursor: pointer;
        }
        .form-box .form{
            position: absolute;
            width: 80%;
            transition: .5s;
            padding: 50px;
        }
        .form-box .signinform{
            transition-delay: .25s;
        }
        .form-box.active .signinform{
            left: -100%;
            transition-delay: 0;
        }
        .form-box .signupform{
            left: 100%;
            transition-delay: 0;
        }
        .form-box.active .signupform{
            left: 0%;
            transition-delay: .25s;
        }
        .form-box .form form{
            display: flex;
            width: 100%;
            flex-direction: column;
        }
        .form form input{
            margin-bottom: 20px;
            padding: 10px;
            outline: none;
            border: 1px solid #333;
        }
        .form form h3{
            text-align: center;
            font-size: 1.5em;
            font-weight: 800;
            margin-bottom: 20px;
        }
        .form form input[type="submit"]{
            background: #ffa500;
            border: none;
            max-width: 100px;
            color: #fff;
            cursor: pointer;
        }
        .form form input[value="Sign Up"]{
            background: #141a46;
            border: none;
            max-width: 100px;
            color: #fff;
            cursor: pointer;
        }
        a{
            color: #333;
            font-size: 14px;
        }
        .error-message {
            color: red;
            font-size: 14px;
            font-weight: 300;
            margin-top: 10px;
            display: block;
            text-align: center;
        }
        </style>
</head>
<body>
    <div class="container">
        <div class="orange">
            <div class="box signin">
                <h2>Already Have An Account?</h2>
                <button class="signinbtn">Sign In</button>
            </div> 
            <div class="box signup">
                <h2>Create An Account?</h2>
                <button class="signupbtn">Register</button>
            </div> 
        </div>
        <div class="form-box">
            <div class="form signinform">
                <form>
                    <h3>Sign In</h3>
                    <input type="text" placeholder="Username" name="username">
                    <input type="password" placeholder="Password" name="password">
                    <input type="submit" value="Sign In">
                    <a href="#">Forgot Password?</a>
                </form>
            </div>
            <div class="form signupform">
                <form name="myForm" onsubmit="return validate();" method="post">
                    <h3>Sign Up</h3>
                    <input type="text" placeholder="Username" name="username">
                    <input type="email" placeholder="Email Address" name="email">
                    <input type="password" placeholder="Password" name="password">
                    <input type="password" placeholder="Confirm Password" name="confirmPassword">
                    <span id="formError" class="error-message"></span>
                    <input type="submit" value="Sign Up">
                </form>
            </div>
        </div>
    </div>
    <script>
const signinbtn = document.querySelector('.signinbtn');
const signupbtn = document.querySelector('.signupbtn');
const formbox = document.querySelector('.form-box');
const body = document.querySelector('body');

signupbtn.onclick = function() {
    formbox.classList.add('active');
    body.classList.add('active');
};

signinbtn.onclick = function() {
    formbox.classList.remove('active');
    body.classList.remove('active');
};

// Form validation for sign-up
function validate() {
    let isValid = true;
    let errorMessage = "";

    const username = document.forms["myForm"]["username"].value;
    const email = document.forms["myForm"]["email"].value;
    const password = document.forms["myForm"]["password"].value;
    const confirmPassword = document.forms["myForm"]["confirmPassword"].value;

    // Clear previous error message
    document.getElementById("formError").innerText = "";

    // Validate fields
    if (username === "" || email === "" || password === "" || confirmPassword === "") {
        errorMessage = "*All fields must be filled out.";
        isValid = false;
    }

    if (password !== confirmPassword) {
        if (errorMessage !== "") {
            errorMessage += " ";
        }
        errorMessage += "Passwords must match.";
        isValid = false;
    }

    if (!isValid) {
        document.getElementById("formError").innerText = errorMessage;
    }

    return isValid;
}

</script>

</body>
</html>
