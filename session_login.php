<!DOCTYPE html>
<?php 
    session_start() ;   //啟動session
    if(isset($_POST['user'])){
        if($_POST['user']=='shin' and $_POST['password']=='1234'){
            $_SESSION['login']='shin' ;
        }
    }
?>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cookie</title>
    <style>
      
    </style>
</head>

<body>
    <?php 
        if(isset($_SESSION['login'])): ?>
            <?php echo $_SESSION['login']." ,welcome!" ;?>
        
    <?php else: ?>
    <form action="" method="post">
        <input type="text" name="user"><br>
        <input type="password" name="password"><br>
        <input type="submit">
    </form>
    <?php endif; ?>

    <script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="
        crossorigin="anonymous"></script>
    <script>
 
    </script>

</body>

</html>