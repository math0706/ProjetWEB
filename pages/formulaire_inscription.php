<h2 id="titre_page" class="hidden-xs">Formulaire d'inscription</h2>

<section id="reservation">
    <div class="container">
        <form role="form" action="./index.php?page=inscription" method="POST" id="form_inscription" role="form"enctype="multipart/form-data">
            <div class="row">
                <div class="col-md-10">
                    <fieldset>
                        <div class="row">
                            <div class="col-md-2">Nom</div>
                            <div class="col-md-5"><input type="text" name="nom" id="nom"/></div>
                        </div>
                        <div class="row">
                            <div class="col-md-2">Prénom</div>
                            <div class="col-md-5"><input type="text" name="prenom" id="prenom"/></div>
                        </div>
                        <div class="row">
                            <div class="col-md-2">Login</div>
                            <div class="col-md-5"><input type="text" name="login" id="login"/></div>
                        </div>
                        <div class="row">
                            <div class="col-md-2">Mot de passe</div>
                            <div class="col-md-5"><input type="text" name="motdepasse" id="motdepasse"/></div>
                        </div>
                        <div class="row">
                            <div class="col-md-2">Adresse</div>
                            <div class="col-md-5"><input type="text" name="adresse" id="adresse"/></div>
                        </div>
                        <div class="row">
                            <div class="col-md-2">Numero</div>
                            <div class="col-md-5"><input type="number" name="numero" id="numero"/></div>
                        </div>
                        <div class="row">
                            <div class="col-md-2">Code Postal</div>
                            <div class="col-md-5"><input type="number" name="codepostal" id="codepostal"/></div>
                        </div>
                        <div class="row">
                            <div class="col-md-2">Localité</div>
                            <div class="col-md-5"><input type="text" name="localite" id="localite"/></div>
                        </div>
                        <div class="row">
                            <div class="col-md-2">Email</div>
                            <div class="col-md-5"><input type="mail" name="mail" id="mail"/></div>
                        </div>
                </div>
            </div>
            </fieldset>
    </div>
    <div class="row">
        <div class="col-md-2">
            <input class="btn btn-primary vertical_space" type="submit" name="submit_reserv" id="submit_" value="Envoyer"/>
        </div>
        <div class="col-md-2">
            <input class="btn btn-warning vertical_space" type="reset" id="reset" value="Annuler"/>
        </div>
    </div>
</form>  
</div> 
</section>

  <!--  <tr><td>Nom</td><td><input type='text' name='nom' value='<?php //echo $nom;     ?>' size='30' required></td></tr>
    <tr><td>Prenom</td><td><input type='text' name='prenom' value='<?php // echo $prenom;     ?>' size='30' required></td></tr>
    <tr><td>Adresse</td><td><input type='text' name='adresse' value='<?php //echo $adresse;     ?>' size='30' required></td><td>Numero</td><td><input type='number' name='numero' value='<?php echo $numero; ?>' required></td></tr>
    <tr><td>Localite</td><td><input type='text' name='localite' value='<?php //echo $localite;     ?>' size='30' required></td><td>Code postal</td><td><input type='number' name='codepostal' value='<?php echo $codepostal; ?>' required></td></tr>
    <tr><td>Email</td><td><input type='email' name='mail' value='<?php // echo $mail;     ?>' size='30' placeholder='ex: aaa.aaa@hotmail.com'required ></td></tr>
    <tr><td>Login</td><td><input type='text' name='login' value='<?php //echo $login;     ?>' size='30'required></td></tr>
    <tr><td>Mot de passe</td><td><input type='password' name='motdepasse' value='<?php //echo $motdepasse;     ?>' size='30'required></td></tr>
    <tr><td><input type='hidden' name='module' value='<?php //echo $module;     ?>'></td>
        <td><input type='hidden' name='refutil' value='<?php //echo $codeclient;     ?>'></td>
    <tr><td><input type='submit' value='Inscription'></td>

</form>-->


