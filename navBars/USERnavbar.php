<nav class="navbar bg-dark border-bottom border-bottom-dark" data-bs-theme="dark">
    <div class="container-fluid col-lg-6 d-flex align-items-center gradient-custom-2">
        <img src="https://logos-world.net/wp-content/uploads/2022/01/Jojos-Bizarre-Adventure-anime-Logo-2012.png"
            style="width: 80px;" alt="logo">  
        <a class="navbar-brand">Pagina do Agendamento</a>
        <button class="btn bg-dark" type="button" data-bs-toggle="collapse" 
            data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" 
            aria-expanded="false" aria-label="Toggle navigation">
            <span class="material-symbols-outlined">menu</span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">

                <li class="nav-item text-white d-flex flex justify-content-start align-items-center">
                <span class="material-symbols-outlined ms-2" async>home</span>
                <a class="nav-link ms-2" href="?page=historico">Home</a>
                </li>

                <li class="nav-item text-white d-flex flex justify-content-start align-items-center">
                <span class="material-symbols-outlined ms-2">check_box</span>
                <a class="nav-link ms-2" href="?page=logs">Log</a>
                </li>

                <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" 
                aria-expanded="false">Mais opções</a>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item " href="#">Sóbre Nós</a></li>
                    <li><hr class="dropdown-divider "></li>
                    <li><a class="dropdown-item" href="index.php">Página de login</a></li>
                </ul>
            </ul>
        </div>
    </div>
</nav>

<div class="container-fluid pt-3 pb-3 ps-4 pe-4 h-100">
    <?php
        $pageRequest = isset($_REQUEST['page']) ? $_REQUEST['page'] : 'historico';

        switch ($pageRequest) {
        case 'historico':
            include("pages/users/USERhome.php");
            break;
        case 'logs':
            include("pages/users/USERlog.php");
            break;
        }
    ?>
</div>