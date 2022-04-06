<nav id="navbar" class="navbar is-transparent has-text-centered" role="navigation" aria-label="main navigation">
    <div class="navbar-brand">
        <a class="navbar-item" href="?page=home">
            <img src="/assets/images/logo.png" width="112" height="28">
        </a>
        <a role="button" class="navbar-burger" aria-label="menu" aria-expanded="false" id="responsive_button">
            <span aria-hidden="true"></span>
            <span aria-hidden="true"></span>
            <span aria-hidden="true"></span>
        </a>
    </div>
    <div class="navbar-menu">
        <div class="navbar-start">
            <a class="navbar-item" href="?page=account">
                Mes informations
            </a>
        <?php if ((isset($_SESSION['admin'])) && ($_SESSION['admin'] == True)) { ?>
            <div class="navbar-item has-dropdown is-hoverable">
                <a class="navbar-link is-arrowless">
                    Gestion&nbsp;&nbsp;<i class="fa-solid fa-arrow-down"></i>
                </a>
                <div class="navbar-dropdown">
                    <a class="navbar-item"  href="?page=personnel&event=add">
                        Ajouter un personnel
                    </a>
                </div>
            </div>
        <?php } ?>
        </div>
        <div class="navbar-end">
            <a class="navbar-item" href="/models/auth.php?event=logout">
                Déconnexion
            </a>
        </div>
    </div>
</nav>