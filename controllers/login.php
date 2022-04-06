<?php

    if(isset($_REQUEST['event']))
    {
        $event = $_REQUEST['event'];
        $message = "Nom d'utilisateur ou mot de passe incorrect";
    }
    else
    {
        $message = "";
    }

?>
<div id="login">
    <div class="block has-text-centered">
        <h1 class="title">Connexion</h1>
        <span class="error"><?php echo $message; ?></span>
    </div>
    <hr>
    <form action="models/auth.php?event=login" method="post">
        <div class="field">
            <label class="label" for="username">Nom d'utilisateur</label>
            <div class="control">
            <p class="control has-icons-left">
                <input class="input" type="text" placeholder="Nom d'utilisateur" id="username" name="username">
                <span class="icon is-small is-left">
                    <i class="fas fa-envelope"></i>
                </span>
            </p>
            </div>
            <br/>
            <label class="label" for="password">Mot de passe</label>
            <div class="control">
                <p class="control has-icons-left">
                    <input class="input" type="password" placeholder="Mot de passe" id="password" name="password">
                    <span class="icon is-small is-left">
                        <i class="fas fa-lock"></i>
                    </span>
                </p>
            </div>
        </div>
        <center>
            <input class="button is-light" type="submit" value="Connexion">
        </center>
    </form>
</div>