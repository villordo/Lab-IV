<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href="#">Primer Parcial Laboratorio IV 2019</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        
        <ul class="navbar-nav ml-auto">
            <li class="nav-item">
                <a class="nav-link" href="/lab_4/examen_c2/users.php">Users</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/lab_4/examen_c2/index.php?logout=logout">Logout</a>
            </li>
        </ul>
        <span class="navbar-text text-white">
            <strong>(Hola <?php echo $_SESSION['loggedUser']->getName(); ?>)</strong>
        </span>
    </div>
</nav>