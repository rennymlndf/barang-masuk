<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login Form</title>
  <link 
    rel="stylesheet" 
    href="https://maxcdn.bootstrapcdn.com/bootstrap/5.3.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container vh-100 d-flex justify-content-center align-items-center">
        <div class="card p-4 shadow-lg" style="width: 400px;">
          <h2 class="text-center mb-4">Login</h2>
          <form>
            <!-- Input Username -->
            <div class="mb-3">
              <label for="username" class="form-label">Username</label>
              <input type="text" class="form-control" id="username" placeholder="Enter your username" required>
            </div>
      
            <!-- Input Password -->
            <div class="mb-3">
              <label for="password" class="form-label">Password</label>
              <input type="password" class="form-control" id="password" placeholder="Enter your password" required>
            </div>
      
            <!-- Checkbox Remember Me -->
            <div class="mb-3 form-check">
              <input type="checkbox" class="form-check-input" id="rememberMe">
              <label class="form-check-label" for="rememberMe">Remember Me</label>
            </div>
      
            <!-- Submit Button -->
            <button type="submit" class="btn btn-primary w-100">Login</button>
          </form>
      
          <div class="text-center mt-3">
            <a href="#">Forgot password?</a>
          </div>
        </div>
      </div>
      
      <!-- Bootstrap JS -->
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/5.3.2/js/bootstrap.bundle.min.js"></script>