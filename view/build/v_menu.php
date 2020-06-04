<div class="ui large top menu">
            <a class="header item" href="index.php">
              TrouveTaPlace
            </a>
            <a class="item">
              About Us
            </a>
            <a class="item">
              Jobs
            </a>



            <?php 

            if(isUserConnected())
              echo '<div class="right menu">
                      <a class="item" href="index.php?a=unset">
                        Déconnexion
                      </a>
                    </div>';
            ?>



          </div>

