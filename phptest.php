<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <?php
        echo 70+30 ;
        echo '<br>';
        define("MY_CONT",123456); 
        echo MY_CONT ; echo '<br>';
        echo __DIR__ ; echo '<br>';
        echo __FILE__ ; echo '<br>';
        echo PHP_VERSION ; echo '<br>';
        print("HJK"); echo '<br>';
        for($i=0;$i<6;$i++){
            echo $i.'<br>'; //.為連接字串用
        }
        $a = "Victor";
        echo "Hello, $a"; echo '<br>';
        echo 'Hello, $a'; echo '<br>';
        echo 'Hello, '.$a.'<br>';
        echo "Hello, $a 123"; echo '<br>';
        echo "Hello, {$a}123"; echo '<br>';
        echo "Hello, ${a}123"; echo '<br>';

    ?> 
    <br>
    <?= MY_CONT ?>
<table border="1">
    <tbody>
    <?php for($i=0;$i<9;$i++): ?>
        <tr>
            <?php for($s=0;$s<9;$s++): ?>
                <td><?= ($i+1).'*'.($s+1).'='.($i+1)*($s+1) ?></td>
            <?php endfor; ?>
        </tr>
    <?php endfor; ?>
    </tbody>
</table>    
<div class="nine"></div>
<script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="
        crossorigin="anonymous"></script>
<script>
    for(i=0;i<9;i++){
        for(s=0;s<9;s++){
            var result=(i+1)*(s+1);
            if(result<100) result=" "+result;
            if(result<10) result=" "+result;

            $(".nine").append(result);
        }
        $(".nine").append("<br>");
    }
</script>
</body>
</html>