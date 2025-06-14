<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>KVAPS|SIGN UP</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" />
  <link href="https://fonts.googleapis.com/css2?family=Inter&display=swap" rel="stylesheet" />
  <style>
    body, html {
      height: 100%;
      background-color: #000;
      font-family: 'Inter', sans-serif;
    }
    .form-container {
      max-width: 360px;
      width: 100%;
      color: white;
    }
    .form-title {
      font-weight: 900;
      font-size: 86px;
      letter-spacing: 1px;
      
    }
    .form-subtitle {
      margin-top: -30px;
      font-weight: 400;
      font-size: 32px;
      margin-bottom: 2rem;
      opacity: 0.85;
      text-transform: lowercase;
    }
    .btn-toggle-group {
      border-radius: 30px;
      overflow: hidden;
      display: flex;
      margin-bottom: 1.5rem;
      user-select: none;
      border: none;
      width: 100%;
      box-shadow: none;
    }
    .btn-toggle-group button {
      flex: 1;
      font-weight: 600;
      border: none;
      border-radius: 0;
      padding: 0.5rem 0;
      cursor: pointer;
      transition: background-color 0.3s ease;
    }
    .btn-toggle-group button:first-child {
      border-top-left-radius: 30px;
      border-bottom-left-radius: 30px;
    }
    .btn-toggle-group button:last-child {
      border-top-right-radius: 30px;
      border-bottom-right-radius: 30px;
    }
    .btn-login-inactive {
      background-color: white;
      color: black;
    }
    .btn-login-active {
      background-color: #00cfff;
      color: black;
    }
    .form-control {
      border-radius: 0.25rem;
      margin-bottom: 1rem;
      height: 2.75rem;
      font-size: 1rem;
      background-color: #fff;
      color: #000;
      border: none;
      padding-left: 0.75rem;
    }
    .form-control::placeholder {
      color: #999;
    }
    .btn-submit {
      background-color: #7c00ff;
      border: none;
      font-weight: 600;
      height: 2.75rem;
      font-size: 1rem;
      transition: background-color 0.3s ease;
      color: white;
    }
    .btn-submit:hover {
      background-color: #5a00cc;
    }
  </style>
</head>
<body>
  <div class="d-flex justify-content-center align-items-center vh-100">
    <form class="form-container text-center" autocomplete="off" action="signupphp.php" method="POST">
      <div class="form-title">KVAPS</div>
      <div class="form-subtitle">meme always</div>

      <div class="btn-toggle-group mb-4" role="group" aria-label="Login or Sign up">
        <button type="button" class="btn-login-inactive" id="loginTab">login</button>
        <button type="button" class="btn-login-active" id="signUpTab">Sign up</button>
      </div>

      <input name="email" type="email" class="form-control" placeholder="Email" required />
      <input name="login" type="text" class="form-control" placeholder="login" required />
      <input name="pass" type="password" class="form-control" placeholder="Password" required />
      <input type="password" class="form-control" placeholder="Confirm password" required />
      <button type="submit" class="btn btn-submit w-100">Sign up</button>
    </form>
  </div>
  <script>
    document.getElementById('loginTab').addEventListener('click', () => {
    window.location.href = 'login.php';
    });
  </script>
</body>
</html>