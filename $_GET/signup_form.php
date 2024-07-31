<!DOCTYPE html>
<html>
<head>
    <title>Signup Form</title>
    <style>
	.password-wrapper {
	    position: relative;
	    display: inline-block;
	}

	.password-wrapper input[type="password"] {
	    padding-right: 30px; /* Make room for the eye icon inside the input field */
	}

	.toggle-password {
	    position: absolute;
	    right: 0;
	    top: 0;
	    border: none;
	    background: transparent;
	    cursor: pointer;
	    outline: none;
	    padding: 0 10px;
	    height: 100%;
	}

	button:focus {
	    outline: none;
	}
	</style>

</head>
<body>

<div style="text-align: center;">
    <i>Post Signup Form</i>
    <form action="$_Post_variable.php" method="post">
        <ins>Enter Username:</ins>
        <input type="text" name="username"><br>
        <ins>Enter Password:</ins>
        <div class="password-wrapper">
            <input type="password" id="passwad" name="passwad">
            <button type="button" onclick="togglePasswordVisibility()" class="toggle-password">👁</button>
        </div><br>
        <input type="submit" name="submit" value="Signup">
    </form>
</div>

<script>
function togglePasswordVisibility() {
    var passwordInput = document.getElementById("passwad");
    if (passwordInput.type === "password") {
        passwordInput.type = "text";
    } else {
        passwordInput.type = "password";
    }
}
</script>

</body>
</html>
