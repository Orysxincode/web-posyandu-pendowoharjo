<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login | Posyandu Pendowoharjo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link href="/css/style.css" rel="stylesheet">
  </head>
  <body class="web-background">
    <div class="row justify-content-center">
      <div class="col-md-4 justify-content-center">    
        <main class="form-signin w-100 m-auto">
          <img class="mb-4 rounded mx-auto d-block" src="/img/logo_posyandu.svg" alt="">
          <h1 class="h3 mb-3 fw-normal text-center">Login</h1>
          <form action="dashboard">
            <div class="form-floating">
              <input type="email" class="form-control" id="floatingInput" placeholder="nama@contoh.com">
              <label for="floatingInput">Alamat Email</label>
            </div>
            <div class="form-floating">
              <input type="password" class="form-control" id="floatingPassword" placeholder="Sandi">
              <label for="floatingPassword">Kata Sandi</label>
            </div>
            <button class="w-100 btn btn-lg bg-success text-light" type="submit">Masuk</button>
          </form>
        </main>
      </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  </body>
</html>