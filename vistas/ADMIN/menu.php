<<<<<<< HEAD
<button class="menu-toggle-btn" id="menuToggleBtn">
=======
<button class="menu-toggle-btn" id="menuToggleBtn" type="button" aria-label="Abrir menú" aria-controls="navDrawer" aria-expanded="false">
>>>>>>> otro-repo/main
    <i class="fas fa-bars"></i>
</button>

<div class="mobile-menu-overlay" id="menuOverlay"></div>
<div class="mobile-menu-left-overlay"></div>

<!-- Drawer de navegación para móviles -->
<<<<<<< HEAD
<nav class="nav-drawer" id="navDrawer">
    <ul class="side-menu-list">
        <li class="brown">
            <a href="../ADMIN/principal.php">
=======
<nav class="nav-drawer" id="navDrawer" aria-hidden="true">
    <ul class="side-menu-list">
        <li class="menu-logo">
            <a href="../ADMIN/principal.php" aria-label="Ir al inicio">
                <img src="img/intecap.png" alt="INTECAP">
            </a>
        </li>
        <li class="brown">
            <a class="menu-link" href="../ADMIN/principal.php">
>>>>>>> otro-repo/main
                <i class="fas fa-home"></i> 
                <span class="lbl">Inicio</span>
            </a>
        </li>

        <?php if ($user['cargo'] == "Admin" || $user['cargo'] == "Instructor"): ?>
        <li class="gold">
<<<<<<< HEAD
            <a href="../ADMIN/TALLERES.php">
=======
            <a class="menu-link" href="../ADMIN/TALLERES.php">
>>>>>>> otro-repo/main
                <i class="fas fa-tools"></i> 
                <span class="lbl">Talleres</span>
            </a>
        </li>
        <li class="blue">
<<<<<<< HEAD
            <a href="../ADMIN/EVENTOS.php">
=======
            <a class="menu-link" href="../ADMIN/EVENTOS.php">
>>>>>>> otro-repo/main
                <i class="fas fa-calendar-alt"></i>
                <span class="lbl">Eventos</span>
            </a>
        </li>
        <?php endif; ?>

        <?php if ($user['cargo'] == "Admin"): ?>
        <li class="orange-red">
<<<<<<< HEAD
            <a href="../ADMIN/INSTRUCTORES.php">
=======
            <a class="menu-link" href="../ADMIN/INSTRUCTORES.php">
>>>>>>> otro-repo/main
                <i class="fas fa-chalkboard-teacher"></i> 
                <span class="lbl">Instructores</span>
            </a>
        </li>
        <?php endif; ?>

        <?php if ($user['cargo'] == "Admin" || $user['cargo'] == "Mantenimiento" || $user['cargo'] == "Instructor"): ?>
        <li class="blue-dirty">
<<<<<<< HEAD
            <a href="../ADMIN/MANTENIMIENTO.php">
=======
            <a class="menu-link" href="../ADMIN/MANTENIMIENTO.php">
>>>>>>> otro-repo/main
                <i class="fas fa-wrench"></i> 
                <span class="lbl">Mantenimiento</span>
            </a>
        </li>
        <?php endif; ?>

        <li class="blue-dirty">
<<<<<<< HEAD
            <a href="../ADMIN/USUARIO.php">
=======
            <a class="menu-link" href="../ADMIN/USUARIO.php">
>>>>>>> otro-repo/main
                <i class="fas fa-users"></i> 
                <span class="lbl">Usuarios</span>
            </a>
        </li>

<<<<<<< HEAD
        <li class="blue-dirty">
            <a href="../ADMIN/ASISTENCIA.php">
=======
        <?php if ($user['cargo'] == "Admin" || $user['cargo'] == "Instructor"): ?>
        <li class="blue-dirty">
            <a class="menu-link" href="../ADMIN/ASISTENCIA.php">
>>>>>>> otro-repo/main
                <i class="fas fa-check-circle"></i> 
                <span class="lbl">Asistencia</span>
            </a>
        </li>
<<<<<<< HEAD

        <li class="blue-dirty">
            <a href="../ADMIN/MI USUARIO.php">
=======
        <?php endif; ?>

        <li class="blue-dirty">
            <a class="menu-link" href="../ADMIN/MI USUARIO.php">
>>>>>>> otro-repo/main
                <i class="fas fa-user"></i> 
                <span class="lbl">Mi Usuario</span>
            </a>
        </li>
