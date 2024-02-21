<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>dashboard</title>
    <style>
        body {
    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    background-color: #f0f2f5;
    margin: 0;
    padding: 0;
    display: flex;
    align-items: center;
    justify-content: center;
    height: 100vh;
}

.login-container {
    background-color: #fff;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    border-radius: 8px;
    overflow: hidden;
    width: 400px;
    text-align: center;
}

.login-header {
    background-color: #1877f2;
    color: #fff;
    padding: 20px;
}

.login-header h2 {
    margin: 0;
}

.login-form {
    padding: 20px;
    box-sizing: border-box;
}

.login-input {
    width: 100%;
    padding: 10px;
    margin-bottom: 15px;
    border: 1px solid #ddd;
    border-radius: 4px;
    box-sizing: border-box;
}

.login-button {
    background-color: #1877f2;
    color: #fff;
    padding: 10px 15px;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}

.login-button:hover {
    background-color: #145993;
}

.login-footer {
    padding: 10px;
    background-color: #f0f2f5;
    border-top: 1px solid #ddd;
}

.login-footer a {
    color: #1877f2;
    text-decoration: none;
}

.login-footer a:hover {
    text-decoration: underline;
}
    </style>
</head>
</head>
<body>

  <div class="login-container">
    <div class="login-header">
      <h2>Login</h2>
    </div>
    <div class="login-form">
    <input type="text" class="login-input" id="username" placeholder="Email or Phone" required>
      <input type="password" class="login-input" id="password" placeholder="Password" required>
      <button type="button" class="login-button" onclick="validateLogin()">Login</button>
    </div>
    <div class="login-footer">
      <a href="#">Forgot password?</a>
    </div>
  </div>

  <script>
    // click enter instead of mouse
    document.getElementById('username').addEventListener('keypress', function(event) {
  if (event.key === 'Enter') {
    event.preventDefault(); // Prevent the default Enter key behavior (like new line)
    validateLogin();
  }
});
document.getElementById('password').addEventListener('keypress', function(event) {
  if (event.key === 'Enter') {
    event.preventDefault(); // Prevent the default Enter key behavior (like new line)
    validateLogin();
  }
});

// if username and pass == admin then go 
    function validateLogin() {
      var username = document.getElementById('username').value;
      var password = document.getElementById('password').value;

      // Check if the credentials are valid
      if (username === 'admin' && password === 'admin') {
        alert('Login successful! Redirecting...');
        window.location.href = 'admin.php';
        // You can redirect to another page or perform other actions here
      } else {
        alert('Invalid credentials. Please try again.');
      }
    }

 </script>

</body>

</html>