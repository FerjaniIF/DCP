<?php
require_once('../controllers/EnfController.php');
$enfCtr=new EnfController();
$res=$enfCtr->getEnf($_GET['cin']);
?>
<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="css/form.css" />
  <title>Association voix de l'enfant</title>
    <link rel="shortcut icon" href="images/rectangle-100.png" type="image/x-icon">
  
</head>
<body>
  <div>
    <svg class="mdi-baby" width="80" height="65" viewBox="0 0 77 65" fill="none" xmlns="http://www.w3.org/2000/svg">
    </svg>
  </div>
  <form action="update.php" method="post">
    <table>
      <tr>
        <td>Numéro CIN :</td>
        <td><input type="text" name="cin" value="<?php echo $res['cin']; ?>" readonly></td>
      </tr>
      <tr>
        <td>Nom :</td>
        <td><input type="text" name="nom" value="<?php echo $res['nom']; ?>" required></td>
      </tr>
      <tr>
        <td>Prénom :</td>
        <td><input type="text" name="prenom" value="<?php echo $res['pre']; ?>" required></td>
      </tr>
      <tr>
        <td>Numéro de téléphone :</td>
        <td><input type="text" name="tel" pattern="\d{8}" maxlength="8" value="<?php echo $res['tel']; ?>" required></td>
      </tr>
      <tr>
        <td>Adresse :</td>
        <td><input type="text" name="adresse" value="<?php echo $res['adr']; ?>" required></td>
      </tr>
      <tr>
        <td>Nombre d'enfants :</td>
        <td><input type="number" name="numEnf" value="<?php echo $res['nbenf']; ?>" required></td>
      </tr>
      <tr>
        <td>Niveau(x) d'étude(s) :</td>
        <td><input type="text" name="nv" value="<?php echo $res['ne']; ?>" required></td>
      </tr>
      <tr>
        <td>Statut marital :</td>
        <td><input type="radio" name="etat" value="mariee"> <label>Marieé</label></td>
        <td><input type="radio" name="etat" value="celib"> <label>Célibataire</label></td>
        <td><input type="radio" name="etat" value="dev"> <label>Dévorcée</label></td>
      </tr>
      <tr>
        <td>Formation :</td>
        <td>
          <select>
            <option>Aucune</option>
            <option>Pâtisserie</option>
            <option>Couture</option>
          </select>
        </td>
      </tr>
      <tr>
        <td>Type de subvention :</td>
        <td><input type="checkbox" name="a">Financière</td>
        <td><input type="checkbox" name="a">Médical</td>
        <td><input type="checkbox" name="a">Articles</td>
        <td><input type="checkbox" name="a">Autres</td>

      </tr>
      <td>Les subventions données :</td>
      <td colspan="3"><textarea style="width: 100%; height: 60px;" value="<?php echo $res['subvD']; ?>"></textarea></td>

    </table>
    <input type="submit" value="Enregistrer" >
  </form>
</body>
</html>