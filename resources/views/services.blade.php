<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Philosopher&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/servicesStyle.css">

    <title>My Time</title>
    <link rel="icon" type="image/x-icon" href="img/favicon.png">

</head>
<body>
    <header>
        <div class="container">
            <div class="lineHeader">
                <div class="higherHeader">
                    <a href="{{url('/services/en')}}" class="languageHeader"><span class="textLanguageHeader">Мова</span><img src="img/Language_flag.svg" alt="flag" class="flag"></a>
                </div>
                <div class="lowHeader">
                    <img src="img/Logo.png" alt="logo" class="logoImg">
                    <button class="btnLowHeader firstBtn" onclick="window.location='{{url('/')}}'">Головна</button>
                    <button class="btnLowHeader" onclick="window.location='{{url('/services')}}'">Послуги</button>
                    <button class="btnLowHeader lastBtn" onclick="window.location='{{url('/aboutUs')}}'">Про нас</button>
                </div>
            </div>
        </div>
    </header>
    <div class="media">
        <a href="https://www.youtube.com/"><img src="img/youtubeImg.png" alt="youtube" class="mediaImg"></a> <br>
        <a href="https://instagram.com/"><img src="img/instagramImg.jpg" alt="inst" class="mediaImg"></a> <br>
        <a href="https://web.telegram.org/"><img src="img/telegramIng.png" alt="tel" class="mediaImg"></a> <br>
        <a href="{{url('/email')}}"><img src="img/gmail.png" alt="ask a mail" class="mediaImg"></a> <br>
        <abbr title="Копіювати телефон" onclick="copyPhone()"><img src="img/phone.png" alt="phone" class="mediaImg"></abbr>
        <script>
            function copyPhone() {
              var copyText = '+380-67-111-11-11';
              navigator.clipboard.writeText(copyText).then(() => {
                alert("Ви скопювали номер телефону");
              });
            }
          </script>
    </div>
    <main>
        <div class="container">
            <h1 class="titleMain">Наші послуги</h1>
            <div class="allServices">
                <div class="firstServices">
                    <img src="img/groupClasses.png" alt="groupClasses" class="servicesImg">
                    <p class="fullTextMain">
                        Групові заняття <br>
                        500 грн / год
                    </p>
                </div>
                <div class="firstServices">
                    <img src="img/individualClasses.png" alt="groupClasses" class="servicesImg">
                    <p class="fullTextMain">
                        Індивідуальні заняття <br>
                        1000 грн / год
                    </p>
                </div>
                <div class="firstServices lastFirstServices">
                    <img src="img/teaBreakImage.png" alt="groupClasses" class="servicesImg">
                    <p class="fullTextMain">
                        Перерви на чай <br>
                        (ласощі безкоштовні)
                    </p>
                </div>
                <div class="firstServices">
                    <img src="img/examsImage.png" alt="groupClasses" class="servicesImg">
                    <p class="fullTextMain">
                        Тести рівня знань<br>
                        до та після курсу<br>
                        (безкоштовно)
                    </p>
                </div>
                <div class="firstServices">
                    <img src="img/speakingClubImage.png" alt="groupClasses" class="servicesImg">
                    <p class="fullTextMain">
                        Розмовні клуби<br>
                        Із носіями мов<br>
                        200 грн / год
                    </p>
                </div>
                <div class="firstServices lastFirstServices">
                    <img src="img/cinemaHours.png" alt="groupClasses" class="servicesImg">
                    <p class="fullTextMain">
                        Перегляд фільмів<br>
                        мовою оригіналу<br>
                        (безкоштовно)
                    </p>
                </div>
            </div>
        </div>
    </main>
    <footer>
        <div class="container">
            <div class="higherFotter">
                <h1 class="titleFooter">Готові приєднатися?</h1>
                <hr class="lineBellowTitleFotter">
                <div class="footerAllItems">
                    <div class="footerItems">
                        <img src="img/location.svg" class="footerImg">
                        <p class="footerText">Чекаємо на вас<br>
                            Місто, вулиця, №26</p>
                    </div>
                    <div class="footerItems">
                        <img src="img/time.svg" class="footerImg">
                        <p class="footerText">Працюємо<br>
                            8 ранку - 8 вечора</p>
                    </div>
                    <div class="footerItems">
                        <img src="img/mail.svg" class="footerImg">
                        <p class="footerText">Електронна пошта<br>
                            example@gmail.com</p>
                    </div>
                    <div class="footerItems">
                        <img src="img/phone.svg" class="footerImg">
                        <p class="footerText">Дзвоніть<br>
                            +380-67-111-11-11</p>
                    </div>
                </div>
            </div>
        </div>
    </footer>
</body>
</html>
