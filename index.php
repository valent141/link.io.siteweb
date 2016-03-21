<?php
$select = 0;

$css = ['slider', 'index'];
$js = ['index'];

include 'php/header.php';
include 'php/navbar.php';
?>

<div class="container-fluid">
    <div class="row screen concept">

        <section class="cd-hero">
            <ul class="cd-hero-slider autoplay">
                <li class="selected">
                    <div class="cd-full-width">
                        <h2>Slide 1</h2>

                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                        <a href="#0" class="cd-btn">En savoir plus</a>
                    </div>
                    <!-- .cd-full-width -->
                </li>
                <li>
                    <div class="cd-half-width">
                        <h2>Slide 2</h2>

                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. In consequatur cumque natus!</p>
                        <a href="#0" class="cd-btn">Bouton 1</a>
                        <a href="#0" class="cd-btn secondary">Bouton 2</a>
                    </div>

                    <div class="cd-half-width cd-img-container">
                        <img src="img/slider/2.png" alt="tech 1">
                    </div>
                </li>

                <li>
                    <div class="cd-half-width cd-img-container">
                        <img src="img/slider/3.png" alt="tech 2">
                    </div>

                    <div class="cd-half-width">
                        <h2>Slide 3</h2>

                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. In consequatur cumque natus!</p>
                        <a href="#0" class="cd-btn">Bouton 1</a>
                        <a href="#0" class="cd-btn secondary">Bouton 2</a>
                    </div>

                </li>
            </ul>

            <div class="cd-slider-nav">
                <nav>
                    <span class="cd-marker item-1"></span>

                    <ul>
                        <li class="selected"><a href="#0"><span class="icon img">o</span>Slide 1</a></li>
                        <li><a href="#0"><span class="icon img">r</span>Slide 2</a></li>
                        <li><a href="#0"><span class="icon img">l</span>Slide 3</a></li>
                    </ul>
                </nav>
            </div>
        </section>
    </div>
    <div class="row screen what">
        <div class="container">
            <div class="row">
                <h1>Qu'est-ce que la carte Projet ?</h1>

                <div class="row">
                    <div class="col-md-4">
                        <div class="card">
                            <div class="top">
                                <span class="icon img">d</span>

                                <h3>Le projet</h3>

                                <div class="line"></div>
                                <div class="price">4€ / mois</div>
                            </div>
                            <div class="bottom">
                                <div class="item">
                                    <span class="icon img">&#xe901;</span> Pas d'engagement
                                </div>
                                <div class="item">
                                    <span class="icon img">&#xe902;</span> Utilisation illimité
                                </div>
                                <div class="item">
                                    <span class="icon img">&#xe900;</span> Prix unique
                                </div>
                                <div class="item">
                                    <span class="icon img">&#xe903;</span> Valable dans toute la France
                                </div>
                                <div class="text-center">
                                    <button class="btn">COMMANDER</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-8 desc">
                        <h3>Pas d'engagement</h3>

                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eius, laboriosam, quasi. Ad beatae
                            consequuntur debitis delectus dicta doloremque earum, eius eum excepturi, facere incidunt,
                            nesciunt nobis quod ullam vitae! Asperiores.
                        </p>

                        <h3>Utilisation illimité</h3>

                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Animi asperiores debitis dolor
                            dolores ea error esse et expedita inventore maiores molestiae nisi odit placeat quibusdam
                            quod, sapiente sint totam voluptates.
                        </p>

                        <h3>Prix unique</h3>

                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Animi asperiores debitis dolor
                            dolores ea error esse et expedita inventore maiores molestiae nisi odit placeat quibusdam
                            quod, sapiente sint totam voluptates.
                        </p>

                        <h3>Valable dans toute la France</h3>

                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Animi asperiores debitis dolor
                            dolores ea error esse et expedita inventore maiores molestiae nisi odit placeat quibusdam
                            quod, sapiente sint totam voluptates.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row miniSlider">
        <div class="container">
            <div class="row">
                <div class="previous">
                    <div class="icon">&#xe904;</div>
                </div>
                <div class="col-md-10 col-md-offset-1">
                    <h1>Quelques partenaires</h1>
                    <div class="list">
                        <div class="wrapper">
                            <div><h3>1</h3></div>
                            <div><h3>2</h3></div>
                            <div><h3>3</h3></div>
                            <div><h3>4</h3></div>
                            <div><h3>5</h3></div>
                            <div><h3>6</h3></div>
                            <div><h3>7</h3></div>
                            <div><h3>8</h3></div>
                            <div><h3>9</h3></div>
                            <div><h3>10</h3></div>
                            <div><h3>11</h3></div>
                            <div><h3>12</h3></div>
                            <div><h3>13</h3></div>
                        </div>
                    </div>
                </div>
                <div class="next">
                    <div class="icon">&#x69;</div>
                </div>
            </div>
        </div>
    </div>
    <div class="row screen offres">
        <div class="container">
            <div class="row">
                <h1>Les types d'offres</h1>

                <p class="text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet commodi consequatur
                    dolorum, eaque id nobis non quia ratione rerum similique soluta, ullam? Architecto atque laborum
                    laudantium magnam mollitia tempore vero!</p>

                <div class="card">
                    <span class="icon img">o</span>

                    <h3>Commerce</h3>

                    <div class="line"></div>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut doloribus ea incidunt rem
                        veritatis.</p>
                    <span class="icon go">i</span>
                </div>

                <div class="card">
                    <span class="icon img">r</span>

                    <h3>Restaurant</h3>

                    <div class="line"></div>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut doloribus ea incidunt rem
                        veritatis.</p>
                    <span class="icon go">i</span>
                </div>

                <div class="card">
                    <span class="icon img">l</span>

                    <h3>Loisir</h3>

                    <div class="line"></div>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut doloribus ea incidunt rem
                        veritatis.</p>
                    <span class="icon go">i</span>
                </div>

                <div class="card">
                    <span class="icon img">t</span>

                    <h3>Hôtel</h3>

                    <div class="line"></div>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut doloribus ea incidunt rem
                        veritatis.</p>
                    <span class="icon go">i</span>
                </div>
            </div>
        </div>
    </div>
</div>

<?php
include 'php/footer.php';
?>

