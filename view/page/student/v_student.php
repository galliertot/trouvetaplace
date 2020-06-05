<?php
    include_once('view/build/v_header.php');    
?>
<div class="ui middle center padded container">   
    
   <h4 class="ui horizontal divider header">
    <i class="user icon"></i>
    Étudiants
    </h4>


    <a class="ui labeled positive icon button" href="index.php?a=student&o=add">
        <i class="plus icon"></i>
        Ajouter un étudiant
    </a>
    
    <table class="ui sixteen wide column celled table ">
        <thead>
            <tr><th class="three wide">Nom</th>
            <th class="three wide">Prénom</th>
            <th class="four wide">Email</th>
            <th class="four wide">Section</th>
            <th class="two wide"></th>

        </tr></thead>
        <tbody>
            <?php foreach($tabStudent as $key => $value) { ?>
            <tr>
                    <td data-label="Name"><?php echo $value['student_nom'] ?></td>
                    <td data-label="Age"><?php echo $value['student_prenom'] ?></td>
                    <td data-label="Job"><?php echo $value['student_email'] ?></td>
                    <td data-label="Job"><?php echo $value['student_section'] . " " . $value['student_annee'] ?></td>
                    <td data-label="Job">
                        <div class="ui buttons">
                            <div   div class="ui vertical button blue" tabindex="0">
                                <div class="visible content">
                                    <i class="edit icon"></i>
                                </div>
                            </div>
                            <div   div class="ui vertical button red" tabindex="0">
                                <div class="visible content">
                                    <i class="delete icon"></i>
                                </div>
                            </div>
                        </div>
                    </td>
                </tr>
            <?php } ?>
        </tbody>
    </table>



</div>

<?php
        include_once('view/build/v_footer.php');
?>
