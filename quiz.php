<?php
$puan = null;

if($_SERVER["REQUEST_METHOD"] == "POST")
{
    $puan = 0;

    if(isset($_POST["s1"]) && $_POST["s1"] == "2000")
        $puan++;

    if(isset($_POST["s2"]) && $_POST["s2"] == "Walkman")
        $puan++;

    if(isset($_POST["s3"]) && $_POST["s3"] == "Atari")
        $puan++;
}
?>

<!DOCTYPE html>
<html lang="tr">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Nostalji Testi</title>

<style>

body{
    background:linear-gradient(-45deg,#08033a,#780038,#021432,#490025);
    background-size:400% 400%;
    animation:bg 15s infinite;
    color:white;
    font-family:Arial,sans-serif;
    text-align:center;
    min-height:100vh;
    margin:0;
    padding:30px;
}

@keyframes bg{
    0%{background-position:0%}
    50%{background-position:100%}
    100%{background-position:0%}
}

.quiz-box{
    max-width:800px;
    margin:auto;
    padding:30px;
    background:rgba(255,255,255,0.1);
    border-radius:20px;
    backdrop-filter: blur(5px);
}

.site-title{
    font-size:3rem;
    margin-bottom:10px;
    color:#00ffcc;
}

h3{
    margin-top:30px;
}

input[type="radio"]{
    margin:10px;
}

button{
    margin-top:20px;
    padding:12px 30px;
    border:none;
    border-radius:30px;
    background:#00ffcc;
    color:black;
    font-size:18px;
    font-weight:bold;
    cursor:pointer;
}

button:hover{
    box-shadow:0 0 20px #00ffcc;
}

a{
    color:#00ffcc;
    text-decoration:none;
    font-weight:bold;
}

a:hover{
    color:white;
}

```css
.sonuc{
    margin-top:30px;
    padding:25px;
    border-radius:20px;
    background:rgba(255,255,255,0.12);
    border:2px solid #00ffcc;
    box-shadow:0 0 25px rgba(0,255,204,0.6);
    animation:parlaKutusu 2s infinite alternate;
}

.rozet{
    font-size:90px;
    margin:15px 0;
    animation:don 3s linear infinite;
}

.unvan{
    font-size:28px;
    color:#00ffcc;
    font-weight:bold;
    margin:10px 0;
}

.aciklama{
    font-size:
```


</style>

</head>

<body>

<div class="quiz-box">

<h1 class="site-title">🎮 NOSTALJİ TESTİ</h1>

<p>Zamanda ne kadar geriye gidebildiğini test et!</p>

<form method="POST">

<h3>1) MSN Messenger en çok hangi dönemde kullanıldı?</h3>

<input type="radio" name="s1" value="1980">1980<br>
<input type="radio" name="s1" value="1990">1990<br>
<input type="radio" name="s1" value="2000">2000<br>

<h3>2) Kaset dinlemek için kullanılan cihaz hangisidir?</h3>

<input type="radio" name="s2" value="Walkman">Walkman<br>
<input type="radio" name="s2" value="iPod">iPod<br>
<input type="radio" name="s2" value="MSN">MSN<br>

<h3>3) Hangisi bir oyun konsoludur?</h3>

<input type="radio" name="s3" value="Atari">Atari<br>
<input type="radio" name="s3" value="DVD">DVD<br>
<input type="radio" name="s3" value="CD">CD<br><br>

<button type="submit">Testi Bitir</button>

</form>
<?php
if($puan !== null)
{
    echo "<div class='sonuc'>";
    echo "<h2>Puanın: $puan / 3</h2>";

    if($puan == 3)
    {
        echo "<div class='rozet'>🏆</div>";
        echo "<h2>Zaman Yolcusu Ustası</h2>";
        echo "<p>Altın Kaset Rozeti Kazandın!</p>";
    }
    elseif($puan == 2)
    {
        echo "<div class='rozet'>📼</div>";
        echo "<h2>Nostalji Meraklısı</h2>";
        echo "<p>Gümüş Walkman Rozeti Kazandın!</p>";
    }
    elseif($puan == 1)
    {
        echo "<div class='rozet'>💾</div>";
        echo "<h2>Acemi Gezgin</h2>";
        echo "<p>Bronz Disket Rozeti Kazandın!</p>";
    }
    else
    {
        echo "<div class='rozet'>🚀</div>";
        echo "<h2>Zamanda Kayboldun</h2>";
        echo "<p>Kayıp Tamagotchi Rozeti Kazandın!</p>";
    }

    echo "</div>";
}
?>


<br>

<a href="index.php">⬅ Ana Sayfaya Dön</a>

</div>

</body>
</html>