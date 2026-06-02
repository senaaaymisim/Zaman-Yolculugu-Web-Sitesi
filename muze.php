
<!DOCTYPE html>
<html lang="tr">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Nostalji Müzesi</title>

<style>

*{
margin:0;
padding:0;
box-sizing:border-box;
font-family:Arial,sans-serif;
}

body{
background:linear-gradient(-45deg,#08033a,#780038,#021432,#490025);
background-size:400% 400%;
animation:bg 15s infinite;
color:white;
text-align:center;
min-height:100vh;
padding:40px;
}

@keyframes bg{
0%{background-position:0%}
50%{background-position:100%}
100%{background-position:0%}
}

h1{
font-size:4rem;
margin-bottom:20px;
color:#00ffcc;
text-shadow:0 0 20px #00ffcc;
animation:parla 2s infinite alternate;
}

@keyframes parla{
from{
text-shadow:0 0 10px #00ffcc;
}
to{
text-shadow:0 0 35px #00ffcc;
}
}

.muze{
display:flex;
justify-content:center;
flex-wrap:wrap;
gap:30px;
margin-top:50px;
}

.kart{
width:260px;
padding:25px;
border-radius:20px;
background:rgba(255,255,255,0.1);
backdrop-filter:blur(10px);
border:2px solid rgba(255,255,255,0.2);
transition:.4s;
cursor:pointer;
}

.kart:hover{
transform:translateY(-15px) scale(1.05);
box-shadow:0 0 35px #00ffcc;
}

.ikon{
font-size:70px;
margin-bottom:15px;
}

.yil{
color:#00ffcc;
font-weight:bold;
margin:10px 0;
}

.aciklama{
font-size:15px;
line-height:1.6;
}

.btn{
display:inline-block;
margin-top:40px;
padding:15px 30px;
border:2px solid #00ffcc;
border-radius:30px;
color:#00ffcc;
text-decoration:none;
font-weight:bold;
transition:.4s;
}

.btn:hover{
background:#00ffcc;
color:black;
}

</style>
</head>
<body>

<h1>🏛 NOSTALJİ MÜZESİ</h1>

<p>Geçmişin unutulmaz teknolojilerine hoş geldin</p>

<div class="muze">

<div class="kart">
<div class="ikon">📼</div>
<h2>Walkman</h2>
<div class="yil">1979</div>
<div class="aciklama">
Kaset dinleme kültürünü dünyaya yaydı.
</div>
</div>

<div class="kart">
<div class="ikon">🕹</div>
<h2>Atari</h2>
<div class="yil">1977</div>
<div class="aciklama">
Ev tipi oyun konsollarının efsanesi.
</div>
</div>

<div class="kart">
<div class="ikon">💬</div>
<h2>MSN</h2>
<div class="yil">1999</div>
<div class="aciklama">
Bir neslin vazgeçilmez mesajlaşma uygulaması.
</div>
</div>

<div class="kart">
<div class="ikon">💾</div>
<h2>Disket</h2>
<div class="yil">1980'ler</div>
<div class="aciklama">
Dosya taşımanın en popüler yolu.
</div>
</div>

<div class="kart">
<div class="ikon">📱</div>
<h2>Nokia 3310</h2>
<div class="yil">2000</div>
<div class="aciklama">
Dayanıklılığı ile efsaneleşen telefon.
</div>
</div>

<div class="kart">
<div class="ikon">🐣</div>
<h2>Tamagotchi</h2>
<div class="yil">1996</div>
<div class="aciklama">
Dijital evcil hayvan çılgınlığını başlattı.
</div>
</div>

</div>

<a class="btn" href="index.php">
⬅ Ana Sayfaya Dön
</a>

</body>
</html>
