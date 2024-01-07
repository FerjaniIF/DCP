<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/font-awesome@5.15.1/css/all.min.css">
    <link rel="stylesheet" href="design.css">
</head>
<body>

<div class="container">
<div class="row">
        <div class="col-md-6">
            <img src="maman.jpeg" alt="Image Left" class="img-fluid">
        </div>
        <div class="col-md-6">
    <!-- Sign Up Form -->
    <form method="post" action="data.php?page=signup">

        <div class="mb-3">
            <label for="signupName" class="form-label">CIN</label>
            <input type="text" class="form-control" id="signupCIN" name="signupCin" required>
        </div>
        <div class="mb-3">
            <label for="signupEmail" class="form-label">username</label>
            <input type="text" class="form-control" id="signupusername" name="signupusername" required>
        </div>
        <div class="mb-3">
            <label for="signupPassword" class="form-label">Password</label>
            <input type="password" class="form-control" id="signupPassword" name="signupPassword" required>
        </div>
        <button type="submit" class="btn btn-success"><i class="fas fa-user-plus"></i> Sign Up</button>
    </form>
    
<a href="login.php">J'ai déjà un compte. Se connecter ici.</a>

</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>


