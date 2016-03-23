<?php
$select = 0;

$css = array('slider', 'index');
$js = array('index');

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
    <div class="row screen twins">
        <div class="container">
            <div class="row">
                <h1>Concept</h1>

                <div class="row">

                </div>
            </div>
        </div>
    </div>
    <div class="row miniSlider hide">
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
    <div class="row screen presentation">
        <div class="container">
            <div class="row">
                <h1>Les piliers de l'API</h1>

                <p class="text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet commodi consequatur
                    dolorum, eaque id nobis non quia ratione rerum similique soluta, ullam? Architecto atque laborum
                    laudantium magnam mollitia tempore vero!</p>

                <div class="card">
                    <span class="icon img">o</span>

                    <h3>Rapidité</h3>

                    <div class="line"></div>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut doloribus ea incidunt rem
                        veritatis.</p>
                    <span class="icon go">i</span>
                </div>

                <div class="card">
                    <span class="icon img">r</span>

                    <h3>Sécurité</h3>

                    <div class="line"></div>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut doloribus ea incidunt rem
                        veritatis.</p>
                    <span class="icon go">i</span>
                </div>

                <div class="card">
                    <span class="icon img">l</span>

                    <h3>Fiabilité</h3>

                    <div class="line"></div>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut doloribus ea incidunt rem
                        veritatis.</p>
                    <span class="icon go">i</span>
                </div>

                <div class="card">
                    <span class="icon img">t</span>

                    <h3>Facilité</h3>

                    <div class="line"></div>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut doloribus ea incidunt rem
                        veritatis.</p>
                    <span class="icon go">i</span>
                </div>
            </div>
        </div>
    </div>
    <div class="row screen demo">
        <div class="container">
            <div class="row">
                <h1>Démo</h1>

                <div class="row">

                </div>
            </div>
        </div>
    </div>
	<!-- Team Section -->
	<div class="row screen offres">
        <div class="container">
            <div class="row">
                <h1>L'équipe</h1>

                <p class="text">Link.IO a été développé en 2016 par 6 étudiants dans le cadre de leur formation d'ingénieur à l'INSA Rennes</p>

                <div class="row">
                    <div class="col-sm-2">
                        <div class="team-member">
                            <img src="img/team/bastien-baret.png" class="img-responsive img-circle" alt="">
                            <h4>Bastien<br />BARET</h4>
                            <p class="text-muted">Président</p>
                        </div>
                    </div>
                    <div class="col-sm-2">
                        <div class="team-member">
                            <img src="img/team/valentin-bureau.png" class="img-responsive img-circle" alt="">
                            <h4>Valentin<br />BUREAU</h4>
                            <p class="text-muted">Trésorier</p>
                        </div>
                    </div>
					<div class="col-sm-2">
                        <div class="team-member">
                            <img src="img/team/william-dazi.png" class="img-responsive img-circle" alt="">
                            <h4>William<br />DAZI</h4>
                            <p class="text-muted">Président</p>
                        </div>
                    </div>
                    <div class="col-sm-2">
                        <div class="team-member">
                            <img src="img/team/francois-lardeux.png" class="img-responsive img-circle" alt="">
                            <h4>François<br />LARDEUX</h4>
                            <p class="text-muted">Trésorier</p>
                        </div>
                    </div>
					<div class="col-sm-2">
                        <div class="team-member">
                            <img src="img/team/leo-lozach.png" class="img-responsive img-circle" alt="">
                            <h4>Léo<br />LOZACH</h4>
                            <p class="text-muted">Président</p>
                        </div>
                    </div>
                    <div class="col-sm-2">
                        <div class="team-member">
                            <img src="img/team/florent-thomas-morel.png" class="img-responsive img-circle" alt="">
                            <h4>Florent<br />THOMAS-MOREL</h4>
                            <p class="text-muted">Trésorier</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php
include 'php/footer.php';
?>