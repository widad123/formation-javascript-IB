    <?php
      // Création de la base de données
      try {
        $base = new PDO('mysql:host=localhost', 'root', '');
      }    
      catch(exception $e) {
        die('Erreur '.$e->getMessage());
      }
      $base->exec("CREATE DATABASE basephp DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci");
      $base = null;
      
      // Création de la table
      try {
        $base = new PDO('mysql:host=localhost; dbname=basephp', 'root', '');
      }    
      catch(exception $e) {
        die('Erreur '.$e->getMessage());
      }
 $base->exec("CREATE TABLE tablephp(id INT NOT NULL AUTO_INCREMENT, PRIMARY KEY(id), prenom varchar(50), nom varchar(50), compteurvisite smallint, dernierevisite timestamp)");

      // Ajout de données dans la table
      $base->exec("INSERT INTO tablephp(prenom, nom, compteurvisite, dernierevisite) VALUE('Pierre', 'Dubur', 34, NOW())");
      $base->exec("INSERT INTO tablephp(prenom, nom, compteurvisite, dernierevisite) VALUE('Chantal', 'Garnier', 128, NOW())");
      $base->exec("INSERT INTO tablephp(prenom, nom, compteurvisite, dernierevisite) VALUE('Jean', 'Dupont', 2, NOW())");
      $base->exec("INSERT INTO tablephp(prenom, nom, compteurvisite, dernierevisite) VALUE('Belle', 'Vercor', 45, NOW())");

      $retour = $base->query('SELECT * FROM tablephp');
      echo "<table>";
      while ($data = $retour->fetch()){
        echo "<tr><td>".$data['prenom']."</td>";
        echo "<td>".$data['nom']."</td>";
        echo "<td>".$data['compteurvisite']."</td>";
        echo "<td>".$data['dernierevisite']."</td>";
      }
      echo "</table>";
      $base = null;
?>
 
