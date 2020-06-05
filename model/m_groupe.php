<?php declare(strict_types=1);

class m_groupe
{
    private $dbConnector;

    public function __construct(DbConnector $dbConnector)
    {
        $this->dbConnector = $dbConnector;
        try {
            $this->pdo = $this->dbConnector->getConnection();
        } catch (Exception $e) {
            $messagePHPError = "Erreur connexion à la base de donnée";
            return false;
        }

    }


    /*
    public function newGroupe($nom, $prenom, $email, $section, $annee) : bool
    {
      $statement = $this->pdo->prepare('INSERT INTO `student`(`student_nom`,`student_prenom`,`student_email`,`student_section`, `student_annee`)
      VALUES (:student_nom, :student_prenom, :student_email, :student_section, :student_annee)');

      $statement->bindParam(':student_nom', $nom);
      $statement->bindParam(':student_prenom', $prenom);
      $statement->bindParam(':student_email', $email);
      $statement->bindParam(':student_section', $section);
      $statement->bindParam(':student_annee', $annee);

      return $statement->execute();

    }*/
/*
    public function getStudent($email)
    {
        $req = $this->pdo->prepare('SELECT * from student where student_email = :email');
        $req->bindParam(':email',$email);
        $req->execute();
        return $req->fetch();
    }
*/
    public function getAllGroupe()
    {
        $req = $this->pdo->prepare('SELECT * from groupe');
        $req->execute();
        return $req->fetchAll();
    }



    /*
    public function updateUser($nom,$prenom,$sexe,$tel,$naissance,$mail,$ville,$id,$bio)
	{
      $statement = $this->pdo->prepare('UPDATE utilisateur SET u_nom = :nom, u_prenom=:prenom, u_sexe=:sexe, u_tel=:tel, u_date_naissance=:date_naissance,
         u_mail=:mail, u_ville=:ville,u_bio=:bio WHERE u_num=:num');

      $statement->bindParam(':nom', $nom);
      $statement->bindParam(':prenom', $prenom);
      $statement->bindParam(':sexe', $sexe);
      $statement->bindParam(':tel', $tel);
      $statement->bindParam(':date_naissance', $naissance);
      $statement->bindParam(':mail', $mail);
      $statement->bindParam(':ville', $ville);
      $statement->bindParam(':num', $id);
      $statement->bindParam(':bio', $bio);
      $res=$statement->execute();
      return $res;
    }


    public function getUserBDD($id){
      $statement = $this->pdo->prepare('SELECT * from utilisateur  WHERE u_num=:id');
      $statement->bindParam(':id',$id);
      $res=$statement->execute();
      return $statement->fetchAll()[0];
    }*/

    /*
	public function verifMdp($mdp, $mail)
	{
		$prep = $this->pdo->prepare('SELECT * FROM utilisateur WHERE u_mail = :email');
        $prep->bindParam(':email',$mail);
        $prep->execute();
        $resultat = $prep->fetchAll();
        if($resultat)
        {
            $hash = $resultat[0]['u_mdp'];
            $correctPassword = password_verify($mdp, $hash);
            return $correctPassword;
        }
		return false;
    }*/
    
    /*
    public function mailTelExiste($email, $tel)
    {
        $statement = $this->pdo->prepare('SELECT COUNT(*) FROM utilisateur WHERE u_mail = :u_mail OR u_tel = :u_tel');
        $statement->bindParam(':u_mail', $email);
        $statement->bindParam(':u_tel', $tel);
        $statement->execute();
        return $statement->fetch()['COUNT(*)'];
    }*/

}
