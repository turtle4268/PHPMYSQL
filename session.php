<!DOCTYPE html>
<?php 
    session_start() ;   //啟動session
    $_SESSION['my_session']=100;    //設定session
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
        echo $_SESSION['my_session'] ;
    ?>
    
    <script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="
        crossorigin="anonymous"></script>
    <script>
 
    </script>

</body>

</html>