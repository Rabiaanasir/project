@extends('frontend.app')
@section('css')
@include('css.common_css')
  @include('css.reg_css')
@endsection
@section('content')
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
@endsection
@section('js')
@include('js.reg_js')
@endsection