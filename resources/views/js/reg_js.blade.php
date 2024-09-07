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