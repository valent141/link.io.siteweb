<nav class="main">
    <div class="container">
        <ul class="col-md-4 left">
            <li class="<?= isset($select) && $select == 0 ? 'active' : ''?>">
                <a href="index.php">
                    <span class="icon-home"></span>
                    ACCUEIL
                </a>
            </li>
            <li class="<?= isset($select) && $select == 1 ? 'active' : ''?>">
                <a href="partenaire.php">
                    <span class="icon-shopping-cart"></span>
                    PARTENAIRES
                </a>
            </li>
        </ul>

        <div class="logo col-md-4">
            <img src="img/logo.png" alt=""/>
            <img class="card" src="img/card.png" alt=""/>
        </div>

        <ul class="col-md-4 right">
            <li class="<?= isset($select) && $select == 2 ? 'active' : ''?>">
                <a href="#">
                    <span class="icon-help"></span>
                    A PROPOS
                </a>
            </li>
            <li class="<?= isset($select) && $select == 3 ? 'active' : ''?>">
                <a href="#">
                    <span class="icon-person"></span>
                    DEVENIR CLIENT
                </a>
            </li>
        </ul>
    </div>
</nav>