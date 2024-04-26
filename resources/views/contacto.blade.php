
<!doctype html>
<html lang="en" data-bs-theme="auto">
  <head><script src="/docs/5.3/assets/js/color-modes.js"></script>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="generator" content="Hugo 0.122.0">
    <title>Confecciones LyF</title>

     <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@docsearch/css@3">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <!-- Favicons -->
<link rel="apple-touch-icon" href="{{ asset('/favicons/apple-touch-icon.png') }}" sizes="180x180">
<link rel="icon" href="{{ asset('/favicons/favicon-32x32.png')}}" sizes="32x32" type="image/png">
<link rel="icon" href="{{ asset('favicon-16x16.png') }}" sizes="16x16" type="image/png">
<link rel="manifest" href="{{ asset('/favicons/manifest.json') }}">
<link rel="icon" href="{{ asset('favicon.ico') }}">
<meta name="theme-color" content="#712cf9">

  <!-- Estilos propios de esta plantilla -->
  <link link rel="stylesheet" href="{{ asset('assets/css/contacto.css') }}">

  </head>
<body>
    
   <!-- Barra de navegacion -->
    <header data-bs-theme="dark">
        <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
          <div class="container-fluid">
            <img class="logolyf" src="{{ asset('/assets/images/lyflogo5v2SM.png')}}" alt="">
            <a class="navbar-brand" href="/catalogo">  Catalogo</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
              <ul class="navbar-nav me-auto mb-2 mb-md-0">
                <li class="nav-item">
                  <a class="nav-link active" aria-current="page" href="/login">Login</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="/carousel">Inicio</a>
                </li>
                {{-- <li class="nav-item">
                  <a class="nav-link" aria-disabled="true">Login</a>
                </li> --}}
              </ul>
              <form class="d-flex" role="search">
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success" type="submit">Search</button>
              </form>
            </div>
          </div>
        </nav>
      </header>

     <!-- Forma de contacto -->

<main class="form-signin w-100 m-auto">

    <section class="py-5 text-center container">
        <div class="row py-lg-5">
          <div class="col-lg-6 col-md-8 mx-auto">
            <h1 class="fw-light">Contactenos</h1>
            <p class="lead text-body-secondary">Si esta interesado en nuestros servicios o desea aplicar para formar parte de nuestra empresa, por favor llene el formato. Gracias!</p>
            <p>
              {{-- <a href="#" class="btn btn-primary my-2">Main call to action</a>
              <a href="#" class="btn btn-secondary my-2">Secondary action</a> --}}
            </p>
          </div>
        </div>
      </section>

 <div class="container" >
    <div class="input-group mb-3">
        <span class="input-group-text" id="basic-addon1">Nombre:</span>
        <input type="text" class="form-control" placeholder="Ingrese su nombre" aria-label="Nombre" aria-describedby="basic-addon1">
      </div>
      
      <div class="input-group mb-3">
        <span class="input-group-text" id="basic-addon1">Direccion:</span>
        <input type="text" class="form-control" placeholder="Ingrese su direccionn" aria-label="Direccion" aria-describedby="basic-addon1">
      </div>

      <div class="input-group mb-3">
        <span class="input-group-text" id="basic-addon1">Numero de contacto:</span>
        <input type="text" class="form-control" placeholder="Ingrese su telefono" aria-label="Nombre" aria-describedby="basic-addon1">
      </div>

      <div class="input-group mb-3">
        <span class="input-group-text" id="basic-addon1">Correo electronico:</span>
        <input type="email" class="form-control" placeholder="Ingrese su correo electronico" aria-label="Email" aria-describedby="basic-addon1">
      </div>
        
      <div class="input-group">
        <span class="input-group-text">Comentarios:</span>
        <textarea class="form-control" aria-label="With textarea"></textarea>
      </div>
    </div>

    <section class="py-5 text-center container">
        <div class="row py-lg-5">
          <div class="col-lg-6 col-md-8 mx-auto">
            <h1 class="fw-light">Contactenos</h1>
            <p class="lead text-body-secondary">Confecciones LyF SAS</p>
            <p class="lead">Avenida del Libertador No. 23-87</p>
            <p>Pereira, Risaralda. Colombia</p>
            <p>Telefono: +57 602 987 654 3210</p>
            <p>Celular: +57 300 100 200 3000</p>
            <p>Correo Electronico: confeccioneslyf@gmail.com</p>
            <p>Horario de atencion: Lu - Vi 8 am - 5 pm</p>
            <p>
              {{-- <a href="#" class="btn btn-primary my-2">Main call to action</a>
              <a href="#" class="btn btn-secondary my-2">Secondary action</a> --}}
            </p>
          </div>
        </div>
      </section>

    <div class="container">
        <footer class="d-flex flex-wrap justify-content-between align-items-center py-3 my-4 border-top">
          <p class="float-end"><a href="#">Volver al principio</a></p>
          <div class="col-md-4 d-flex align-items-center">
            <a href="/" class="mb-3 me-2 mb-md-0 text-body-secondary text-decoration-none lh-1">
              <svg class="bi" width="30" height="24"><use xlink:href="#bootstrap"/></svg>
            </a>
            <span class="mb-3 mb-md-0 text-body-secondary">&copy; 2024 Confecciones LyF SAS</span>
          </div>
      
          <ul class="nav col-md-4 justify-content-end list-unstyled d-flex">
            <li class="ms-3"><a class="text-body-secondary" href="#"><svg class="bi" width="24" height="24"><use xlink:href="#twitter"/></svg></a></li>
            <li class="ms-3"><a class="text-body-secondary" href="#"><svg class="bi" width="24" height="24"><use xlink:href="#instagram"/></svg></a></li>
            <li class="ms-3"><a class="text-body-secondary" href="#"><svg class="bi" width="24" height="24"><use xlink:href="#facebook"/></svg></a></li>
          </ul>
        </footer>
      </div>
</main>


      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</body>
</html>