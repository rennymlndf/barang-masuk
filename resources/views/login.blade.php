<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login Form</title>
  
  <!-- Bootstrap CSS -->
  <link 
    rel="stylesheet" 
    href="https://maxcdn.bootstrapcdn.com/bootstrap/5.3.2/css/bootstrap.min.css">
  
  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">

  <style>
    /* Styling body untuk background dan font */
    body {
      background: linear-gradient(to right, #6a11cb, #2575fc);
      font-family: 'Poppins', sans-serif;
      height: 100vh;
      margin: 0;
      display: flex;
      justify-content: center;
      align-items: center;
    }

    /* Card Styling */
    .card {
      border: none;
      border-radius: 15px;
      padding: 40px;
      width: 400px;
      background-color: #ffffff;
      box-shadow: 0 10px 20px rgba(0, 0, 0, 0.15);
    }

    h2 {
      font-weight: 600;
      color: #333;
    }

    .form-label {
      font-weight: 500;
    }

    .btn-primary {
      background-color: #2575fc;
      border: none;
      transition: background-color 0.3s, transform 0.2s;
    }

    .btn-primary:hover {
      background-color: #1b63d2;
      transform: scale(1.02);
    }

    .form-check-label {
      font-weight: 400;
    }

    a {
      color: #2575fc;
      text-decoration: none;
      transition: color 0.2s;
    }

    a:hover {
      color: #1b63d2;
    }
  </style>
</head>
<body>
    <div class="container vh-100 d-flex justify-content-center align-items-center">
        <div class="card p-4 shadow-lg">
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
</body>
</html>
