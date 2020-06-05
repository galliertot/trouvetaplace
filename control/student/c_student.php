<?php

    include_once('model/m_student.php');
    include_once('model/m_groupe.php');

    include_once('model/DbConnector.php');

    if(!isUserConnected())
        header("Location: index.php");
    
    $modelStudent = new m_student(new DbConnector());
    $modelGroupe = new m_groupe(new DbConnector());

    $tabStudent = $modelStudent->getAllStudent();
    $tabGroupe = $modelGroupe->getAllGroupe();

    if(isset($_GET['o']))
    {
        if($_GET['o'] == "add")
        {
            if(!empty($_POST) && isset($_POST))
            {
                if(isset($_POST['prenom'])
                && isset($_POST['nom'])
                && isset($_POST['email'])
                && isset($_POST['section'])
                && isset($_POST['annee']))
                {
                    $nom = $_POST['nom'];
                    $prenom = $_POST['prenom'];
                    $email = $_POST['email'];
                    $section = $_POST['section'];
                    $annee = $_POST['annee'];

                    if($modelStudent->newStudent($nom, $prenom, $email, $section, $annee))
                        $messagePHPSuccess = "Ajout réussi";
                    else
                        $messagePHPError = "Erreur inconnue lors de l'ajout";
               
                }else
                    $messagePHPError = "Veuillez remplir tous les champs";
            }

            include_once('view/page/student/v_student_add.php');
        }
    }
    else      
        include_once('view/page/student/v_student.php');
?>
