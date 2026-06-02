
<!DOCTYPE html>
<html lang="tr">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Nostalji Duvarı</title>

<style>

body{
    background:linear-gradient(-45deg,#08033a,#780038,#021432,#490025);
    background-size:400% 400%;
    animation:bg 15s infinite;
    color:white;
    text-align:center;
    font-family:Arial,sans-serif;
    min-height:100vh;
    padding:30px;
}

@keyframes bg{
    0%{background-position:0%}
    50%{background-position:100%}
    100%{background-position:0%}
}

h1{
    color:#00ffcc;
    font-size:3rem;
}

.yorumlar{
    margin-top:40px;
    display:flex;
    flex-direction:column;
    gap:20px;
    align-items:center;
}

.yorum{
    width:70%;
    background:rgba(255,255,255,0.1);
    border-radius:20px;
    padding:20px;
    backdrop-filter:blur(8px);
    box-shadow:0 0 20px rgba(0,255,204,0.4);
    text-align:left;
}

.isim{
    color:#00ffcc;
    font-size:20px;
    font-weight:bold;
    margin-bottom:10px;
}

.btn{
    display:inline-block;
    margin-top:30px;
    padding:12px 25px;
    border:2px solid #00ffcc;
    border-radius:25px;
    color:#00ffcc;
    text-decoration:none;
}

.btn:hover{
    background:#00ffcc;
    color:black;
}

</style>
</head>

<body>

<h1>📝 Nostalji Duvarı</h1>

<p>Ziyaretçilerin paylaştığı tüm anılar</p>

<div class="yorumlar">

<?php

if(file_exists("yorumlar.txt"))
{
    $satirlar = file("yorumlar.txt", FILE_IGNORE_NEW_LINES);

    foreach(array_reverse($satirlar) as $satir)
    {
        $parcalar = explode("|", $satir);

        $isim = $parcalar[0] ?? "Anonim";
        $yorum = $parcalar[1] ?? "";

        echo "<div class='yorum'>";
        echo "<div class='isim'>👤 $isim</div>";
        echo "$yorum";
        echo "</div>";
    }
}

?>

</div>

<a class="btn" href="index.php">
⬅ Ana Sayfaya Dön
</a>

</body>
</html>

