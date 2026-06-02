
<?php

$secilenYil = $_POST['yil'] ?? '';

$veriler = [

1970 => "🎵 Anadolu Rock yükselişte<br>📼 Kaset dönemi başlıyor<br>🎤 3 Hürel dönemi",

1980 => "🎵 Arabesk zirvede<br>📻 Radyo kültürü yaygın<br>🎤 Gülden Karaböcek dönemi",

1990 => "🎵 Türk Pop altın çağı<br>💬 İnternet yaygınlaşıyor<br>🎤 Levent Yüksel dönemi",

2000 => "🎵 MP3 dönemi başlıyor<br>📱 Cep telefonları yaygınlaşıyor<br>🎤 Ayna dönemi",

2010 => "🎵 Dijital müzik dönemi<br>📲 Akıllı telefonlar yaygınlaşıyor<br>🎤 Ceza dönemi"

];

?>

<!DOCTYPE html>
<html lang="tr">
<head>
<meta charset="UTF-8">
<title>Zaman Makinesi</title>

<style>

body{
background:linear-gradient(-45deg,#08033a,#780038,#021432,#490025);
background-size:400% 400%;
animation:bg 15s infinite;
color:white;
font-family:Arial;
text-align:center;
padding:50px;
}

@keyframes bg{
0%{background-position:0%}
50%{background-position:100%}
100%{background-position:0%}
}

.kutu{
max-width:700px;
margin:auto;
padding:30px;
border-radius:20px;
background:rgba(255,255,255,0.1);
backdrop-filter:blur(10px);
}

select{
padding:12px;
font-size:18px;
border-radius:10px;
}

button{
padding:12px 25px;
border:none;
border-radius:10px;
margin-left:10px;
cursor:pointer;
}

.sonuc{
margin-top:30px;
font-size:20px;
line-height:2;
}

</style>

</head>
<body>

<div class="kutu">

<h1>🚀 Zaman Makinesi</h1>

<form method="POST">

<select name="yil">

<option value="">Yıl Seç</option>
<option value="1970">1970</option>
<option value="1980">1980</option>
<option value="1990">1990</option>
<option value="2000">2000</option>
<option value="2010">2010</option>

</select>

<button type="submit">
Git
</button>

</form>

<?php
if($secilenYil != '')
{
echo "<div class='sonuc'>";
echo "<h2>$secilenYil</h2>";
echo $veriler[$secilenYil];
echo "</div>";
}
?>

<br><br>

<a href="index.php" style="color:#00ffcc;">
⬅ Ana Sayfa
</a>

</div>

</body>
</html>

