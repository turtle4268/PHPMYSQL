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
<table border="1">
    <tbody>
    <?php for($i=0;$i<9;$i++): ?>
        <tr>
            <?php for($s=0;$s<9;$s++): ?>
                <td><?php printf("%s*%s=%s",$i+1,$s+1,($i+1)*($s+1)) ?></td>
            <?php endfor; ?>
        </tr>
    <?php endfor; ?>
    </tbody>
</table>        
<?php
    $FF=1.254 ;
    printf('$FF=%.2f<br>',$FF);
    $a = isset($_GET['a']) ? $_GET['a'] : " ";
    $b=99 ;
     echo $a.'<br>' ;
     echo isset($b);
?>
<div class="nine"></div>
<img src='data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAOEAAADhCAMAAAAJbSJIAAAAeFBMVEX/////Bwf/AAD/q6v/8vL/Y2P/6Oj/+/v/i4v/Ly//uLj/7e3/4uL/SEj/KSn/0dH/Pj7/wMD/zMz/mJj/paX/s7P/TU3/nJz/YWH/eHj/dHT/19f/3d3/k5P/cHD/UVH/Njb/WFj/f3//jIz/ICD/EhL/xsb/MzOvL4bQAAAGZ0lEQVR4nO2d63raMAyGiQlnyqFdu7ICpS3t7v8OF84EYlm2JZ/m9+f2PJE/mtiSIimtViaTyWQymUwmk8lkMplMJnrK7ni5HHfLeA1IWQ6/OhtxxWz9NO8SGujOn9azawObztdwSWgAYrp6OFotzhz/odOmUNltd2QGHlZTAgMg83Xdco3df01WYysD49VEYWE9J9LSwHIBGL+sYdM2ttDeYAyIT577dT5TWj+voW+yN5R9vIEZ/R9yvsVZPy1hoauxXCD1HS1saTVOBxrWj0v40rLQ1zcwoNt1yo6u+cMShmgLQzMDHaKD8tnE/H4FLyOUgdGLsYVnAn29D0Pz6BWY/oJ7Ax89W4FLc/P7FbwqLbxaWrA8OSx+3+MKvmE3p/tta8DuTu1bmt+v4AcwMLf9BXcW+uYC1/bmdyv4LTXwm8bA2lTgK4n9agWfEgOfVAbUTzurwGoFfxoN/KEzYCSRzr7kPqJ5Bo4Gmn9DkBWh/WoFizsDC1oDK12Bc1L7DRsewTZdN6DpiXcJdvGbFdSjxjb59YVefmFLvYBqCY9X139kuP5WRyDtM3Jcgbj44SPyW6RofNalMPzCRe1HZrhFipu7BKZgWcDlzKA8J66vX2AFfvEsoFrCISYesl0fmVcYcS2gehR3QXnJ8RAeDeBC7g7bAgrxUF3/gfH6HYzAMd8CqiU8VyEn5/Ux+Wg6h7tpBYLloLhcH/FH7HIuYJ9K5b2+2rOhitk8IY1FLzD/xtwIoRLIug+4QJmYYtzK3bA/kAD4TntnCDjVTx62uUfAry8/ElD4ASqMX2AlERI4TUIh9F7xKQmF8hx7Eo+h4kGM3KE5ALk1ZQoCwRMxiY0G3Gqid0oPAK5pEltppfBJqjDy2PAEECMy5qBcAqQyXhJR+CJVOEtE4UyqcJCIwoFU4SQRhZP/WGH6d+kmEYUbqcL099LoU4kHgIRiEgEwGAKn77VRFnp5BCgBo65T8gRQcJp+fJhATn8HkNenLtfzBFDEl34mivkdviugd/mJKJQLTD/nnUaiBkjT8NSVOgcsOPmVhMJfgEKe0lnHgIW0CZRiqEowE9hMFVVRrIWJblB0CNE0k3kFfI2fhGcKlmK0UvDbVMWJ0Xs1oEeTxIOoeAx3vdu+l2iJurc78hMR0TcTeb4N0dj9FrnCN6XClu0IAK+Ib7VA4gZgx6DagaOOL3CtXe/xSlRUQJ/4iVghNIPjCp4eVgegm52jLVHED3KJ1K9R9zydifQdlKKXpAZTMzcv+FbuFmO3NSca09Mq/sYnUfzVERij/43xua9hGnvAh/awqF5kJ4YQ2qPpItts9LaZA1GVgCFd7jqM4yvIMbhHd0RUe6I7JOpENG+EdaYL1Ymk7huo61bBO6WDCoGcStNIFOE+NrBvJoLEm/60vTrBlw3jxgpBBN6hAHQeYOkFHQ2LwnpSctgbqtU2esFuHDQn1oOgTwRbKaUxRlBBoB6qqTfaRJA5YpKR82cCzKDqZEcxBFeXCdZYpiCRXmBgEqlv0QMBPYs8AgPaUU0SazgovmRgj6A8B295DECioPNkmnjzLlHovp/QZexZokBNmbVi5DVeFAVJuATT85hjFBOCgBeBt7Z91eROOjylp+yTTni8DJRCjAgmxEM5uLKAmxijb8HZ6OPz1GRMnUpkP+eboP9QCySQ8kO1aEpnB6MYePgi8B5Htbbi3ZO+lqNhKCZfq6LDwawQYI6HE7hPDQ+nxC28EaOXU+KWEWMLivh2ECyp6bG9RBUzN8GSGqb+aNMPN3LA0vBm831Retr039rjyvqaQp1nZM4ZmkCbhHOQUtOH0hEXE1+uNgxZp7uy49wbROXv5l8w5ofEEfftasPYO+IBuNowtukboRrc4R+79I2nhIwePYuJ0mIQiqsNY5y+8ZmQ0cPw1Aj5lLjFqHjatpzZLc/a+42gLVPjRzfWCDCWUKEXawQZS6jQyVAFknHSBZ+hEps4jsF7kAdjPMfgPaiDMaZj8B5EEg77QfRQUValcpTCugWOGFnrDF0BRYwRRIMY5D03ZD0vvpF1ThF1LYVA2TiXSWzDTIqa0fAVIuCLPlFy597E7Mg0c1PP6LLO0BW1+QXmMwJC5sqDC+vlJx3nkk3XhZTuOPYVhfZ2l5L9WJ8UXFE5P0LYDXkIn2kavnYmk8lkMplMJpPJZDKZTCZzxz8dwYc5Q9xpFwAAAABJRU5ErkJggg==' />
<script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="
        crossorigin="anonymous"></script>
<script>
    // for(i=0;i<9;i++){
    //     for(s=0;s<9;s++){
    //         var result=(i+1)*(s+1);
    //         if(result<100) result=" "+result;
    //         if(result<10) result=" "+result;

    //         $(".nine").append(result);
    //     }
    //     $(".nine").append("<br>");
    // }
</script>
</body>
</html>