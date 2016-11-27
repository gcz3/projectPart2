<header>
  <nav class="navbar navbar-dark bg-light" id="menu">
    <div class="container-fluid">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" id="headerCollapseButton" data-toggle="collapse" data-target="#header-navbar" aria-expanded="false">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>

        <a href="../../projectPart2" class="navbar-brand menu-item">UNIEL[st] ver.3.10 Frame Data</a>
      </div>

      <div class="collapse navbar-collapse" id="header-navbar">
        <ul class="nav navbar-nav">
          <li class="nav-item active">
            <a href="../../projectPart2" class="nav-link menu-item">Home <span class="sr-only">(current)</span></a>
          </li>
          <li class="dropdown">
            <a href="#" class="dropdown-toggle menu-item" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Characters <span class="caret"></span></a>
            <ul class="dropdown-menu">
              <?php
                $chara = array("Hyde", "Linne", "Waldstein", "Carmine", "Orie",
                  "Gordeau", "Merkava", "Vatista", "Seth", "Yuzuriha", "Hilda",
                  "Chaos", "Eltnum", "Akatsuki", "Nanase", "Byakuya", "Phonon",
                  "Mika");
                $arrlength = count($chara);

                for ($x=0; $x < $arrlength; $x++) {
                  echo "<li>
                          <a href=\"../../projectPart2/chara/" .
                            strtolower($chara[$x]) .
                            "\">" . $chara[$x] .
                          "</a>
                        </li>";
                }
              ?>
            </ul>
          </li>
          <li class="nav-item">
            <a href="../../projectPart2/glossary" class="nav-link menu-item">Glossary</a>
          </li>
          <li class="dropdown">
            <a href="#" class="dropdown-toggle menu-item" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">About <span class="caret"></span></a>
            <ul class="dropdown-menu">
              <li><a href="../../projectPart2/contents/contact">Contact Us</a></li>
              <li><a href="../../projectPart2/contents/faq">About This Site</a></li>
              <li><a href="../../projectPart2/contents/link">Links</a></li>
            </ul>
          </li>
        </ul>
      </div>
    </div>
  </nav>
</header>
