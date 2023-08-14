<!DOCTYPE html>
<html>
  <head> 
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <script src="bootstrap/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,200,0,200" />
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
  <link rel="shortcut icon" href="Ìcone_logo.ico" type="image/x-icon" />
   <title>Login</title> 
   <style>
    body {
      background-image: url("carros.jpg");
    }
    .gradient-custom-2 {



/* Chrome 10-25, Safari 5.1-6 */
background: -webkit-linear-gradient(to right, #2453EE, #36D8D0, #36A0DD, #4595B4);

/* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
background: linear-gradient(to right, #24D0EE, #4A2CCF, #4623E2, #0828DB);
}

@media (min-width: 768px) {
.gradient-form {
height: 100vh !important;
}
}
@media (min-width: 769px) {
.gradient-custom-2 {
border-top-right-radius: .3rem;
border-bottom-right-radius: .3rem;
}
}
   </style> 
  </head>
  
  <body>
  <form  action='database/processUser/processLogin.php' method='POST'>
  <section class="h-100 gradient-form" style="background-color: #000000;">
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-xl-10">
        <div class="card rounded-3 text-black">
          <div class="row g-0">
            <div class="col-lg-6">
              <div class="card-body p-md-5 mx-md-4">

                <div class="text-center">
                  <img src="LongLogo.png"
                    style="width: 195px;" alt="logo">
                  <h4 class="mt-1 mb-5 pb-1">Nós somos a Control Log</h4>
                </div>

                  <p>Faça o login!</p>

                  <div class="form-outline mb-4">
                    <label class="form-label" for="conta">Email</label>
                    <input type="text" id="conta" class="form-control" name='email'/>
                  </div>

                  <div class="form-outline mb-4">
                    <label class="form-label" for="conta">Senha</label>
                    <input type="password" id="conta" class="form-control" name='senha' />
                  </div>

                  <div class="text-center pt-1 mb-5 pb-1">
                  <input class="btn btn-primary w-100 py-2" type="submit" name="logar" value="login">
                    <a class="text-muted" href="#!">Esqueceu sua senha?</a>
                  </div>

                  <div class="d-flex align-items-center justify-content-center pb-4">
                    <p class="mb-0 me-2">Não tem uma conta?</p>
                    <button type="button" class="btn btn-outline-danger">Faça uma nova!!</button>
                  </div>
              </div>
            </div>
            <div class="col-lg-6 d-flex align-items-center gradient-custom-2">
              <div class="text-black px-3 py-4 p-md-5 mx-md-4">
                <h4 class="mb-4">Somos mais que uma ideia</h4>
                <p class="small mb-0">Atendemos clientes de diversos tamanhos e frota, desde grandes até pequenas empresas, com o intuito de auxiliar e automatizar o processo de gestão de frota interna da sua empresa!</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
 </form>
    </body>
</html>
