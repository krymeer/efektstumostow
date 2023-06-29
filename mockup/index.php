<?php require_once 'functions.php'; ?>
<!DOCTYPE html>
<html lang="pl">
    <head>
        <title>Efekt Stu Mostów</title>
        <meta charset="utf-8">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <meta name="viewport" content="width=device-width,initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="styles/css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="styles/css/efekt.min.css">
    </head>
    <body>
        <div class="container">
            <div class="row efekt-row" data-row="header">
                <div class="col-lg-auto">
                    <a href="javascript:void(0)">
                        <?= get_svg( 'images/logo-color' ); ?>
                    </a>
                </div>
                <div class="col-lg-auto">
                    <nav>
                        <ul class="efekt-menu">
                            <li>
                                <a class="efekt-row" href="javascript:void(0)">O Efekcie</a>
                            </li>
                            <li>
                                <a class="efekt-row" href="javascript:void(0)">Dlaczego warto?</a>
                            </li>
                            <li>
                                <a class="efekt-row" href="javascript:void(0)">Poprzednie konferencje</a>
                            </li>
                            <li>
                                <a class="efekt-row" href="javascript:void(0)">Kontakt</a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
            <div class="row efekt-row" data-row="front-page-intro">
                <div class="col">
                    <h1 class="efekt-h1">Efekt Stu Mostów</h1>
                    <p class="efekt-p">8-10 września 2023 | Hotel Wyndham, Wrocław</p>
                    <a class="efekt-button" href="javascript:void(0)">Kup bilet</a>
                </div>
            </div>
            <div class="row efekt-row" data-row="front-page-timer">
                <div class="col">
                    <h2 class="efekt-h2">Do Efektu zostało:</h2>
                    <div class="efekt-timer">
                        <div>
                            <span>02</span>
                            Dni
                        </div>
                        :
                        <div>
                            <span>13</span>
                            Godziny
                        </div>
                        :
                        <div>
                            <span>15</span>
                            Sekundy
                        </div>
                        :
                        <div>
                            <span>49</span>
                            Minuty
                        </div>
                    </div>
                </div>
            </div>
            <div class="row efekt-row" data-row="front-page-numbers">
                <div class="col">
                    <ul class="efekt-numbers">
                        <li>
                            <?= get_svg( 'icons/people' ); ?>
                            <div>
                                <strong>150</strong>
                                Uczestników
                            </div>
                        </li>
                        <li>
                            <?= get_svg( 'icons/megaphone' ); ?>
                            <div>
                                <strong>15</strong>
                                Prelegentów
                            </div>
                        </li>
                        <li>
                            <?= get_svg( 'icons/clock' ); ?>
                            <div>
                                <strong>3</strong>
                                Dni konferencji
                            </div>
                        </li>
                        <li>
                            <?= $trophy = get_svg( 'icons/trophy' ); ?>
                            <div>
                                <strong>2</strong>
                                Konkursy na poziomie Mistrzostw Polski
                            </div>
                            <?= $trophy; ?>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="row efekt-row" data-row="front-page-about-us">
                <div class="col">
                    <h2 class="efekt-h2">O nas:</h2>
                    <p class="efekt-p">Wyobraź sobie miejsce, w&nbsp;którym możesz skutecznie zdobywać umiejętności komunikacyjne i&nbsp;przywódcze we wspierającej atmosferze i&nbsp;jednocześnie dobrze się przy tym bawiąc.</p>
                    <p class="efekt-p">Brzmi jak raj?</p>
                    <p class="efekt-p">Tak, i&nbsp;do tego na wyciągnięcie ręki!</p>
                    <p class="efekt-p">Organizacja Toastmasters oferuje skuteczny rozwój kompetencji miękkich. Od lat szkolimy mówców oraz liderów, którzy później osiągają sukcesy w&nbsp;pracy, biznesie czy swoich lokalnych społecznościach.</p>
                    <p class="efekt-p">Chciałbyś przemawiać, jednak paraliżuje Cię strach przed wystąpieniami publicznymi?</p>
                    <p class="efekt-p">Chciałbyś rozwinąć swoją karierę zawodową, ale brakuje Ci pewności siebie?</p>
                    <p class="efekt-p">Chciałbyś budować wspaniale relacje z&nbsp;ludźmi, jednak nie wiesz jak się swobodnie komunikować?</p>
                    <p class="efekt-p">Wszystkie te problemy możesz rozwiązać, uczęszczając na spotkania Toastmasters. Dostaniesz solidną pigułkę wiedzy oraz przestrzeń do treningu i&nbsp;rozwoju!</p>
                    <p class="efekt-p">Kluby Toastmasters rozsiane są po całej Polsce, więc istnieje prawdopodobieństwo, że jeden z&nbsp;nich jest Twoim mieście.</p>
                    <p class="efekt-p">Społeczność Toastmasters to grupa osób nastawionych na rozwój, edukację i&nbsp;dobrą zabawę. Poznasz wielu ciekawych ludzi reprezentujących różne branże. Będziesz mieć szansę na zdobycie cennych kontaktów.</p>
                    <p class="efekt-p">Organizacja Toastmasters działa na całym świecie. Naszą misją jest szerzenie wiedzy z&nbsp;wystąpień publicznych, liderstwa, zarządzania czy komunikacji, tak abyś mógł osiągnąć sukces i&nbsp;spełnienie w&nbsp;każdej sferze życia.</p>
                </div>
            </div>
            <div class="row efekt-row" data-row="front-page-quote">
                <div class="col">
                    <p class="efekt-p">„Rozwój osobisty to niekończący się proces samodoskonalenia” powiedział niegdyś Zig Ziglar.</p>
                    <p class="efekt-p">Z nieukrywaną radością chcemy zaprosić Cię na wydarzenie, które będzie dla Ciebie POTĘŻNYM bodźcem do dalszego samodoskonalenia i&nbsp;jednocześnie wspaniałym przeżyciem, które po latach będziesz wspominać z&nbsp;uśmiechem!</p>
                    <p class="efekt-p">EFEKT STU MOSTÓW</p>
                    <p class="efekt-p">Już we wrześniu (8-10) odbędzie się wyczekiwana przez wszystkich Toastmasterów konferencja EFEKT TOASTMASTERS. Tym razem ugościmy Was w&nbsp;mieście stu mostów, malowniczym Wrocławiu. Wrocław nazywany jest miastem spotkań, ze względu na gościnną atmosferę oraz niepowtarzalny klimat. Nie może Cię więc zabraknąć.</p>
                    <p class="efekt-p">Spotkaj się z&nbsp;nami, aby chłonąć wiedzę i&nbsp;świetnie się bawić!</p>
                </div>
            </div>
            <div class="row efekt-row" data-row="front-page-quote">
                <div class="col">
                    <h2 class="efekt-h2">Dlaczego warto?</h2>
                    <h3 class="efekt-h3">Warsztaty</h3>
                    <p class="efekt-p">Toastmasters słynie z&nbsp;edukacji na najwyższym poziomie. Na konferencji nie zabraknie cennych warsztatów, które pomogą Ci w&nbsp;dalszym rozwoju jako mówca, lider i&nbsp;przede wszystkim jako człowiek!</p>
                    <h3 class="efekt-h3">Konkursy</h3>
                    <p class="efekt-p">Będziesz mieć możliwość zobaczenia najlepszych mówców w&nbsp;ogólnopolskich finałach. Emocje i&nbsp;najwyższy poziom przemawiania gwarantowany. Ucz się od najlepszych!</p>
                    <h3 class="efekt-h3">Integracje</h3>
                    <p class="efekt-p">Toastmasterzy znani są z&nbsp;tego, że potrafią się dobrze bawić. Chłoń klimat malowniczego Wrocławia w&nbsp;doborowym towarzystwie. Niezapomniane wrażenia gwarantowane!</p>
                    <p class="efekt-p">Już teraz zarezerwuj swoje wydarzenie na najlepszej konferencji edukacyjnej tego roku!</p>
                </div>
            </div>
            <div class="row efekt-row" data-row="front-page-speakers">
                <div class="col">
                    <h2 class="efekt-h2">Mówcy</h2>
                    <ul class="efekt-speakers">
                        <li>
                            <div>
                                <img src="data:image/svg+xml;base64,PHN2ZyB2aWV3Qm94PSIwIDAgNDM1IDQ5OSIgZmlsbD0ibm9uZSIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj48cmVjdCB4PSIwIiB5PSIwIiB3aWR0aD0iMTAwJSIgaGVpZ2h0PSIxMDAlIiBmaWxsPSIjZDlkOWQ5Ii8+PC9zdmc+" alt="imię nazwisko">
                            </div>
                            <h3 class="efekt-h3">Imię i&nbsp;nazwisko</h3>
                            <p class="efekt-p">Chief Innovation Officer i&nbsp;współzałożyciel Makimo, firmy świadczącej usługi doradcze i&nbsp;wykonawcze w&nbsp;zakresie oprogramowania. Programista przez 10 lat, na studiach zainteresował się przywództwem i&nbsp;rozwijał swoje umiejętności w&nbsp;Niezależnym Zrzeszeniu Studentów Regionu Łódzkiego. Prywatnie interesuje się przemawianiem publicznym i&nbsp;ćwiczy swoje umiejętności w&nbsp;klubie Speakers of Łódź i&nbsp;Łódź Toastmasters. Zawsze poszukuje nowych konceptów, które może włączyć do swojego postrzegania świata.</p>
                        </li>
                        <li>
                            <div>
                                <img src="data:image/svg+xml;base64,PHN2ZyB2aWV3Qm94PSIwIDAgNDM1IDQ5OSIgZmlsbD0ibm9uZSIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj48cmVjdCB4PSIwIiB5PSIwIiB3aWR0aD0iMTAwJSIgaGVpZ2h0PSIxMDAlIiBmaWxsPSIjZDlkOWQ5Ii8+PC9zdmc+" alt="imię nazwisko">
                            </div>
                            <h3 class="efekt-h3">Imię i&nbsp;nazwisko</h3>
                            <p class="efekt-p">Chief Innovation Officer i&nbsp;współzałożyciel Makimo, firmy świadczącej usługi doradcze i&nbsp;wykonawcze w&nbsp;zakresie oprogramowania. Programista przez 10 lat, na studiach zainteresował się przywództwem i&nbsp;rozwijał swoje umiejętności w&nbsp;Niezależnym Zrzeszeniu Studentów Regionu Łódzkiego. Prywatnie interesuje się przemawianiem publicznym i&nbsp;ćwiczy swoje umiejętności w&nbsp;klubie Speakers of Łódź i&nbsp;Łódź Toastmasters. Zawsze poszukuje nowych konceptów, które może włączyć do swojego postrzegania świata.</p>
                        </li>
                        <li>
                            <div>
                                <img src="data:image/svg+xml;base64,PHN2ZyB2aWV3Qm94PSIwIDAgNDM1IDQ5OSIgZmlsbD0ibm9uZSIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj48cmVjdCB4PSIwIiB5PSIwIiB3aWR0aD0iMTAwJSIgaGVpZ2h0PSIxMDAlIiBmaWxsPSIjZDlkOWQ5Ii8+PC9zdmc+" alt="imię nazwisko">
                            </div>
                            <h3 class="efekt-h3">Imię i&nbsp;nazwisko</h3>
                            <p class="efekt-p">Chief Innovation Officer i&nbsp;współzałożyciel Makimo, firmy świadczącej usługi doradcze i&nbsp;wykonawcze w&nbsp;zakresie oprogramowania. Programista przez 10 lat, na studiach zainteresował się przywództwem i&nbsp;rozwijał swoje umiejętności w&nbsp;Niezależnym Zrzeszeniu Studentów Regionu Łódzkiego. Prywatnie interesuje się przemawianiem publicznym i&nbsp;ćwiczy swoje umiejętności w&nbsp;klubie Speakers of Łódź i&nbsp;Łódź Toastmasters. Zawsze poszukuje nowych konceptów, które może włączyć do swojego postrzegania świata.</p>
                        </li>
                        <li>
                            <div>
                                <img src="data:image/svg+xml;base64,PHN2ZyB2aWV3Qm94PSIwIDAgNDM1IDQ5OSIgZmlsbD0ibm9uZSIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj48cmVjdCB4PSIwIiB5PSIwIiB3aWR0aD0iMTAwJSIgaGVpZ2h0PSIxMDAlIiBmaWxsPSIjZDlkOWQ5Ii8+PC9zdmc+" alt="imię nazwisko">
                            </div>
                            <h3 class="efekt-h3">Imię i&nbsp;nazwisko</h3>
                            <p class="efekt-p">Chief Innovation Officer i&nbsp;współzałożyciel Makimo, firmy świadczącej usługi doradcze i&nbsp;wykonawcze w&nbsp;zakresie oprogramowania. Programista przez 10 lat, na studiach zainteresował się przywództwem i&nbsp;rozwijał swoje umiejętności w&nbsp;Niezależnym Zrzeszeniu Studentów Regionu Łódzkiego. Prywatnie interesuje się przemawianiem publicznym i&nbsp;ćwiczy swoje umiejętności w&nbsp;klubie Speakers of Łódź i&nbsp;Łódź Toastmasters. Zawsze poszukuje nowych konceptów, które może włączyć do swojego postrzegania świata.</p>
                        </li>
                        <li>
                            <div>
                                <img src="data:image/svg+xml;base64,PHN2ZyB2aWV3Qm94PSIwIDAgNDM1IDQ5OSIgZmlsbD0ibm9uZSIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj48cmVjdCB4PSIwIiB5PSIwIiB3aWR0aD0iMTAwJSIgaGVpZ2h0PSIxMDAlIiBmaWxsPSIjZDlkOWQ5Ii8+PC9zdmc+" alt="imię nazwisko">
                            </div>
                            <h3 class="efekt-h3">Imię i&nbsp;nazwisko</h3>
                            <p class="efekt-p">Chief Innovation Officer i&nbsp;współzałożyciel Makimo, firmy świadczącej usługi doradcze i&nbsp;wykonawcze w&nbsp;zakresie oprogramowania. Programista przez 10 lat, na studiach zainteresował się przywództwem i&nbsp;rozwijał swoje umiejętności w&nbsp;Niezależnym Zrzeszeniu Studentów Regionu Łódzkiego. Prywatnie interesuje się przemawianiem publicznym i&nbsp;ćwiczy swoje umiejętności w&nbsp;klubie Speakers of Łódź i&nbsp;Łódź Toastmasters. Zawsze poszukuje nowych konceptów, które może włączyć do swojego postrzegania świata.</p>
                        </li>
                        <li>
                            <div>
                                <img src="data:image/svg+xml;base64,PHN2ZyB2aWV3Qm94PSIwIDAgNDM1IDQ5OSIgZmlsbD0ibm9uZSIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj48cmVjdCB4PSIwIiB5PSIwIiB3aWR0aD0iMTAwJSIgaGVpZ2h0PSIxMDAlIiBmaWxsPSIjZDlkOWQ5Ii8+PC9zdmc+" alt="imię nazwisko">
                            </div>
                            <h3 class="efekt-h3">Imię i&nbsp;nazwisko</h3>
                            <p class="efekt-p">Chief Innovation Officer i&nbsp;współzałożyciel Makimo, firmy świadczącej usługi doradcze i&nbsp;wykonawcze w&nbsp;zakresie oprogramowania. Programista przez 10 lat, na studiach zainteresował się przywództwem i&nbsp;rozwijał swoje umiejętności w&nbsp;Niezależnym Zrzeszeniu Studentów Regionu Łódzkiego. Prywatnie interesuje się przemawianiem publicznym i&nbsp;ćwiczy swoje umiejętności w&nbsp;klubie Speakers of Łódź i&nbsp;Łódź Toastmasters. Zawsze poszukuje nowych konceptów, które może włączyć do swojego postrzegania świata.</p>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="row efekt-row" data-row="front-page-agenda">
                <div class="col">
                    <h2 class="efekt-h2">Agenda</h2>
                    <h3 class="efekt-h3">8 września</h3>
                    <p class="efekt-p">Toastmasters słynie z&nbsp;edukacji na najwyższym poziomie. Na konferencji nie zabraknie cennych warsztatów, które pomogą Ci w&nbsp;dalszym rozwoju jako mówca, lider i&nbsp;przede wszystkim jako człowiek!</p>
                    <h3 class="efekt-h3">9 września</h3>
                    <p class="efekt-p">Będziesz mieć możliwość zobaczenia najlepszych mówców w&nbsp;ogólnopolskich finałach. Emocje i&nbsp;najwyższy poziom przemawiania gwarantowany. Ucz się od najlepszych!</p>
                    <h3 class="efekt-h3">10 września</h3>
                    <p>Toastmasterzy znani są z&nbsp;tego, że potrafią się dobrze bawić. Chłoń klimat malowniczego Wrocławia w&nbsp;doborowym towarzystwie. Niezapomniane wrażenia Gwarantowane!</p>
                </div>
            </div>
            <div class="row efekt-row" data-row="front-page-location">
                <div class="col">
                    <h2 class="efekt-h2">Miejsce wydarzenia</h2>
                    <p class="efekt-p">Tegoroczne wydarzenie odbędzie się w&nbsp;malowniczym hotelu <span>Wyndham</span></p>
                    <img src="images/location-1.png" alt="hotel wyndham 1">
                    <img src="images/location-2.png" alt="hotel wyndham 2">
                    <img src="images/location-3.png" alt="hotel wyndham 3">
                    <img src="images/location-4.png" alt="hotel wyndham 4">
                    <img src="images/location-5.png" alt="hotel wyndham 5">
                    <img src="images/location-6.png" alt="hotel wyndham 6">
                    <img src="images/location-map.png" alt="hotel wyndham mapa">
                    <p class="efekt-p">Świętego Mikołaja 67, 50-127 Wrocław</p>
                </div>
            </div>
            <div class="row efekt-row" data-row="front-page-conferences">
                <div class="col">
                    <h2 class="efekt-h2">Poprzednie konferencje</h2>
                    <img src="images/conference-1.png" alt="efekt zdjęcie">
                    <img src="images/conference-2.png" alt="efekt zdjęcie">
                    <img src="images/conference-3.png" alt="efekt zdjęcie">
                    <img src="images/conference-4.png" alt="efekt zdjęcie">
                    <img src="images/conference-5.png" alt="efekt zdjęcie">
                    <h3 class="efekt-h3">Efekt Toastmasters 2021 <strong>Gdańsk</strong></h3>
                    <a href="javascript:void(0)">obejrzyj na Youtube</a>
                    <h3 class="efekt-h3">Efekt Toastmasters 2022 <strong>Warmia Efekt w&nbsp;Olsztynie</strong></h3>
                    <a href="javascript:void(0)">obejrzyj na Youtube</a>
                    <h3 class="efekt-h3">Efekt Toastmasters 2023 <strong>Piernikowy Efekt w&nbsp;Toruniu</strong></h3>
                    <a href="javascript:void(0)">obejrzyj na Youtube</a>
                </div>
            </div>
            <div class="row efekt-row" data-row="front-page-map">
                <div class="col">
                    <img src="images/map.svg" alt="mapa polski">
                </div>
            </div>
            <div class="row efekt-row" data-row="front-page-footer" style="background: radial-gradient(111.05% 111.05% at 26.96% 12.35%, #A2578F 0%, #695467 100%)">
                <div class="col-12">
                    <h2 class="efekt-h2">Kontakt</h2>
                    <p class="efekt-p">Jesteś zainteresowany wydarzeniem? <strong>Skontaktuj się z&nbsp;nami!</strong></p>
                </div>
                <div class="col-6">
                    <img src="images/logo-white.svg" alt="efekt stu mostów">
                </div>
                <div class="col-6">
                    <p class="efekt-p"><img src="icons/phone.svg"> 777-888-999</p>
                    <p class="efekt-p"><img src="icons/envelope.svg"> mail@mail.mail</p>
                    <p class="efekt-p"><img src="icons/facebook.svg"> Facebook/facebook</p>
                    <p class="efekt-p"><img src="icons/pin.svg"> Świętego Mikołaja 67 50-127 Wrocław</p>
                    <p class="efekt-p"><img src="icons/calendar.svg"> 08.09.2023 - 10.09.2023</p>
                </div>
            </div>
        </div>
    </body>
</html>