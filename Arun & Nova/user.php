<!DOCTYPE html>
<html lang="en">
<head>
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>patient login</title>
</head>
<body>
    
    <form action="twenty.php" method="POST">
        <div class="form-row">
          <div class="form-group col-md-6">
            <label >Name</label>
            <input type="text" name="name" placeholder="name">
          </div>
          <div class="form-group col-md-6">
            <label >Email</label>
            <input type="email" name="mail" placeholder="email">
          </div>
          <div class="form-group col-md-6">
            <label >Mobile</label>
            <input type="number" name="ph" placeholder="mobile">
          </div>
          <div class="form-group col-md-6">
            <label >password</label>
            <input type="password" name="pass" placeholder="password">
          </div>
          
        <button type="submit" name="signup" class="btn btn-primary">Sign in</button><br>
        <a href="userlogin.php">Already registered;login</a>
      </form>


    <!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>
</html>
