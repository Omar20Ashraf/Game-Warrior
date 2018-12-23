<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Email</title>
</head>
<body>
    
    <h1>Hi admin</h1>
    <p>You have new email from <?php echo e($name); ?> </p>
    <p>Subject:  <?php echo e($subject); ?> </p>
    <p>Email:  <?php echo e($email); ?> </p>
    <hr />
    <p>The message is: <?php echo e($body); ?> </p>
    
</body>
</html>