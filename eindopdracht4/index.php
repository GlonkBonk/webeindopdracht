<!DOCTYPE html>
<html lang="nl">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@100&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>

<body>
    <div class="container">
        <header>
            <h1>Lucas van wijk</h1>
            <nav>
                <button id="hamburger"></button>
                <ul id="menu" class="verborgen">
                    <li><a href="#geleerd"><b>Wat heb ik geleerd?</b></a></li>
                    <li><a href="#opdracht">Opdrachten</a></li>
                    <li><a href="#contact">Contact</a></li>
                    <li><a href="#footer">Footer</a></li>
                </ul>
            </nav>
            <div class="clear"></div>
        </header>
        <section>
            <a id="geleerd"></a>
            <figure>
                <img src="img/pfp.jpg" alt="">
                <figcaption><b>Lucas van wijk</b></figcaption>
            </figure>
            <h3>
                WAT HEB IK GELEERD DEZE PERIODE?
            </h3>

            <p>
               deze periode heb ik mezelf verder verdiept in responsive webdesign en heb ik geleerd hoe ik een webdesign uit een photoshop bestand kan halen
                <br><br>
                ik heb ook veel geleerd van anderen vakken deze periode zo als OOP en ben ik terug gegaan naar de basics van javascript
                 om better te worden in het grond werk van de code taal.
                 ik zelf vond oop het leukst deze periode omdat ik het goed kon leren en opakken zonder dat ik alles overdereven serieus hoeften te nemen waardoor ook veel lol had, 
                 met javascript voelden het als of ik veel mogelijk had om teleren en fouten te maken waar door ik better leerden.
            </p>
            <h3>
                WAT HEB IK GELEERD DIT SCHOOLJAAR?
            </h3>
            <p>
                Van WEB heb ik van veel geleerd dit jaar. <br>
                ik ben van geen enkelen achtergrond in html/css naar groot verstandhouding over de taal, terwel het voelt als of ik het pas krassen op het heel oppervlak maak van de code, 
                ik ging van html4 naar 5 en van statish projecten naar dynamish en adaptive. zelf vindt ik het nog steeds moeilijk om margins en elementen op de juiste plek in de pagina te zetten,
                ik zelf zou gewoon alles kunnen draggen & droppen en dan handmatig alles stylen en effecten maken met css. meschiem maak de zelfs de opdrachten van periode 1 om gewoon te kijken hoe ver ik naar voren ben gekomen met coderen                 

            </p>
            <div class="clear"></div>
        </section>
        <section>
            <a id="opdracht"></a>
            <div class="red"></div>
            <h2>
                OPDRACHTEN VAN PERIODE 4
            </h2>

            <a href="task/opdracht1/opdracht1/index.html" target="_blank">
                <figure>

                    <img src="img/pencil.png" alt="">
                    <figcaption>
                        <h3>Opdracht 1</h3>
                        <p>Hamburger menu</p>
                    </figcaption>

                </figure>
            </a>

            <a href="task/opdracht2/adaptive/index.html" target="_blank">
                <figure>

                    <img src="img/pencil.png" alt="">
                    <figcaption>
                        <h3>Opdracht 2</h3>
                        <p>Responsive VS Adaptive</p>
                    </figcaption>

                </figure>
            </a>

            <a href="task/opdracht3/index.html" target="_blank">
                <figure>

                    <img src="img/pencil.png" alt="">
                    <figcaption>
                        <h3>Opdracht 3</h3>
                        <p>Responsive Kolommen</p>
                    </figcaption>

                </figure>
            </a>

            <a href="task/opdracht4/index.html" target="_blank">
                <figure>

                    <img src="img/pencil.png" alt="">
                    <figcaption>
                        <h3>Opdracht 4</h3>
                        <p>PSD naar HTML/CSS</p>
                    </figcaption>

                </figure>
            </a>
            <div class="clear"></div>

        </section>
        <section>
            <a id="contact"></a>
            <div class="red"></div>
            <h2>
                CONTACT
            </h2>
            <form  action="contact.php" method="POST">
                <input type="text" placeholder="Naam" name="name" required>
                <input type="email" placeholder="E-mailadres" name="email" required>
                <input type="text" placeholder="Onderwerp" name="subject" required>
                <br>
                <textarea placeholder="Bericht" name="message" required></textarea>
                <input type="submit" name="submit" value="Verstuur bericht naar Roeland">
            </form>
        </section>
        <footer>
            <a id="footer"></a>
            <b>&copy; 25-06-2021 - Lucas van wijk</b>
        </footer>
    </div>
    <script src="code.js"></script>
</body>

</html>