<?php  
include_once('../controllers/EnfController.php');
$enfCtr = new EnfController();
$res = $enfCtr->liste();
?>
<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="css/form.css" />
  <title>Association voix de l'enfant</title>
  <link rel="shortcut icon" href="images/rectangle-80.png">

  <style>
    body {
        font-family: Arial, sans-serif;
        margin: 0;
        padding: 0;
    }

    .container {
        width: 90%;
        margin: 0 auto;
    }

    table {
        width: 100%;
        border-collapse: collapse;
        margin-top: 20px;
    }

    th, td {
        padding: 20px;
        text-align: left;
        border-bottom: 1px  #000000; 
        height: 50px; 
        
    }

    td {
        background-color: #E6D2F0;
    }

    th {
        background-color: #f2f2f2;
        font-weight: bold;
    }

  .button-cell {
        display: inline-block;
        margin-right: 5px;
        background-color: #fff; 
        border-radius: 50%; 
    }

    .button-cell:hover {
        background-color: #f5f5f5;
    }

    .edit-btn,
    .delete-btn {
        display: block;
        width: 30px;
        height: 30px;
        border-radius: 20%; 
        background-size: cover;
        background-repeat: no-repeat;
    }

    .edit-btn {
        background-image: url('images/edit1.png');
    }

    .delete-btn {
        background-image: url('images/trash.png');
    }
    
  </style>

<div class="container-fluid">
    <form class="d-flex" role="search" method="GET" action="searchName.php">
        <input class="form-control me-2" type="search" placeholder="Rechercher par CIN" name="searchN">
        <input type="submit" value="Rechercher">
    </form>
</div>


</head>
<body>
  <div>
    <svg class="mdi-baby" width="80" height="65" viewBox="0 0 77 65" fill="none" xmlns="http://www.w3.org/2000/svg">
    </svg>
  </div>
  <section class="service_section layout_padding">
      <div class="container py_mobile_45">
        
        <table align="center" border=1>
          <thead>
              <tr>
                  <th>CIN</th>
                  <th>Nom</th>
                  <th>Prénom</th>
                  <th>Téléphone</th>
                  <th>Adresse</th>
                  <th>Nombre d'enfants</th>
                  <th>Niveau d'étude</th>
                  <th>Statut marital</th>
                  <th>Formation</th>
                  <th>Type de subvention</th>
                  <th>Subventions données</th>
                  <th>Actions</th>
              </tr>
          </thead>
          <tbody>
            <?php foreach ($res as $row): ?>
            <tr>
              <td><?php echo $row['cin']; ?></td>
              <td><?php echo $row['nom']; ?></td>
              <td><?php echo $row['pre']; ?></td>
              <td><?php echo $row['tel']; ?></td>
              <td><?php echo $row['adr']; ?></td>
              <td><?php echo $row['nbenf']; ?></td>
              <td><?php echo $row['ne']; ?></td>
              <td><?php echo $row['stat']; ?></td>
              <td><?php echo $row['form']; ?></td>
              <td><?php echo $row['subv']; ?></td>
              <td><?php echo $row['subvD']; ?></td>
              <td>
                <span class="button-cell"><a href="editForm.php?cin=<?php echo $row['cin']; ?>" class="edit-btn"></a></span>
                <span class="button-cell"><a href="supp.php?cin=<?php echo $row['cin']; ?>" class="delete-btn"></a></span>
              </td>

            </tr>
            <?php endforeach; ?>
          </tbody>
        </table>             
      </div>
      <div class="container">
        <button class="btn button-style" onclick="window.location.href='form.html'">Ajouter</button>
      </div>
    </section>

</body>
</html>

