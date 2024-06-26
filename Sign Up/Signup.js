// JavaScript code (script.js)
document.addEventListener('DOMContentLoaded', function() {
    // Add event listener to the sign-up form submit button
    var signUpForm = document.querySelector('.Sign-Up-form');
    signUpForm.addEventListener('submit', function(event) {
      event.preventDefault(); // Prevent the form from submitting
  
      // Get the input values
      var firstName = document.querySelector('input[placeholder="First Name"]').value;
      var lastName = document.querySelector('input[placeholder="Last Name"]').value;
      var email = document.querySelector('input[placeholder="Email"]').value;
      var password = document.querySelector('input[placeholder="Password"]').value;
      var confirmPassword = document.querySelector('input[placeholder="Confirm Password"]').value;
  
      // Perform validation (You can add your own validation logic here)
      if (firstName === '') {
        alert('Please enter your first name');
        return;
      }
  
      if (lastName === '') {
        alert('Please enter your last name');
        return;
      }
  
      if (email === '') {
        alert('Please enter your email');
        return;
      }
  
      if (password === '') {
        alert('Please enter your password');
        return;
      }
  
      if (confirmPassword === '') {
        alert('Please confirm your password');
        return;
      }
  
      if (password !== confirmPassword) {
        alert('Passwords do not match');
        return;
      }
  
      // Send the sign-up data to the server using AJAX
      var xhr = new XMLHttpRequest();
      xhr.open('POST', 'signup.php', true);
      xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
      xhr.onreadystatechange = function() {
        if (xhr.readyState === XMLHttpRequest.DONE && xhr.status === 200) {
          var response = JSON.parse(xhr.responseText);
          if (response.success) {
            alert('Sign-up successful');
            // Redirect the user to a new page or perform any other actions
          } else {
            alert('Sign-up failed. Please try again.');
          }
        }
      };
      var data = 'firstName=' + encodeURIComponent(firstName) + '&lastName=' + encodeURIComponent(lastName) + '&email=' + encodeURIComponent(email) + '&password=' + encodeURIComponent(password);
      xhr.send(data);
    });
  });
  