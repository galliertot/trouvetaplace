<?php
    include_once('view/build/v_header.php');
?>

<div class="ui middle aligned center aligned grid" id="student_add_block">
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

        <div class="inline fields">
          <label for="annee">Année : </label>
          <div class="field">
            <div class="ui radio checkbox">
              <input type="radio" name="annee" checked="" value="1A" tabindex="0" class="hidden">
              <label>1A</label>
            </div>
          </div>
          <div class="field">
            <div class="ui radio checkbox">
              <input type="radio" name="annee" tabindex="0" value="2A" class="hidden">
              <label>2A</label>
            </div>
          </div>
          <div class="field">
            <div class="ui radio checkbox">
              <input type="radio" name="annee" tabindex="0" value="Licence" class="hidden">
              <label>Licence</label>
            </div>
          </div>
        </div>

        <div class="inline fields">
          <label for="section">Section : </label>
          <div class="field">
            <div class="ui radio checkbox">
              <input type="radio" name="section" checked="" value="Information-Communication" tabindex="0" class="hidden">
              <label>Information-Communication</label>
            </div>
          </div>
          <div class="field">
            <div class="ui radio checkbox">
              <input type="radio" name="section" tabindex="0" value="Informatique" class="hidden">
              <label>Informatique</label>
            </div>
          </div>
          <div class="field">
            <div class="ui radio checkbox">
              <input type="radio" name="section" tabindex="0" value="Réseaux et télécommunication" class="hidden">
              <label>Réseaux et télécommunication</label>
            </div>
          </div>
        </div>

        
        <input type="submit" class="ui fluid large blue submit button" value="Ajouter"></input>
      </div>

      <div class="ui error message"></div>

    </form>
    <a href="index.php?a=student" class="ui fluid   button">Annuler</a>

  </div>
</div>

<?php
    include_once('view/build/v_footer.php');
?>

