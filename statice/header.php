<?php
// date local pc PHP


$date = Date("j/m/y");

echo <<<dub
    <header>
        <div class="marquee-container">
            <div class="marquee-wrapper">
                <div class="marquee-content">
                    <img src="https://pemaster-fssm.uca.ma/assets/media/logos/logoFssm.png" alt="Logo FSSM" style="vertical-align: middle; height: 50px; margin-right: 15px;">
                    <span class="nom-fssm">Faculté des Sciences Semlalia de Marrakech</span>
                    <span class="nom-uca">Université Cadi Ayyad</span>
                    <span class="nom-Pw">Programmation Web</span>
                </div>
                <div class="marquee-content"> 
                    <img src="https://pemaster-fssm.uca.ma/assets/media/logos/logoFssm.png" alt="Logo FSSM" style="vertical-align: middle; height: 50px; margin-right: 15px;">
                    <span class="nom-fssm">Faculté des Sciences Semlalia de Marrakech</span>
                    <span class="nom-uca">Université Cadi Ayyad</span>
                    <span class="nom-Pw">Programmation Web</span>
                </div>
            </div>
        </div>
        <div class="welcome-text">
            <h1>Bienvenue sur la page de l'étudiant</h1>
            <p id="current-date"> $date </p>
        </div>
    </header>
dub;
?>