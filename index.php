<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $isim  = trim($_POST['isim'] ?? '');
    $yorum = trim($_POST['yorum'] ?? '');

    if (!empty($isim) && !empty($yorum)) {
        $isim  = htmlspecialchars($isim, ENT_QUOTES, 'UTF-8');
        $yorum = htmlspecialchars($yorum, ENT_QUOTES, 'UTF-8');

        file_put_contents("yorumlar.txt", $isim . "|" . $yorum . "\n", FILE_APPEND);
    }

    header("Location: index.php");
    exit;
}

$sayac = file_get_contents("counter.txt");
$sayac++;
file_put_contents("counter.txt", $sayac);
?>
<!DOCTYPE html>
<html lang="tr">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Zaman Yolculuğu | 1970–2010</title>
</style>
<style>
    @import url('https://fonts.googleapis.com/css2?family=Monoton&family=Poppins&display=swap');
    .yorumlar{
  margin-top:40px;
  display:flex;
  flex-direction:column;
  gap:15px;
  align-items:center;
}

.yorum{
  background:rgba(0,0,0,0.6);
  padding:15px 20px;
  border-radius:15px;
  width:60%;
  box-shadow:0 0 15px rgba(0,255,200,0.4);
  text-align:left;
}

textarea{
  width:300px;
  height:80px;
  border-radius:10px;
  padding:10px;
  border:none;
}

button{
  margin-top:10px;
  padding:10px 20px;
  border:none;
  border-radius:10px;
  background:#00ffcc;
  cursor:pointer;
}s
@import url('https://fonts.googleapis.com/css2?family=Monoton&family=Poppins&display=swap');
*{margin:0;padding:0;box-sizing:border-box;font-family:Poppins}

