<header>
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <a class="navbar-brand" href="../views/index.php">Sistema de Préstamos de Equipo de Cómputo UV</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link text-white" href="../views/acerca.php">Acerca de Nosotros</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle text-white" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Prestamos</a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="registro_de_solicitud.php">Solicitar Prestamos</a>
                        <a class="dropdown-item" href="#">Ver Equipos</a>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle text-white" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Usuarios</a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="../views/lista_de_usuarios.php">Visualizar usuarios</a>
                        <a class="dropdown-item" href="#">Registrar nuevo usuario</a>
                        <a class="dropdown-item" href="#">Eliminar usuario</a>
                        <a class="dropdown-item" href="#">Modificar usuario</a>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="../views/bitacora.php">Bitácora</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="">Observaciones</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="../chat/chat.php">Chat</a>
                </li>
        </div>
    
<!--     <?php date_default_timezone_set('America/Mexico_City'); ?>
    <p class="text-right"><b><?php echo date('d-m-Y' ); ?></b></p> -->
   
</header>