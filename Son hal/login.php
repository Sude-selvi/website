


<!DOCTYPE html>
<html lang="tr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Giriş Yap</title>

    <link rel="stylesheet" href="style.css">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

</head>

<body class="loginbody">
    <div class="table-responsive login">
        <div class="loginekrani">
            <div class="loginbaslik mt-5">
                <h2>GİRİŞ YAP</h2>
<?php
$ema='b1812100001@sakarya.edu.tr';
$sif='b1812100001';
ob_start();

if(isset($_POST['email'])){
    $email=$_POST['email'];
    $sifre=$_POST['sifre'];

    if($email==$ema && $sifre==$sif){
        header('location:login.html');
    }
    else{
        echo'Hatali giris.Lütfen tekrar deneyin.';
    }
}
?>

            </div>
            <form action="login.php" method="POST">
                <table class="logintable">
                    <tr>
                        <td>E-posta: </td>
                        <td><input type="email" name="email" autofocus required autocomplete="off" placeholder="e-postanızı giriniz"></td>
                    </tr>
                    <tr>
                        <td>Şifre: <td>
                        <td><input type="password" name="sifre" required placeholder="şifrenizi giriniz"></td>
                    </tr>
                    <tr>
                        <td colspan="2"><button type="submit">GÖNDER</button></td>
                    </tr>
                </table>
            </form>
        </div>
    </div>
</body>

</html>