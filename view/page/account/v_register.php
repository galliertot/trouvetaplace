<?php
    include_once('view/build/v_header.php');
?>

<div class="ui middle aligned center aligned grid" id="register_block">
  <div class="column six wide">
    <form class="ui large form" method="POST" action="">
      <div class="ui stacked segment">

        <div class="field">
          <div class="ui left input">
            <input type="text" name="nom" placeholder="Nom">
          </div>
        </div>

        <div class="field">
          <div class="ui left input">
            <input type="text" name="prenom" placeholder="Prénom">
          </div>
        </div>

        <div class="field">
          <div class="ui left input">
            <input type="text" name="email" placeholder="E-mail">
          </div>
        </div>


        <div class="field">
          <div class="ui left input">
            <input type="password" name="password" placeholder="Mot de passe">
          </div>
        </div>

        <div class="field">
          <div class="ui left input">
            <input type="password" name="repassword" placeholder="Répéter votre mot de passe">
          </div>
        </div>
        
        <div class="field">
            <select class="dropdown" name="role">
                <option disabled selected >Rôle</option>
                <option value="2">Enseignant</option>
                <option value="3">Responsable Module</option>
                <option value="4">Administrateur</option>
            </select>      
        </div>

        
        <input type="submit" class="ui fluid large blue submit button" value="S'enregistrer"></input>
      </div>

      <div class="ui error message"></div>

    </form>
    <div class="ui message">
      Déjà inscrit ? <a href="index.php">Se connecter</a>
    </div>
  </div>
</div>

<?php
    include_once('view/build/v_footer.php');
?>

