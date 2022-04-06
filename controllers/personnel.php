<div id="personnel">
    <form action="../models/add_personnel.php" method="POST">
        <div class="columns">
            <div class="column is-offset-2 is-3">
                <div class="columns is-multiline">
                    <div class="column is-full">
                        <!-- Nom -->
                        <div class="field">
                            <label class="label">Nom</label>
                            <div class="control">
                                <input class="input" type="text" name="nom" required>
                            </div>
                        </div>
                    </div>
                    <div class="column is-full">
                        <!-- Prénom -->
                        <div class="field">
                            <label class="label">Prénom</label>
                            <div class="control">
                                <input class="input" type="text" name="prenom" required>
                            </div>
                        </div>
                    </div>
                    <div class="column is-full">
                        <!-- Telephone -->
                        <div class="field">
                            <label class="label">Numéro de telephone</label>
                            <div class="control">
                                <input class="input" type="text" required maxlength="10" minlength="10" placeholder="Ex : 0601020304" name="tel" required>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="column is-offset-2 is-3">
                <div class="columns is-multiline">
                    <div class="column is-full">
                        <!-- Nom d'utilisateur -->
                        <div class="field">
                            <label class="label">Nom d'utilisateur</label>
                            <div class="control">
                                <input class="input" type="text" name="username" required>
                            </div>
                        </div>
                    </div>
                    <div class="column is-full">
                        <!-- Mot de passe -->
                        <div class="field">
                            <label class="label">Mot de passe</label>
                            <div class="control">
                                <input class="input" type="text" name="password" required>
                            </div>
                        </div>
                    </div>
                    <div class="column is-full">
                        <!-- Type -->
                        <div class="field">
                            <label class="label">Type de personnel</label>
                            <div class="control">
                                <label class="radio">
                                    <input type="radio" name="type" value="tech" required>
                                    Technique
                                </label>
                                <br />
                                <label class="radio">
                                    <input type="radio" name="type" value="comm" required>
                                    Commercial
                                </label>
                                <br />
                                <label class="radio">
                                    <input type="radio" name="type" value="admin" required>
                                    Administrateur
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <center>
            <input class="input" type="submit" value="Créer le membre">
        </center>
    </form>
</div>