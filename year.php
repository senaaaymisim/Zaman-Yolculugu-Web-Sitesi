```php
<?php

$yil = $_GET['yil'] ?? 1970;

$bilgiler = [

1970 => [
    "tur" => "Anadolu Rock",
    "sanatci" => "3 Hürel",
    "olay" => "Anadolu Rock müziğinin yükseliş dönemi başladı ve kaset kültürü yaygınlaşmaya başladı."
],

1980 => [
    "tur" => "Arabesk",
    "sanatci" => "Gülden Karaböcek",
    "olay" => "Arabesk müzik geniş kitlelere ulaştı ve müzik piyasasında büyük etki yarattı."
],

1990 => [
    "tur" => "Türk Pop",
    "sanatci" => "Levent Yüksel",
    "olay" => "Türk pop müziği altın çağını yaşadı ve birçok unutulmaz sanatçı ortaya çıktı."
],

2000 => [
    "tur" => "Pop & Rock",
    "sanatci" => "Ayna",
    "olay" => "CD ve MP3 dönemi yaygınlaştı, dijital müzik hayatımıza girmeye başladı."
],

2010 => [
    "tur" => "Rap",
    "sanatci" => "Ceza",
    "olay" => "Dijital müzik platformları ve çevrim içi müzik dinleme alışkanlığı hızla yayıldı."
]

];

$playlist = [
    1970 => "https://www.youtube.com/watch?v=4BjH_pJ2p-w",
    1980 => "https://www.youtube.com/watch?v=lpqkCzsx6qo",
    1990 => "https://www.youtube.com/watch?v=-1PgwI1oWo",
    2000 => "https://www.youtube.com/watch?v=EyjAEIh3hRI",
    2010 => "https://www.youtube.com/watch?v=M6YLiq7-crE"
];

?>

<!DOCTYPE html>
<html lang="tr">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title><?php echo $yil; ?> Yılı</title>

<style>

body{
    background:linear-gradient(-45deg,#08033a,#780038,#021432,#490025);
    background-size:400% 400%;
    animation:bg 15s infinite;
    color:white;
    text-align:center;
    font-family:Arial,sans-serif;
    min-height:100vh;
    margin:0;
    padding:30px;
}

@keyframes bg{
    0%{background-position:0%}
    50%{background-position:100%}
    100%{background-position:0%}
}

.kutu{
    max-width:800px;
    margin:auto;
    padding:30px;
    background:rgba(255,255,255,0.1);
    border-radius:20px;
    backdrop-filter:blur(5px);
}

h1{
    color:#00ffcc;
    font-size:3rem;
}

a{
    color:#00ffcc;
    text-decoration:none;
    font-weight:bold;
}

.btn{
    display:inline-block;
    margin-top:20px;
    padding:12px 25px;
    border:2px solid #00ffcc;
    border-radius:25px;
}

.btn:hover{
    background:#00ffcc;
    color:black;
}

</style>
</head>

<body>

<div class="kutu">

<h1><?php echo $yil; ?></h1>

<h2>🎵 Müzik Türü</h2>
<p><?php echo $bilgiler[$yil]["tur"]; ?></p>

<h2>🎤 Dönemin Sanatçısı</h2>
<p><?php echo $bilgiler[$yil]["sanatci"]; ?></p>

<h2>📼 Bu Yılda Ne Oldu?</h2>
<p><?php echo $bilgiler[$yil]["olay"]; ?></p>

<a class="btn" href="<?php echo $playlist[$yil]; ?>" target="_blank">
🎶 Şarkıları Dinle
</a>

<br><br>

<a class="btn" href="index.php">
⬅ Ana Sayfaya Dön
</a>

</div>

</body>
</html>
```
