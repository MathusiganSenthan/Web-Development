// JavaScript code
document.addEventListener('DOMContentLoaded', function() {
    // Add event listener to the login form submit button
    var loginForm = document.querySelector('.login-form');
    loginForm.addEventListener('submit', function(event) {
      event.preventDefault(); // Prevent the form from submitting
  
      // Get the input values
      var username = document.querySelector('input[type="text"]').value;
      var password = document.querySelector('input[type="password"]').value;
  
      // Perform validation (You can add your own validation logic here)
      if (username === '') {
        alert('Please enter your username');
        return;
      }
  
      if (password === '') {
        alert('Please enter your password');
        return;
      }
  
      // Send the login data to the server using AJAX
      var xhr = new XMLHttpRequest();
      xhr.open('POST', 'login.php', true);
      xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
      xhr.onreadystatechange = function() {
        if (xhr.readyState === XMLHttpRequest.DONE && xhr.status === 200) {
          var response = JSON.parse(xhr.responseText);
          if (response.success) {
            alert('Login successful');
            // Redirect the user to a new page or perform any other actions
          } else {
            alert('Login failed. Please try again.');
          }
        }
      };
      var data = 'username=' + encodeURIComponent(username) + '&password=' + encodeURIComponent(password);
      xhr.send(data);
    });
  });
  