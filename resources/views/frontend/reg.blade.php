
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
</head>

    <title>Registeration</title>
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
        .form-box .loginform{
            transition-delay: .25s;
        }
        .form-box.active .loginform{
            left: -100%;
            transition-delay: 0;
        }
        .form-box .registerform{
            left: 100%;
            transition-delay: 0;
        }
        .form-box.active .registerform{
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
        .form form input[value="Register"]{
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
            color: rgb(255, 41, 41);
            font-size: 14px;
            font-weight: 800;
            margin-top: 10px;
            display: block;
            text-align: center;
        }
        .cancel-btn {
            position: absolute;
            top: 10px;
            left: 10px;
            background: transparent;
            border: none;
            cursor: pointer;
            font-size: 24px;
            color: #000;
        }
        .cancel-btn i {
            font-size: 24px;
            color: #333;
        }

         @media (max-width: 790px) {
            .container {
                margin: 0 10px;
            }
            .orange {
                padding: 10px;
            }
        }
        @media (max-width: 480px) {
            .orange h2 {
                font-size: 1em;
            }
            .orange button {
                font-size: 14px;
            }
            .form-box form input {
                font-size: 14px;
            }
        }
    </style>
</head>
<body>
    <div class="container">

        <div class="orange">
            <div class="box login">
                <h2>Already Have An Account?</h2>
                <button class="loginbtn">Log In</button>
            </div>
            <div class="box register">
                <h2>Create An Account?</h2>
                <button class="registerbtn">Register</button>
            </div>
        </div>

           <div class="form-box">
               <div class="form loginform">
                <button class="cancel-btn" onclick="goHome()">
                    <i class="fas fa-arrow-left"></i>
                </button>
                <form action="{{ route('login.submit') }}" method="POST">
                    @csrf
                    <h3>Log In</h3>
            <input type="text" placeholder="Username or Email" name="login" required>
                    <input type="password" placeholder="Password" name="password">
            <label for="showPassword">
                <input type="checkbox" id="showPassword"> Show Password
            </label>
            <input type="submit" value="Log In">
            <div class="error-message" id="loginError"></div>
                </form>
            </div>

            <div class="form registerform">
                <button class="cancel-btn" onclick="goHome()">
                    <i class="fas fa-arrow-left"></i>
                </button>
                <form id="registerForm" action="{{ route('registeration') }}" method="POST" onsubmit="return validateRegisterForm()">
                    @csrf
                    <h3>Register</h3>
                    <input type="text" name="username" value="{{ old('username') }}" placeholder="Username">
<input type="email" name="email" value="{{ old('email') }}" placeholder="Email Address">

                    <input type="password" placeholder="Password" id="password" name="reg_password">
                    <input type="password" placeholder="Confirm Password" id="password_confirmation" name="password_confirmation">
            <label for="showRegisterPassword">
                <input type="checkbox" id="showRegisterPassword"> Show Password
            </label>
                    <input type="submit" value="Register">
                </form>
                <div class="error-message" id="generalError"></div>
            </div>
        </div>
    </div>

    <script>

 const loginError = `{{ $errors->first('login') ?? '' }}`;
    if (loginError) {
        document.getElementById('loginError').textContent = loginError;
    }
        const loginbtn = document.querySelector('.loginbtn');
        const registerbtn = document.querySelector('.registerbtn');
        const formbox = document.querySelector('.form-box');
        const body = document.querySelector('body');

        registerbtn.onclick = function() {
            formbox.classList.add('active');
            body.classList.add('active');
        };

        loginbtn.onclick = function() {
            formbox.classList.remove('active');
            body.classList.remove('active');
        };

        function goHome() {
            window.location.href = '/';
        }
        document.getElementById('showPassword').addEventListener('change', function() {
    const passwordField = document.querySelector('[name="password"]');
    passwordField.type = this.checked ? 'text' : 'password';
});
document.getElementById('showRegisterPassword').addEventListener('change', function() {
    const passwordField = document.getElementById('password');
    const confirmPasswordField = document.getElementById('password_confirmation');

    if (this.checked) {
        passwordField.type = 'text';
        confirmPasswordField.type = 'text';
    } else {
        passwordField.type = 'password';
        confirmPasswordField.type = 'password';
    }
});
const usernameError = `{{ $errors->first('username') ?? '' }}`;
if (usernameError) {
    document.getElementById('generalError').textContent = usernameError;
    document.querySelector('.form-box').classList.add('active');
    document.body.classList.add('active');
}
const emailError = `{{ $errors->first('email') ?? '' }}`;
if (emailError) {
    document.getElementById('generalError').textContent = emailError;
    document.querySelector('.form-box').classList.add('active');
    document.body.classList.add('active');
}
// const passwordError = `{{ $errors->first('password') ?? '' }}`;
// if (passwordError) {
//     document.getElementById('generalError').textContent = passwordError;
//     document.querySelector('.form-box').classList.add('active');
//     document.body.classList.add('active');
// }

const loginPasswordError = `{{ $errors->first('password') ?? '' }}`;
if (loginPasswordError) {
    document.getElementById('loginError').textContent = loginPasswordError;
}

const registerPasswordError = `{{ $errors->first('reg_password') ?? '' }}`;
if (registerPasswordError) {
    document.getElementById('generalError').textContent = registerPasswordError;
    document.querySelector('.form-box').classList.add('active');
    document.body.classList.add('active');
}

        // function validateRegisterForm() {
        //     document.getElementById('generalError').textContent = '';

        //     const username = document.getElementById('username').value.trim();
        //     const email = document.getElementById('email').value.trim();
        //     const password = document.getElementById('password').value.trim();
        //     const confirmPassword = document.getElementById('password_confirmation').value.trim();

        //     if (!username || !email || !password || !confirmPassword) {
        //         document.getElementById('generalError').textContent = 'All fields must be filled out.';
        //         return false;
        //     }
        //     let isValid = true;


// if (!username) {
//     document.getElementById('generalError').textContent = 'Username is required.';
//     isValid = false;
// } else if (!/^[a-zA-Z0-9 ]+$/.test(username)) {
//     document.getElementById('generalError').textContent = 'Username can only contain letters, numbers, and spaces.';
//     isValid = false;
// }

//if (!email) {
    //document.getElementById('generalError').textContent = 'Email is required.';
   // isValid = false;
//} else if (!/\S+@\S+\.\S+/.test(email)) {
    //document.getElementById('generalError').textContent = 'Invalid email format.';
  //  isValid = false;
//}

// if (!password) {
//     document.getElementById('generalError').textContent = 'Password is required.';
//     isValid = false;
// } else if (password.length < 8) {
//     document.getElementById('generalError').textContent = 'Password must be at least 8 characters long.';
//     isValid = false;
// }
//     if (password !== confirmPassword) {
//         document.getElementById('generalError').textContent = 'Passwords do not match.';
//         isValid = false;
//     }


    // if (!isValid) {
    //     event.preventDefault();
    // }

    // return isValid;


    //     }
    </script>
</body>
