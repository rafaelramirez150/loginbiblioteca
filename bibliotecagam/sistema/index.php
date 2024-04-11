<?php

session_start();
if(!isset($_SESSION['usuario_id'])){
    header("location:login.html");
    exit();

}

?>

<!doctype html>
<html lang="en">
    <head>
        <title>Panel de bienvenida</title>
        <!-- Required meta tags -->
        <meta charset="utf-8" />
        <meta
            name="viewport"
            content="width=device-width, initial-scale=1, shrink-to-fit=no"
        />

        <!-- Bootstrap CSS v5.2.1 -->
        <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
            rel="stylesheet"
            integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
            crossorigin="anonymous"
        />
    </head>

    <body>
        <header>
            <!-- place navbar here -->
        </header>
        <main>

<nav
    class="navbar navbar-expand-lg navbar-light bg-light"
>
    <div class="container">
        <a class="navbar-brand" href="#">Panel administrador</a>
        <button
            class="navbar-toggler d-lg-none"
            type="button"
            data-bs-toggle="collapse"
            data-bs-target="#collapsibleNavId"
            aria-controls="collapsibleNavId"
            aria-expanded="false"
            aria-label="Toggle navigation"
        >
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="collapsibleNavId">
            <ul class="navbar-nav me-auto mt-2 mt-lg-0">
                <li class="nav-item">
                    <a class="nav-link" href="https://www.uacm.edu.mx">UACM</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="https://www.google.com.mx">Google</a>
                </li>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="cerrar.php">Cerrar</a>
                </li>
                
            </ul>
            
        </div>
    </div>
</nav>



<br>

<div
    class="container"
>
    <div
        class="row justify-content-center align-items-center"
    >
        <div class="col"><h2> Bienvenido a la aplicación <?php echo $_SESSION['usuario_nombre'];?></h2>
<p> Este es el inicio de la aplicación </p>
        </div>
    </div>

    <div
        class="row justify-content-center"
    >
        <div class="col-md-4">
            <div class="card">
                <div class="card-header">UACM</div>
                <div class="card-body">
                    <h4 class="card-title">Sube al siguiente nivel</h4>
                    <img src="https://www.generacionuniversitaria.com.mx/wp-content/uploads/2022/10/%C2%BFBuscas-biblioteca-para-estudiar_-Top-5-de-librerias-en-CDMX.jpg"
                    class="card-img-top mx-auto d-block"
                    alt="Imagen">
                    <p class="card-text">Dirígete al sitio de la Universidad</p>
                    <a href="https://www.uacm.edu.mx"
                    class = "btn btn-success">Sitio web de la Uni</a>

                </div>
            </div>
        </div>
    </div>
</div>
        </main>
        <footer>
            <!-- place footer here -->
        </footer>
        <!-- Bootstrap JavaScript Libraries -->
        <script
            src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
            integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
            crossorigin="anonymous"
        ></script>

        <script
            src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
            integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+"
            crossorigin="anonymous"
        ></script>
    </body>
</html>