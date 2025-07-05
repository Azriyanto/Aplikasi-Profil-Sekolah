<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Login</title>
  <!--Icon-->
    <link href="{{asset('images/logosekolah.png')}}" rel="icon">
    <link rel="stylesheet" href="style.css"/>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <style>

/* Reset dasar */
* {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  font-family: 'Segoe UI', sans-serif;
}

/* Background dan overlay */
.background {
  position: fixed;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  background: url('images/logosekolah.png') no-repeat center center/cover;
  z-index: -2;
}

.overlay {
  position: fixed;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  background-color: rgba(0, 0, 0, 0.5); /* transparansi */
  display: flex;
  justify-content: center;
  align-items: center;
  z-index: -1;
}

/* Container login */
.login-container {
  background-color: #ffffffcc; /* putih transparan */
  padding: 2rem;
  border-radius: 15px;
  box-shadow: 0 0 15px rgba(0, 0, 0, 0.3);
  width: 100%;
  max-width: 400px;
  text-align: center;
  animation: fadeIn 1s ease-in-out;
}

/* Logo sekolah */
.logo {
  max-width: 100px;
  margin-bottom: 1rem;
}

/* Judul */
.login-container h2 {
  margin-bottom: 1.5rem;
  color: #333;
}

/* Alert */
.alert {
  padding: 0.75rem;
  border-radius: 5px;
  margin-bottom: 1rem;
}

.alert-success {
  background-color: #d4edda;
  color: #155724;
}

.alert-danger {
  background-color: #f8d7da;
  color: #721c24;
}

/* Input form */
.form-label {
  text-align: left;
  display: block;
  margin-bottom: 0.5rem;
  font-weight: 600;
  color: #333;
}

.form-control {
  width: 100%;
  padding: 0.6rem;
  margin-bottom: 1rem;
  border: 1px solid #ccc;
  border-radius: 8px;
  transition: border 0.3s ease;
}

.form-control:focus {
  border-color: #007bff;
  outline: none;
}

/* Tombol */
.btn {
  padding: 0.75rem;
  border: none;
  border-radius: 8px;
  font-weight: bold;
  cursor: pointer;
  transition: background-color 0.3s ease;
}

.btn-primary {
  background-color: #007bff;
  color: white;
}

.btn-primary:hover {
  background-color: #0056b3;
}

/* Footer link */
.footer-text {
  margin-top: 1rem;
  font-size: 0.9rem;
}

.footer-text a {
  color: #007bff;
  text-decoration: none;
}

.footer-text a:hover {
  text-decoration: underline;
}

/* Animasi */
@keyframes fadeIn {
  from { opacity: 0; transform: translateY(-20px); }
  to { opacity: 1; transform: translateY(0); }
}

/* Responsive */
@media screen and (max-width: 480px) {
  .login-container {
    padding: 1.5rem;
    border-radius: 10px;
    width: 90%;
  }

  .logo {
    max-width: 80px;
  }

  .form-control {
    font-size: 0.95rem;
  }

  .btn {
    font-size: 1rem;
  }

  .footer-text {
    font-size: 0.85rem;
  }
}

</style>

</head>
<body>
  <div class="background"></div>
  <div class="overlay">
    <div class="login-container">
      <img src="images/logosekolah.png" alt="Logo Sekolah" class="logo"/>
      <h2>Login</h2>
      @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
      @endif

      @if($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $item)
                    <li>{{ $item }}</li>
                @endforeach
            </ul>
        </div>
      @endif
      <form action="" method="POST">
        @csrf
        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" value="{{old('email')}}" name="email" class="form-control">
        </div>
        <div class="mb-3">
            <label for="password" class="form-label">Password</label>
            <input type="password" name="password" class="form-control">
        </div>
        <div class="mb-3 d-grid">
            <button name="submit" type="submit" class="btn btn-primary">Login</button>
        </div>
      </form>
      <p class="footer-text">Belum punya akun? <a href="/daftar">Daftar</a></p>
    </div>
  </div>
</body>
</html>