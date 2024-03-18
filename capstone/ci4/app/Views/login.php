<!DOCTYPE html>
<html>
<head>
  <title>Login</title>
</head>
<body style="font-family: Arial, sans-serif; margin: 0; padding: 0; background-image: url('/img/green.jpg'); background-size: cover; background-position: center; height: 100vh; display: flex; justify-content: center; align-items: center;">

  <div class="container" style="width: 25%; background-color: rgba(255, 255, 255, 0.8); padding: 20px; border-radius: 5px; box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);">
    <h2 style="text-align: center;">Login</h2>
    <form id="loginForm" action="/dash" method="POST"> <!-- Updated action attribute for testing purposes -->
      <div class="form-group" style="margin-bottom: 15px;">
        <label for="Username" style="display: block; font-weight: bold;">Username:</label>
        <input type="text" id="Username" name="Username" required style="width: calc(100% - 16px); padding: 8px; border-radius: 5px; border: 1px solid #ccc; margin-top: 6px;">
      </div>
      <div class="form-group" style="margin-bottom: 15px;">
        <label for="password" style="display: block; font-weight: bold;">Password:</label>
        <input type="password" id="password" name="password" required style="width: calc(100% - 16px); padding: 8px; border-radius: 5px; border: 1px solid #ccc; margin-top: 6px;">
      </div>
      <button type="submit" id="loginButton" style="padding: 10px 20px; background-color: #007bff; color: #fff; border: none; border-radius: 5px; cursor: pointer; display: block; margin: 20px auto 0;">Login</button>
      <div id="countdownMessage" class="col-12" style="display: none;">
        <p class="small mb-0" style="text-align: center;">Too many incorrect attempts. Input disabled for <span id="countdown"></span> seconds.</p>
      </div>
      <div class="col-12">
        <p class="small mb-0" style="text-align: center;">Don't have an account? <a href="register.php">Create an account</a></p>
      </div>
    </form>
  </div>

  <script>
var attempts = 0; // Initialize the attempts counter
var disabled = false; // Flag to track if the input is disabled

document.getElementById('loginForm').addEventListener('submit', function(event) {
  event.preventDefault(); // Prevent form submission

  if (disabled) {
    return; // Do nothing if input is disabled
  }

  var username = document.getElementById('Username').value; // Changed 'email' to 'Username'
  var password = document.getElementById('password').value;

  // Check if the entered credentials match the default ones
  if (username === 'DepartmentOfAgricultureNaujan' && password === 'GreenHouseNaujan_2024') {
    alert('Login successful!');
    // Redirect to dashboard upon successful login
    window.location.href = 'dashboard.php'; // Replace 'dashboard.php' with your dashboard URL
  } else {
    attempts++; // Increment attempts counter
    if (attempts >= 3) {
      disabled = true; // Disable input after three failed attempts
      document.getElementById('Username').disabled = true;
      document.getElementById('password').disabled = true;
      document.getElementById('countdownMessage').style.display = 'block';
      var countdown = 30; // Countdown time in seconds
      var countdownInterval = setInterval(function() {
        document.getElementById('countdown').innerText = countdown;
        countdown--;
        if (countdown < 0) {
          clearInterval(countdownInterval);
          document.getElementById('Username').disabled = false;
          document.getElementById('password').disabled = false;
          document.getElementById('countdownMessage').style.display = 'none';
          attempts = 0; // Reset attempts counter
          document.getElementById('loginButton').disabled = false; // Enable login button
        }
      }, 1000); // Update every second
    } else {
      alert('Incorrect username or password. Please try again.');
    }
  }
});
</script>

</body>
</html>
