<div class="ui middle padded aligned center aligned grid">
  <div class="column six wide">
    <h2 class="ui image header">
      <div class="content">
        Se connecter
      </div>
    </h2>
    <form class="ui large form" method="POST" action="">
      <div class="ui stacked segment">
        <div class="field">
          <div class="ui left icon input">
            <i class="user icon"></i>
            <input type="text" name="email" placeholder="E-mail">
          </div>
        </div>
        <div class="field">
          <div class="ui left icon input">
            <i class="lock icon"></i>
            <input type="password" name="password" placeholder="Mot de passe">
          </div>
        </div>
        <input type="submit" class="ui fluid large blue submit button" value="Connexion"></input>
      </div>

      <div class="ui error message"></div>

    </form>

    <div class="ui message">
      Pas encore inscrit ? <a href="index.php?a=register">S'enregistrer</a>
    </div>
  </div>
</div>
