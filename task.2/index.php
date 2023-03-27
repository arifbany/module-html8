<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>task2</title>
</head>
<body>
<form action="login.php" method="post">
          <div class="mb-3">
            <label for="email" class="form-label">Email address</label>
            <input type="email" name="email" class="form-control border border-success email" id="email" required />
          </div>
          <div class="mb-3">
            <label for="password" class="form-label">Password</label>
            <input type="password" name="password" class="form-control border border-success" required />
          </div>

          <div class="d-grid">
            <button class="btn btn-success" type="submit" name="submit">Login</button>
          </div>

          <?php if (isset($_GET['error_message'])) : ?>
            <p style="color: red;"><?php echo $_GET['error_message']; ?></p>
          <?php endif; ?>

        </form>



</body>
</html>

