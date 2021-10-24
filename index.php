<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    
</head>
<body>
    <header>
        <nav>
            <section class="nav-link">
                <ul>
                    <li><a href="#">Home</a></li>
                    <li><a href="#oferta">Oferta</a></li>
                    <li><a href="#map-kontakt">Lokazlizacja</a></li>
                    <li><a href="#map-kontakt">Kontakt</a></li>
                </ul>
            </section>
        </nav>
        <section class="header-content">
            <h1>Wypożyczalnia Samochodów - CARCON</h1>
            <p>Dlaczego my?</p>
            <section class="why-me">
                <div class="why-me-box1 why-me-box">
                    <img src="src/car-icon.png" alt="car icon">
                    <h2>70lat doświadczenia</h2>
                    <p>
                        Carcon założony w 1953r jest jednym w największych wypożyczalni samochodów w Polsce.
                    </p>
                </div>
                <div class="why-me-box2 why-me-box">
                    <img src="src/new-car-icon.png" alt="new car icon">
                    <h2>Nowe samochody</h2>
                    <p>
                        Posiadamy w swojej ofercie wiele nowoczesnych samochodów.
                    </p>
                </div>
                <div class="why-me-box3 why-me-box">
                    <img src="src/earth-globe-icon.png" alt="earth globe icon">
                    <h2>Duża ilość punktów wynajmu</h2>
                    <p>
                        Możesz kożystać z naszych wypożyczalni juz w ponad 30 miejscach w Polsce.
                    </p>
                </div>
                <div class="why-me-box4 why-me-box">
                    <img src="src/success-icon.png" alt="success icon">
                    <h2>wysoka jakość</h2>
                    <p class="p-header">
                        nasze usługi są wysokim poziomie jakości, twoja zaufana wypożyczalnia samochodów.
                    </p>
                </div>
            </section>
        </section>
    </header>
    <main>
        <h1 id="oferta">Nasza Oferta</h1>
        <section class="main-menu">
            <p>Czego szukasz?</p>
            <form action="#oferta" method="POST">
                <p class="p-oferta">Marka</p>
                <select name="text" id="text">
                    <option value="" ></option>
                    <option value="BMW">BMW</option>
                    <option value="Mercedes">Mercedes-benz</option>
                    <option value="Audi">Audi</option>
                    <option value="Ford">Ford</option>
                </select>

                <p class="p-oferta">cena od</p>
                <select name="" id="">
                    <option value=""></option>
                    <option value="">10 000 PLN</option>
                    <option value="">20 000 PLN</option>
                    <option value="">40 000 PLN</option>
                    <option value="">50 000 PLN</option>
                </select>

                <p class="p-oferta">do</p>
                <select name="" id="">
                    <option value=""></option>
                    <option value="">10 000 PLN</option>
                    <option value="">20 000 PLN</option>
                    <option value="">40 000 PLN</option>
                    <option value="">50 000 PLN</option>

                </select>
                <input class="submit" type="submit" href="#oferta" value="Znajdz oferty">
            </form>
            
        </section>
        <section class="php">
            <?php
               include("switch.php")
            ?>
        </section>
    </main>
    <footer>
        <section class="footer" id="map-kontakt">
            <div class="map">
                <iframe class="" src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d13594.826291765126!2d14.431789085006075!3d52.961944574181764!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2spl!4v1635076687966!5m2!1sen!2spl" width="100%" height="100%"  style="border:0;" allowfullscreen="" loading="lazy"></iframe>
            </div>
            <div class="kontakt">
                <div class="footer-content">
                    <h1>Kontakt</h1>
                    <p>Telefon: 111 222 333</p>
                    <p>adres: Chojna Mieszka I   2b</p>
                    <p>email: Carcon@gmail.com</p>
                </div>
            </div>
        </section>
    </footer>
</body>
</html>