<<<<<<< HEAD
=======
        <li class="menu-logout">
            <a class="menu-link" href="../../controladores/logout.php">
                <i class="fas fa-sign-out-alt"></i>
                <span class="lbl">Cerrar sesión</span>
            </a>
        </li>
>>>>>>> otro-repo/main
    </ul>
</nav>

<!-- Menú lateral para PC -->
<nav class="side-menu side-menu-compact">
    <ul class="side-menu-list">
<<<<<<< HEAD
        <li class="brown">
            <a href="../ADMIN/principal.php">
=======
        <li class="menu-logo">
            <a href="../ADMIN/principal.php" aria-label="Ir al inicio">
                <img src="img/intecap.png" alt="INTECAP">
            </a>
        </li>
        <li class="brown">
            <a class="menu-link" href="../ADMIN/principal.php">
>>>>>>> otro-repo/main
                <i class="fas fa-home"></i> 
                <span class="lbl">Inicio</span>
            </a>
        </li>

        <?php if ($user['cargo'] == "Admin" || $user['cargo'] == "Instructor"): ?>
        <li class="gold">
<<<<<<< HEAD
            <a href="../ADMIN/TALLERES.php">
=======
            <a class="menu-link" href="../ADMIN/TALLERES.php">
>>>>>>> otro-repo/main
                <i class="fas fa-tools"></i> 
                <span class="lbl">Talleres</span>
            </a>
        </li>
        <li class="blue">
<<<<<<< HEAD
            <a href="../ADMIN/EVENTOS.php">
=======
            <a class="menu-link" href="../ADMIN/EVENTOS.php">
>>>>>>> otro-repo/main
                <i class="fas fa-calendar-alt"></i>
                <span class="lbl">Eventos</span>
            </a>
        </li>
        <?php endif; ?>

        <?php if ($user['cargo'] == "Admin"): ?>
        <li class="orange-red">
<<<<<<< HEAD
            <a href="../ADMIN/INSTRUCTORES.php">
=======
            <a class="menu-link" href="../ADMIN/INSTRUCTORES.php">
>>>>>>> otro-repo/main
                <i class="fas fa-chalkboard-teacher"></i> 
                <span class="lbl">Instructores</span>
            </a>
        </li>
        <?php endif; ?>

        <?php if ($user['cargo'] == "Admin" || $user['cargo'] == "Mantenimiento" || $user['cargo'] == "Instructor"): ?>
        <li class="blue-dirty">
<<<<<<< HEAD
            <a href="../ADMIN/MANTENIMIENTO.php">
=======
            <a class="menu-link" href="../ADMIN/MANTENIMIENTO.php">
>>>>>>> otro-repo/main
                <i class="fas fa-wrench"></i> 
                <span class="lbl">Mantenimiento</span>
            </a>
        </li>
        <?php endif; ?>

        <li class="blue-dirty">
<<<<<<< HEAD
            <a href="../ADMIN/USUARIO.php">
=======
            <a class="menu-link" href="../ADMIN/USUARIO.php">
>>>>>>> otro-repo/main
                <i class="fas fa-users"></i> 
                <span class="lbl">Usuarios</span>
            </a>
        </li>

<<<<<<< HEAD
        <li class="blue-dirty">
            <a href="../ADMIN/ASISTENCIA.php">
=======
        <?php if ($user['cargo'] == "Admin" || $user['cargo'] == "Instructor"): ?>
        <li class="blue-dirty">
            <a class="menu-link" href="../ADMIN/ASISTENCIA.php">
>>>>>>> otro-repo/main
                <i class="fas fa-check-circle"></i> 
                <span class="lbl">Asistencia</span>
            </a>
        </li>
<<<<<<< HEAD

        <li class="blue-dirty">
            <a href="../ADMIN/MI USUARIO.php">
=======
        <?php endif; ?>

        <li class="blue-dirty">
            <a class="menu-link" href="../ADMIN/MI USUARIO.php">
>>>>>>> otro-repo/main
                <i class="fas fa-user"></i> 
                <span class="lbl">Mi Usuario</span>
            </a>
        </li>
<<<<<<< HEAD
    </ul>
</nav>
<br><br>
=======
        <li class="menu-logout">
            <a class="menu-link" href="../../controladores/logout.php">
                <i class="fas fa-sign-out-alt"></i>
                <span class="lbl">Cerrar sesión</span>
            </a>
        </li>
    </ul>
</nav>
>>>>>>> otro-repo/main

<script src="menu.js"></script>
<link rel="stylesheet" href="../../wwwroot/css/menu.css">