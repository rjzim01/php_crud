<?php include 'php/update.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    
    <div class="container">
        <form action="php/update.php" 
              method="post">

            <h4 class="display-4 text-center">Update</h4><hr><br>
            <?php if (isset($_GET['error'])) { ?>
            <div class="alert alert-danger" role="alert">
                <?php echo $_GET['error']; ?>
            </div>
            <?php } ?>
            <div class="form-group">
            <label for="name">Name</label>
            <input type="name"
                    id="name" 
                    class="form-control"
                    name="name" 
                    value="<?=$row['name'] ?>" >
                    
            </div>

            <div class="form-group">
            <label for="email">Email</label>
            <input type="email" 
                    id="email" 
                    class="form-control"
                    name="email"
                    value="<?=$row['email'] ?>" >
            </div>
            <input type="text"
                    name="id"
                    value="<?=$row['id']?>"
                    hidden >

            <button type="submit" 
                    class="btn btn-primary"
                    name="update">Update</button>
            <a href="read.php" class="link-primary">View</a>
        </form>
    </div>
</body>
</html>