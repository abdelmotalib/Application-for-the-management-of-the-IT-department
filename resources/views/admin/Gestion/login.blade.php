<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="fr">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Se connecter</title>

    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>

<body class="hold-transition sidebar-mini">
    <div class="wrapper">

    <nav class="navbar navbar-dark bg-primary">
  <!-- Navbar content -->
</nav>
<style>
  
        @media (min-width: 750px){
            .login-box{
                max-width: 70%;
                margin-left :70px;
            }
        }
        </style>

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <div class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            
                        </div><!-- /.col -->
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="#">Acceuil</a></li>
                                <li class="breadcrumb-item active">Se connecter</li>

                            </ol>
                        </div><!-- /.col -->
                    </div><!-- /.row -->
                </div><!-- /.container-fluid -->

            </div>
            <!-- /.content-header -->
        <!-- Main content -->
        <div class="content">
                <div class="container-fluid">
                    <div class="row">

<div class="login-box col-md-12">
  <div class="login-logo">
    <b>Se connecter</b>
  </div>
  <!-- /.login-logo -->
  <div class="card">
    <div class="card-body login-card-body">
      <p class="login-box-msg">Connectez-vous pour démarrer votre session</p>

      <form action="../../index3.html" method="post">
        <div class="input-group mb-3">
          <input type="email" class="form-control" placeholder="Email">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="password" class="form-control" placeholder="Mot de passe">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-8">
           
          </div>
          <!-- /.col -->
          <div class="col-12">
            <button type="submit" class="btn btn-primary btn-block">S'identifier</button>
          </div>
          <!-- /.col -->
        </div>
      </form>

      
    

      <p class="mb-1">
        <a href="{{url('Forgetpassword')}}">j'ai oublié mon mot de passe</a>
      </p>
      <p class="mb-0">
        <a href="{{url('Creercompte')}}" class="text-center">Créer un compte</a>
      </p>
    </div>
    <!-- /.login-card-body -->
  </div>
</div>

</div>
                    <!-- /.row -->
                </div><!-- /.container-fluid -->
            </div>
            <!-- /.content -->
        </div>


        <section class="">
  <!-- Footer -->
  <footer class="text-center text-white" style="background-color:#0d6efd ;">
    <!-- Grid container -->
    <div class="container p-4 pb-0">
      <!-- Section: CTA -->
      <section class="">
        <p class="d-flex justify-content-center align-items-center">
          <span class="me-3">Contactez-nous</span>
          <button type="button" class="btn btn-outline-light btn-rounded">
            Allez!
          </button>
        </p>
      </section>
      <!-- Section: CTA -->
    </div>
    <!-- Grid container -->

    <!-- Copyright -->
    <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
      © 2022 Copyright:
      <a class="text-white" href="https://mdbootstrap.com/">MID2@info.com</a>
    </div>
    <!-- Copyright -->
  </footer>
  <!-- Footer -->
</section>
 
    <script src="{{ asset('js/app.js') }}"></script>

</body>

</html>