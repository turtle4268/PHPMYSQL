<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
      
    </style>
</head>

<body>
  <?php 
    $a=[3,4,5,6];
    $b=["name"=>"peter",
        "age"=>25,
        "team"=>"SFG"
    ];

    print_r($a);
    echo "<br>";
    print_r($b);

    $a[]='a';   //新增陣列元素
    $a[]='b';

    foreach($a as $i=>$j){
        echo "$i :: $j";
        echo "<br>";
    }

    $i=10;
    $j=20;
    function swap(&$m,&$n){
        $x=$m;
        $m=$n;
        $n=$x;
    }
    swap($i,$j);
    echo "$i , $j";

  ?>
    
    <script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="
        crossorigin="anonymous"></script>
    <script>
 
    </script>

</body>

</html>