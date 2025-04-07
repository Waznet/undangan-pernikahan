// src/js/login.js

document.addEventListener('DOMContentLoaded', function() {
  const loginForm = document.getElementById('login-form');
  const loginError = document.getElementById('login-error');
  const togglePassword = document.querySelector('.toggle-password');
  const passwordField = document.getElementById('password');
  
  // Toggle password visibility
  togglePassword.addEventListener('click', function() {
      const type = passwordField.getAttribute('type') === 'password' ? 'text' : 'password';
      passwordField.setAttribute('type', type);
      
      // Toggle eye icon
      togglePassword.querySelector('i').classList.toggle('bi-eye');
      togglePassword.querySelector('i').classList.toggle('bi-eye-slash');
  });
  
  // Handle form submission
  loginForm.addEventListener('submit', function(e) {
      e.preventDefault();
      
      const username = document.getElementById('username').value;
      const password = passwordField.value;
      
      // Simple validation - replace with your actual authentication logic
      if (username === 'admin' && password === 'password') {
          // Store in session storage that user is logged in
          sessionStorage.setItem('loggedIn', 'true');
          
          // If remember me is checked, store in local storage
          if (document.getElementById('remember-me').checked) {
              localStorage.setItem('rememberUser', 'true');
              localStorage.setItem('username', username);
          } else {
              localStorage.removeItem('rememberUser');
              localStorage.removeItem('username');
          }
          
          // Redirect to dashboard
          window.location.href = 'dashboard.html';
      } else {
          // Show error message with animation
          loginError.style.display = 'block';
          loginError.classList.add('shake');
          
          // Remove animation class after it completes
          setTimeout(() => {
              loginError.classList.remove('shake');
          }, 820);
      }
  });
  
  // Check if user has selected "remember me" previously
  if (localStorage.getItem('rememberUser') === 'true') {
      document.getElementById('username').value = localStorage.getItem('username') || '';
      document.getElementById('remember-me').checked = true;
  }
  
  // Check if user is already logged in
  if (sessionStorage.getItem('loggedIn') === 'true') {
      window.location.href = 'dashboard.html';
  }
});