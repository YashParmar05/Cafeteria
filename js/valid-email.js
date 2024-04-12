// document.addEventListener('DOMContentLoaded', function() {
//   const registerForm = document.querySelector('form[name="registerForm"]');
//   const emailField = registerForm.querySelector('input[name="email"]');
//   const passwordField = registerForm.querySelector('input[name="password"]');

//   registerForm.addEventListener('submit', function(event) {
//       event.preventDefault(); // Prevent the form from submitting initially

//       // Validate email
//       if (!validateEmail(emailField.value)) {
//           alert('Please enter a valid email address.');
//           return;
//       }

//       // Validate password
//       if (!validatePassword(passwordField.value)) {
//           alert('Password must be at least 8 characters long.');
//           return;
//       }

//       // If everything is valid, submit the form
//       registerForm.submit();
//   });

//   // Function to validate email format
//   function validateEmail(email) {
//       const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
//       return emailRegex.test(email);
//   }

//   // Function to validate password length
//   function validatePassword(password) {
//       return password.length >= 8;
//   }
// });
