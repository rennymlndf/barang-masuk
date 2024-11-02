<!DOCTYPE html>
<html lang="en">

<head>
<<<<<<< HEAD

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SB Admin 2 - Login</title>

    <!-- Custom fonts for this template-->
    <link href="/sbadmin/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">
    <!-- Custom styles for this template-->
    <link href="/sbadmin/css/sb-admin-2.min.css" rel="stylesheet">
</head>
<body class="bg-gradient-primary">
    <div class="container">
        <!-- Outer Row -->
        <div class="row justify-content-center">
            <div class="col-xl-10 col-lg-12 col-md-9">
                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->
                        <div class="row">
                            
                            <div class="col-lg-6 d-none d-lg-block bg-login-image">
                                <br/>
                                <img src="/sbadmin/logo.png" width="70%">
                            </div>

                            <div class="col-lg-6">
                                <div class="p-5">
                                    <div class="text-center">
                                        <h1 class="h4 text-gray-900 mb-4">LOGIN INVENTARIS</h1>
                                    </div>

                                    {{-- form login --}}
                                    <form class="user" action="/login" method="POST">                                        
                                        @csrf

                                        <div class="form-group">
                                            <input type="text" name="username" class="form-control form-control-user">
                                        </div>
                                        <div class="form-group">
                                            <input type="password" name="password" class="form-control form-control-user">
                                        </div>
                                        <button type="submit" class="btn btn-primary btn-user btn-block">
                                            Login
                                        </button>
                                    </form>
                                    {{-- --------------------------- --}}

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
=======
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
>>>>>>> f740081e01a72c1b1f5fee510fcffd5c0d9535a4
            </div>
        </div>
    </div>
<<<<<<< HEAD

    <!-- Bootstrap core JavaScript-->
    <script src="/sbadmin/vendor/jquery/jquery.min.js"></script>
    <script src="/sbadmin/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="/sbadmin/vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="/sbadmin/js/sb-admin-2.min.js"></script>

</body>

</html>
=======
    
    <!-- Bootstrap JS -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/5.3.2/js/bootstrap.bundle.min.js"></script>
</body>
</html>
>>>>>>> f740081e01a72c1b1f5fee510fcffd5c0d9535a4
