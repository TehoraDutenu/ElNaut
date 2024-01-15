<?php
/*
 * Template Name: Rents
 */
?>

<body class="rents-body">
    <?php get_header() ?>

    <main class="rents-main">
        <div class="rents-main-container">

            <h4 class="rents-title">Montez à bord et profitez du voyage</h4>

            <!-- RdC -->
            <div class="le-sas">
                <div class="white">
                    <img class="img-fluid" src="<?php echo get_template_directory_uri() . "/images/espaces/sas.jpg"; ?>" alt="sas">
                </div>
                <div class="black">
                    <h4>Le SAS</h4>
                    <h5>Un espace pour découvrir, se rencontrer et travailler</h5>
                    <p>Du mobilier, un espace de restauration rapide, un lieu dédié aux rencontres et aux échanges</p>
                    <i class="fa-solid fa-wheelchair-move"></i>
                </div>
            </div>

            <div class="salle-machines">
                <div class="white">
                    <img class="img-fluid" src="<?php echo get_template_directory_uri() . "/images/espaces/machines.jpg"; ?>" alt="machines">
                </div>
                <div class="black">
                    <h4>La Salle des Machines</h4>
                    <h5>Un espace dédié aux évènements et spectacles</h5>
                    <p>Plus de 85m² et une capacité de 200 personnes (70 assises) destinés aux projets vivants et artistiques. <em>Mise à disposition d'une régie et de matériel de scénographie.</em></p>

                    <div class="table">
                        <table class="table table-dark table-hover">
                            <thead>
                                <tr>
                                    <th scope="col"></th>
                                    <th scope="col">Tarif</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th scope="row">Heure</th>
                                    <td>30€</td>
                                </tr>
                                <tr>
                                    <th scope="row">Demi-journée</th>
                                    <td>120€</td>
                                </tr>
                                <tr>
                                    <th scope="row">Journée</th>
                                    <td>250€</td>
                                </tr>
                                <tr>
                                    <th scope="row">Journée + soirée</th>
                                    <td>300€</td>
                                </tr>
                                <tr>
                                    <th scope="row">Le week-end</th>
                                    <td>450€</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

            <!-- R + 1 -->
            <div class="le-qg">
                <div class="white">
                    <img class="img-fluid" src="<?php echo get_template_directory_uri() . "/images/espaces/qg.jpg"; ?>" alt="qg">
                </div>
                <div class="black">
                    <h4>Le QG</h4>
                    <h5>L'open-space modulable avec cuisine</h5>
                    <p>50m² aux airs de FabLab et divisibles en deux parties pour enseigner, apprendre et travailler dans le calme et la volupté (max. 30 peronnes).
                        <em>Cet espace dispose de 2 ordinateurs, d'une imprimante, d'un massicot, de casiers et d'une conciergerie d'entreprise</em>
                    </p>
                    <div class="table">
                        <table class="table table-dark table-hover">
                            <thead>
                                <tr>
                                    <th scope="col"></th>
                                    <th scope="col">Tarif pro</th>
                                    <th scope="col">Tarif asso</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th scope="row">Journée</th>
                                    <td>10€</td>
                                    <td>7€</td>
                                </tr>
                                <tr>
                                    <th scope="row">Semaine</th>
                                    <td>50€</td>
                                    <td>30€</td>
                                </tr>
                                <tr>
                                    <th scope="row">Mois</th>
                                    <td>180€</td>
                                    <td>100€</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>

                </div>
            </div>

            <div class="atelier">
                <div class="white">
                    <img class="img-fluid" src="<?php echo get_template_directory_uri() . "/images/espaces/atelier.jpg"; ?>" alt="atelier">
                </div>
                <div class="black">
                    <h4>L'Atelier</h4>
                    <h5>Le lieu des créatifs</h5>
                    <p>Atelier (max. 15 personnes) déclinable en boxes pour les créatifs en mouvement.</p>
                    <div class="table">
                        <table class="table table-dark table-hover">
                            <thead>
                                <tr>
                                    <th scope="col"></th>
                                    <th scope="col">Tarif pro</th>
                                    <th scope="col">Tarif asso</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th scope="row">Journée</th>
                                    <td>-</td>
                                    <td>15€</td>
                                </tr>
                                <tr>
                                    <th scope="row">Semaine</th>
                                    <td>-</td>
                                    <td>50€</td>
                                </tr>
                                <tr>
                                    <th scope="row">Mois</th>
                                    <td>-</td>
                                    <td>80€</td>
                                </tr>
                                <tr>
                                    <th scope="row">Box - Heure</th>
                                    <td>20€</td>
                                    <td>10€</td>
                                </tr>
                                <tr>
                                    <th scope="row">Box - 1/2 journée</th>
                                    <td>50€</td>
                                    <td>30€</td>
                                </tr>
                                <tr>
                                    <th scope="row">Box - Journée</th>
                                    <td>70€</td>
                                    <td>50€</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>

                </div>
            </div>

            <div class="bocal">
                <div class="white">
                    <img class="img-fluid" src="<?php echo get_template_directory_uri() . "/images/espaces/bocal.webp"; ?>" alt="bocal">
                </div>
                <div class="black">
                    <h4>Le Bocal</h4>
                    <h5>La solution meeting pour les assos</h5>
                    <p>10m² qui offrent la possibilité aux associations en manque d'espace d'organiser leurs réunions et assemblées (max. 5 personnes)</p>
                    <div class="table">
                        <table class="table table-dark table-hover">
                            <thead>
                                <tr>
                                    <th scope="col"></th>
                                    <th scope="col">Tarif</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th scope="row">Heure</th>
                                    <td>15€</td>
                                </tr>
                                <tr>
                                    <th scope="row">Demi-journée</th>
                                    <td>50€</td>
                                </tr>
                                <tr>
                                    <th scope="row">Journée</th>
                                    <td>80€</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>

                </div>
            </div>

            <!-- R + 2 -->
            <div class="passerelle">
                <div class="white">
                    <img class="img-fluid" src="<?php echo get_template_directory_uri() . "/images/espaces/passerelle.jpeg"; ?>" alt="passerelle">
                </div>
                <div class="black">
                    <h4>La Passerelle</h4>
                    <h5>La partie émergée</h5>
                    <p>Jusqu'à 15 personnes pourront être accueillies dans le second étage du Nautilus (30m²) avec terrasse, sanitaires et douche.</p>
                    <div class="table">
                        <table class="table table-dark table-hover">
                            <thead>
                                <tr>
                                    <th scope="col"></th>
                                    <th scope="col">Tarif</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th scope="row">Heure</th>
                                    <td>15€</td>
                                </tr>
                                <tr>
                                    <th scope="row">Demi-journée</th>
                                    <td>50€</td>
                                </tr>
                                <tr>
                                    <th scope="row">Journée</th>
                                    <td>80€</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>

                </div>
            </div>
        </div>
    </main>

    <?php get_footer() ?>
</body>