body{
  color:white;
  text-align:center;
  background:linear-gradient(-45deg,#08033a,#780038,#021432,#490025);
  background-size:400% 400%;
  animation:bg 15s infinite;
  overflow-x: hidden;
}

@keyframes bg{
  0%{background-position:0%}
  50%{background-position:100%}
  100%{background-position:0%}
}

.page { display: none; min-height: 100vh; animation: fadeIn 0.5s ease; }
.active-page { display: block; }
@keyframes fadeIn { from { opacity: 0; } to { opacity: 1; } }

nav{
  position:fixed;
  top:0;
  width:100%;
  padding:15px;
  background:rgba(21, 137, 23, 0.6);
  z-index:100;
}
nav a{
  color:white;
  margin:0 15px;
  text-decoration:none;
  transition:.3s;
  cursor: pointer;
  font-weight: bold;
}
nav a:hover{color:yellow}

.site-title{
  margin-top:120px;
  font-family:Monoton;
  font-size:4.5rem;
  background:linear-gradient(90deg,red,orange,yellow,green,cyan,blue,purple);
  background-size:400%;
  -webkit-background-clip:text;
  color:transparent;
  animation:renk 6s infinite linear;
  word-spacing: 0.5em; 
}

@keyframes renk{
  to{background-position:400%}
}
h2{margin-top:20px}

.arc-timeline{
  width:100%;
  max-width:1000px;
  margin:100px auto;
  position:relative;
  height:250px;
}
svg{
  width:100%;
  height:100%;
}

.arc{
  fill:none;
  stroke:white;
  stroke-width:6;
  stroke-dasharray:1200;
  stroke-dashoffset:1200;
  animation:drawArc 2.5s ease forwards;
}
@keyframes drawArc{
  to{stroke-dashoffset:0}
}

.mark{
  position:absolute;
  cursor:pointer;
  text-align:center;
}

.mark span{
  display:block;
  margin-top:10px;
  font-weight:bold;
}
.mark-circle{
  width:36px;
  height:36px;
  border-radius:50%;
  background:#111;
  border:3px solid white;
  margin:0 auto;
  transition:transform .3s, background .3s;
}
.mark:hover .mark-circle{
  transform:scale(1.4);
  background:white;
}

.info-box{
  position:absolute;
  display:flex;
  flex-direction:column;
  align-items:flex-start;
  gap:8px;
  padding:15px 20px;
  border-radius:12px;
  background:#333;
  color:white;
  font-weight:bold;
  opacity:0;
  pointer-events:none;
  transform:translateY(-20px) scale(0.9);
  transition:opacity .4s ease, transform .4s ease;
  white-space:nowrap;
  z-index:5;
  min-width:180px;
}
.info-box .cover{
  width:120px;
  height:120px;
  object-fit:cover;
  border-radius:6px;
  margin-top:5px;
}
.info-text{
  display:flex;
  flex-direction:column;
  text-align: left;
}
.mark:hover .info-box{
  opacity:1;
  transform:translateY(-240px) scale(1);
}

.m1 .info-box{background:#ff595e;}
.m2 .info-box{background:#ffca3a; color:black;}
.m3 .info-box{background:#8ac926; color:black;}
.m4 .info-box{background:#1982c4;}
.m5 .info-box{background:#6a4c93;}

.m1{left:8%; top:160px;}
.m2{left:28%; top:150px;}
.m3{left:48%; top:145px;}
.m4{left:68%; top:150px;}
.m5{left:88%; top:160px;}

section{
  display:flex;
  justify-content:center;
  gap:25px;
  padding:40px;
  flex-wrap:wrap;
}
.card-link { text-decoration: none; color: inherit; }
.card{
  width:220px;
  padding:25px;
  border-radius:20px;
  transition:.4s;
  text-align: center;
  position: relative;
}
.card img{width:120px; height:120px; object-fit:cover; border-radius:12px; margin-bottom:10px;}
.card:hover{transform:scale(1.15);box-shadow:0 0 30px white}

.c1{background:#ff595e} /* Walkman */
.c2{background:#d3d3d3; color:black} /* Atari */
.c3{background:#8ac926} /* iPod */
.c4{background:#00aaff} /* MSN */
.c5{background:#1982c4} /* Plak Çalar */
.c6{background:#ff6f61} /* Sony VCD */
.c7{background:#6a4c93} /* CD & DVD */

.portal-btn {
    display: inline-block; padding: 15px 45px; margin: 50px 0;
    font-size: 1.3rem; font-weight: bold; color: #00ffcc;
    border: 3px solid #00ffcc; border-radius: 50px; cursor: pointer; background: transparent; transition: 0.4s;
}
.portal-btn:hover { background: #00ffcc; color: black; box-shadow: 0 0 40px #00ffcc; }

footer{opacity:.6;padding:20px}
.counter{
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  font-size: 2rem;
}
.counter-box{
  position:absolute;
  top:50%;
  left:50%;
  transform:translate(-50%, -50%);
  padding:25px 40px;
  border-radius:20px;
  background:rgba(0,0,0,0.5);
  backdrop-filter:blur(10px);
  box-shadow:0 0 25px rgba(0,255,200,0.5);
  text-align:center;
}

.counter-box .label{
  display:block;
  font-size:1rem;
  color:#aaa;
  letter-spacing:2px;
  margin-bottom:10px;
}


.number{
  font-family: monospace;
  letter-spacing: 3px;
}
.counter-box{
  position:absolute;
  top:65%;   /* BURAYI DEĞİŞTİRDİK */
  left:50%;
  transform:translate(-50%, -50%);
}
</style>
</head>

<body>
<h1 class="site-title">ZAMAN&nbsp;YOLCULUĞU</h1>
<div class="bg-animate"></div>

<nav>
  <a onclick="showPage('page1')">1970–2010</a>
  <a onclick="showPage('page2')">1980–2000 Dijital</a>
    <a href="quiz.php">🎮 Nostalji Testi</a>
    <a href="muze.php">🏛 Nostalji Müzesi</a>
    <a href="zamanmakinesi.php">🚀 Zaman Makinesi</a>
</nav>

<div id="page1" class="page active-page">
    <div class="counter-box">
  <span class="label">Ziyaretçi Sayısı :</span>
  <span class="number" id="counter" data-target="<?php echo $sayac; ?>">0</span>
</div>

    <h2>1970–2010</h2>

    <div class="arc-timeline">
      <svg viewBox="0 0 1000 250">
        <path d="M100 180 Q500 160 900 180" class="arc"/>
      </svg>

      <div class="mark m1" onclick="window.location.href='year.php?yil=1970'">
        <div class="mark-circle"></div>
        <span>1970</span>
        <div class="info-box">
          <img class="cover" src="https://i.discogs.com/aWQSAWT3fMB_E1Gn3ZYHMFQJHp8pxKRY3Zf0zfg30YM/rs:fit/g:sm/q:40/h:300/w:300/czM6Ly9kaXNjb2dz/LWRhdGFiYXNlLWlt/YWdlcy9SLTM1NDk0/MjMtMTc1NTk4MTM1/Ni00OTgzLmpwZWc.jpeg">
          <div class="info-text">
            <strong>Tür:</strong> Anadolu Rock
            <span>Popüler grup: 3 Hürel</span>
          </div>
        </div>
      </div>

      <div class="mark m2" onclick="window.location.href='year.php?yil=1980'">
        <div class="mark-circle"></div>
        <span>1980</span>
        <div class="info-box">
          <img class="cover" src="https://i.scdn.co/image/ab67616d0000b273f24e01b803d758c5aad56e2d">
          <div class="info-text">
            <strong>Tür:</strong> Arabesk
            <span>Popüler sanatçı: Gülden Karaböcek</span>
          </div>
        </div>
      </div>

      <div class="mark m3" onclick="window.location.href='year.php?yil=1990'">
        <div class="mark-circle"></div>
        <span>1990</span>
        <div class="info-box">
          <img class="cover" src="https://i.scdn.co/image/ab67616d0000b2730227b7359a3700d98754ff16">
          <div class="info-text">
            <strong>Tür:</strong> Türk Pop
            <span>Popüler sanatçı: Levent Yüksel</span>
          </div>
        </div>
      </div>

      <div class="mark m4" onclick="window.location.href='year.php?yil=2000'">
        <div class="mark-circle"></div>
        <span>2000</span>
        <div class="info-box">
          <img class="cover" src="https://i.ebayimg.com/images/g/86UAAOSwckRn5VfN/s-l1200.png">
          <div class="info-text">
            <strong>Tür:</strong> Pop & Rock
            <span>Popüler grup: Ayna</span>
          </div>
        </div>
      </div>

      <div class="mark m5" onclick="window.location.href='year.php?yil=2010'">
        <div class="mark-circle"></div>
        <span>2010</span>
        <div class="info-box">
          <img class="cover" src="https://plakci.nl/wp-content/uploads/2023/09/ceza-onuncu-koy-cd-hip-hop-amp-rap-cde-e6d424.jpg">
          <div class="info-text">
            <strong>Tür:</strong> Rap
            <span>Popüler Sanatçı: Ceza</span>
          </div>
        </div>
      </div>
    </div>

    <button class="portal-btn" onclick="showPage('page2')">80'ler ve 90'lara ışınlan 🚀</button>
</div>

<div id="page2" class="page">
    <h1 class="site-title">1980 – 2000</h1>
    <p>2000'lerin unutulan efsane teknolojileri   :)  </p>
    
    <section>
        <a href="https://en.wikipedia.org/wiki/Walkman" target="_blank" class="card-link">
            <div class="card c1"><img src="https://www.everything80spodcast.com/wp-content/uploads/2018/12/Oldschool-Sony-Walkman.jpg" alt="Walkman">🎧 Walkman</div>
        </a>
        <a href="https://en.wikipedia.org/wiki/Atari_2600" target="_blank" class="card-link">
            <div class="card c2"><img src="https://assets.superhivemarket.com/store/productimage/469110/image/a767a30cc6207fbeeba6ce862251d14a.jpg" alt="Atari">🕹 Atari</div>
        </a>
        <a href="https://en.wikipedia.org/wiki/IPod" target="_blank" class="card-link">
            <div class="card c3"><img src="https://www.moneydigest.com/img/gallery/the-unexpected-value-of-your-old-ipod-today/intro-1713194094.jpg" alt="iPod">🎵 iPod</div>
        </a>
        <a href="https://en.wikipedia.org/wiki/MSN_Messenger" target="_blank" class="card-link">
            <div class="card c4"><img src="https://imgscdn.stargazete.com/imgsdisk/2014/08/30/300820141350203143223_2.jpg" alt="MSN Messenger Logo">💬 MSN</div>
        </a>
        <a href="https://en.wikipedia.org/wiki/Turntable" target="_blank" class="card-link">
            <div class="card c5"><img src="https://m.media-amazon.com/images/I/71nqd7xD2cL.jpg" alt="Plak Çalar"> 💽Plak Çalar</div>
        </a>
        <a href="https://en.wikipedia.org/wiki/VCD" target="_blank" class="card-link">
            <div class="card c6"><img src="https://i.ebayimg.com/images/g/7WsAAOSwCuxgni1N/s-l1200.jpg" alt="Sony Ev Tipi VCD Oynatıcı">DVD 🎬 VCD     Oynatıcı</div>
        </a>
        <a href="https://en.wikipedia.org/wiki/Compact_disc" target="_blank" class="card-link">
            <div class="card c7"><img src="https://capture-hk-strapi.s3.ap-east-1.amazonaws.com/66_banner_f3eb4d9d62.webp" alt="CD & DVD">💿DVD & CD </div>
        </a>
    </section>

    <button class="portal-btn" onclick="showPage('page1')">⬅ Geri Dön 🙂​ ​ </button>
</div>
<h2>Anını Yaz</h2>

<form method="POST">
  <input type="text" name="isim" placeholder="Adın" required><br>
  <textarea name="yorum" placeholder="O yıllarla ilgili anın..." required></textarea><br>
  <button type="submit">Gönder</button>
</form>
<a href="anilar.php" class="portal-btn">
📝 Tüm Anıları Gör
</a>
<footer>© Zaman Yolculuğu | Sena Tatar</footer>

<script>
    function showPage(pageId) {
        document.querySelectorAll('.page').forEach(page => page.classList.remove('active-page'));
        document.getElementById(pageId).classList.add('active-page');
        window.scrollTo(0,0);
    }
</script>
<script>
function showPage(pageId) { ... }
</script>
<script>
const counter = document.getElementById("counter");
const target = +counter.getAttribute("data-target");

let count = 0;
const speed = 50; 

const updateCounter = () => {
  const increment = Math.ceil(target / speed);

  if (count < target) {
    count += increment;
    counter.innerText = count;
    setTimeout(updateCounter, 30);
  } else {
    counter.innerText = target;
  }
};

updateCounter();
</script>
</body>
</html>

<?php
if ($_POST) {
    $yorum = $_POST['yorum'];
    file_put_contents("yorumlar.txt", $yorum . "\n", FILE_APPEND);
    echo "Yorum kaydedildi!";
}
?>