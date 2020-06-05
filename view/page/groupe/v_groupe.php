<?php
    include_once('view/build/v_header.php');    
?>
<div class="ui middle center padded container">

    <h4 class="ui horizontal divider header">
    <i class="th icon"></i>
    Groupes
    </h4>

    <table class="ui sixteen wide column celled table ">
        <thead>
            <tr><th class="eight wide">Section</th>
            <th class="three wide">Type</th>
            <th class="three wide">Année</th>
            <th class="three wide">Effectif</th>
            <th class="two wide"></th>
        </tr></thead>
        <tbody>
        <?php foreach($tabGroupe as $key => $value) { ?>
            <tr>
                    <td data-label="Name"><?php echo $value['groupe_section'] ?></td>
                    <td data-label="Age"><?php echo $value['groupe_type'] ?></td>
                    <td data-label="Job"><?php echo $value['groupe_annee'] ?></td>
                    <td data-label="Job">unknow</td>
                    <td data-label="Job">
                        <div class="ui buttons">
                            <div   div class="ui vertical button green" tabindex="0">
                                <div class="visible content">
                                    <i class="eye icon"></i>
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
