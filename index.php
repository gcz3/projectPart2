<!doctype html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <title>Project 1</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="./css/master.css">
    <link rel="stylesheet" type="text/css" href="./css/index.css">
  </head>
  <body>
    <!-- TODO: Use PHP to have an include for a universal header and footer so there isn't so much copy and paste code -->
    <header>
      <nav class="navbar navbar-dark bg-light" id="menu">
        <a href="index.php" class="navbar-brand menu-item">UNIEL[st] ver.3.10 Frame Data</a>
        <ul class="nav navbar-nav">
          <li class="nav-item active">
            <a href="index.php" class="nav-link menu-item">Home <span class="sr-only">(current)</span></a>
          </li>
          <li class="dropdown">
            <a href="#" class="dropdown-toggle menu-item" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Characters <span class="caret"></span></a>
            <ul class="dropdown-menu">
              <li><a href="chara/hyde.php">Hyde</a></li>
              <li><a href="chara/linne.php">Linne</a></li>
              <li><a href="chara/waldstein.php">Waldstein</a></li>
              <li><a href="chara/carmine.php">Carmine</a></li>
              <li><a href="construction/index.php">Orie</a></li>
              <li><a href="construction/index.php">Gordeau</a></li>
              <li><a href="construction/index.php">Merkava</a></li>
              <li><a href="construction/index.php">Vatista</a></li>
              <li><a href="construction/index.php">Seth</a></li>
              <li><a href="construction/index.php">Yuzuriha</a></li>
              <li><a href="construction/index.php">Hilda</a></li>
              <li><a href="construction/index.php">Chaos</a></li>
              <li><a href="construction/index.php">Eltnum</a></li>
              <li><a href="construction/index.php">Akatsuki</a></li>
              <li><a href="construction/index.php">Nanase</a></li>
              <li><a href="construction/index.php">Byakuya</a></li>
              <li><a href="construction/index.php">Phonon</a></li>
              <li><a href="construction/index.php">Mika</a></li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="glossary/index.php" class="nav-link menu-item">Glossary</a>
          </li>
          <li class="dropdown">
            <a href="#" class="dropdown-toggle menu-item" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">About <span class="caret"></span></a>
            <ul class="dropdown-menu">
              <li><a href="contents/contact.php">Contact Us</a></li>
              <li><a href="contents/faq.php">About This Site</a></li>
              <li><a href="contents/link.php">Links</a></li>
            </ul>
          </li>
        </ul>
      </nav>
    </header>

    <img id="mainLogo" src="./img/unielst_logo.jpg" alt="UNDER NIGHT IN-BIRTH Exe:Late[st]" /><br>

    <div class="chara-icon-row">
      <a href="chara/hyde.php" class="chara-icon">
        <img src="./img/chara_icon/uni01_hyde.png" alt="Hyde" />
      </a>

      <a href="chara/linne.php" class="chara-icon">
        <img src="./img/chara_icon/uni02_linne.png" alt="Linne" />
      </a>

      <a href="chara/waldstein.php" class="chara-icon">
        <img src="./img/chara_icon/uni03_waldstein.png" alt="Waldstein" />
      </a>

      <a href="chara/carmine.php" class="chara-icon">
        <img src="./img/chara_icon/uni04_carmine.png" alt="Carmine" />
      </a>
    </div>

    <div class="chara-icon-row">
      <img class="chara-icon" src="./img/chara_icon/uni05_orie.png" alt="Orie" />
      <img class="chara-icon" src="./img/chara_icon/uni06_gordeau.png" alt="Gordeau" />
      <img class="chara-icon" src="./img/chara_icon/uni07_merkava.png" alt="Merkava" />
      <img class="chara-icon" src="./img/chara_icon/uni08_vatista.png" alt="Vatista" />
    </div>

    <div class="chara-icon-row">
      <img class="chara-icon" src="./img/chara_icon/uni09_seth.png" alt="Seth" />
      <img class="chara-icon" src="./img/chara_icon/uni10_yuzuriha.png" alt="Yuzuriha" />
      <img class="chara-icon" src="./img/chara_icon/uni11_hilda.png" alt="Hilda" />
      <img class="chara-icon" src="./img/chara_icon/uni12_chaos.png" alt="Chaos" />
    </div>

    <div class="chara-icon-row">
      <img class="chara-icon" src="./img/chara_icon/uni13_eltnum.png" alt="Eltnum" />
      <img class="chara-icon" src="./img/chara_icon/uni14_akatsuki.png" alt="Akatsuki" />
      <img class="chara-icon" src="./img/chara_icon/uni15_nanase.png" alt="Nanase" />
      <img class="chara-icon" src="./img/chara_icon/uni16_byakuya.png" alt="Byakuya" />
    </div>

    <div class="chara-icon-row">
      <img class="chara-icon chara-icon-temp" src="./img/uni17_phonon_temp.png" alt="Phonon" />
      <img class="chara-icon chara-icon-temp" src="./img/uni18_mika_temp.png" alt="Mika" />
    </div>

    <footer class="footer">
      <a href="https://twitter.com/share" class="twitter-share-button" data-text="@mattbowytz is the best teacher ever!!!" data-hashtags="CS1550" data-show-count="false">Tweet</a><script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
    </footer>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
  </body>
</html>
