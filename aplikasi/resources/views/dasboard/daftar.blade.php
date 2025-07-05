<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Daftar</title>
  <!--Icon-->
          <link href="{{asset('images/logosekolah.png')}}" rel="icon">
  <link rel="stylesheet" href="style.css"/>
    
    <style>
        /* Reset & Font */
* {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  font-family: 'Segoe UI', sans-serif;
}

/* Background image */
.background {
  background: url('images/logosekolah.png') no-repeat center center fixed;
  background-size: cover;
  filter: blur(5px);
  position: absolute;
  width: 100%;
  height: 100%;
  z-index: -1;
}

/* Overlay to darken */
.overlay {
  background: rgba(0, 0, 0, 0.5);
  min-height: 100vh;
  display: flex;
  align-items: center;
  justify-content: center;
  padding: 1rem;
}

/* Daftar Akun*/
.register-container {
  background: white;
  padding: 2rem;
  width: 100%;
  max-width: 420px;
  border-radius: 16px;
  text-align: center;
  box-shadow: 0 10px 25px rgba(0, 0, 0, 0.3);
}

.logo {
  width: 80px;
  margin-bottom: 1rem;
}

h2 {
  color: #333;
  margin-bottom: 1.5rem;
}

.input-group {
  text-align: left;
  margin-bottom: 1rem;
}

.input-group label {
  display: block;
  margin-bottom: 0.5rem;
  color: #555;
}

.input-group input {
  width: 100%;
  padding: 0.75rem;
  border: 1px solid #ccc;
  border-radius: 8px;
  outline: none;
  transition: border 0.3s;
}

.input-group input:focus {
  border-color: #007bff;
}

button {
  width: 100%;
  padding: 0.75rem;
  background: #007bff;
  color: white;
  border: none;
  border-radius: 8px;
  font-size: 1rem;
  cursor: pointer;
  transition: background 0.3s;
}

button:hover {
  background: #0056b3;
}

.footer-text {
  margin-top: 1rem;
  font-size: 0.9rem;
}

.footer-text a {
  color: #007bff;
  text-decoration: none;
}

/* Responsiveness */
@media (max-width: 480px) {
  .login-container {
    padding: 1.5rem;
  }

  .logo {
    width: 60px;
  }

  h2 {
    font-size: 1.5rem;
  }
}    
    </style>

</head>
<body>
   <div class="background"></div>
  <div class="overlay">
    <div class="register-container">
      <img src="images/logosekolah.png" alt="Logo Sekolah" class="logo"/>
      <h2>Daftar Akun</h2>
      <form action="daftarmurid" method="POST">
        @csrf
          <div class="input-group">
            <label for="nama">Nama Lengkap</label>
            <input type="text" id="nama" name="nama" required />
          </div>
          <div class="input-group">
            <label for="email">Email</label>
            <input type="email" id="email" name="email" required />
          </div>
          <div class="input-group">
            <label for="password">Password</label>
            <input type="password" id="password" name="password" required />
          </div>
          <div class="input-group">
            <label for="confirm">Konfirmasi Password</label>
            <input type="password" id="confirm" name="confirm" required />
          </div>
        <button type="submit">Daftar</button>
      </form>
      <p class="footer-text">Sudah punya akun? <a href="/login">Login di sini</a></p>
    </div>
  </div>
</body>
</html>