

<?php if(isUserConnected()) { ?>
  <div class="ui large top menu">
    <a class="header item" href="index.php">
      TrouveTaPlace
    </a>
    <a class="item" href="index.php?a=student">
      Étudiant
    </a>
    <a class="item" href="index.php?a=groupe">
      Groupe
    </a>
    <div class="right menu">
      <a class="item" href="index.php?a=unset">
        Déconnexion
      </a>
    </div>
  </div>
<?php } ?>
