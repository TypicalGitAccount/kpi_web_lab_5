<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Philosopher&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="/css/style.css">
    <link rel="stylesheet" href="/css/aboutUsStyle.css">

    <title>My Time</title>
    <link rel="icon" type="image/x-icon" href="/img/favicon.png">
</head>
<body>
    <header>
        <div class="container">
            <div class="lineHeader">
                <div class="higherHeader">
                    <a href="{{url('/aboutUs/en')}}" class="languageHeader"><span class="textLanguageHeader">Мова</span><img src="/img/Language_flag.svg" alt="flag" class="flag"></a>
                </div>
                <div class="lowHeader">
                    <img src="/img/Logo.png" alt="logo" class="logoImg">
                    <button class="btnLowHeader firstBtn" onclick="window.location='{{url('/')}}'">Головна</button>
                    <button class="btnLowHeader" onclick="window.location='{{url('/aboutUs')}}'">Послуги</button>
                    <button class="btnLowHeader lastBtn" onclick="window.location='{{url('/services')}}'">Про нас</button>
                </div>
            </div>
        </div>
    </header>
    <div class="media">
        <a href="https://www.youtube.com/"><img src="/img/youtubeImg.png" alt="youtube" class="mediaImg"></a> <br>
        <a href="https://instagram.com/"><img src="/img/instagramImg.jpg" alt="inst" class="mediaImg"></a> <br>
        <a href="https://web.telegram.org/"><img src="/img/telegramIng.png" alt="tel" class="mediaImg"></a> <br>
        <a href="{{url('/email')}}"><img src="/img/gmail.png" alt="ask a mail" class="mediaImg"></a> <br>
        <abbr title="Копіювати телефон" onclick="copyPhone()"><img src="/img/phone.png" alt="phone" class="mediaImg"></abbr>
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
            <div class="allAboutUs">

                <!-- Map -->
                <div class="mapMainBlock">
                    <div class="imgDiv">
                        <img src="/img/map.png" alt="map" class="aboutImg">
                    </div>
                    <div class=" mapText">
                        <p class="fullTextMain">
                            <span class="titleMain">
                                Правильний підхід
                            </span> <br> <br>
                            На наших курсах працюють лише кваліфіковані <br>
                            викладачі, що мають міжнародну <br>
                            сертифікацію та великий практичний досвід. <br>
                            Більшість викладачів - іноземці!
                        </p>
                    </div>
                </div>

                <!-- bestPrice -->
                <div class="mapMainBlock revise">
                    <div class=" mapText">
                        <p class="fullTextMain">
                            <span class="titleMain">
                                Гнучкий графік та приємні ціни
                            </span> <br> <br>
                            Наші клієнти самі обирають викладача після <br>
                            пробних занять, обирають зручний для занять <br>
                            розклад і отримують регулярні знижки! <br>
                            Для дорослих заняття коштуватимуть <br>
                            500 грн/ год, для дітей - 250 грн/год.
                        </p>
                    </div>
                    <div class="imgDiv">
                        <img src="/img/bestPrice.png" alt="map" class="aboutImg">
                    </div>
                </div>

                <!-- steps -->
                <div class="mapMainBlock">
                    <div class="imgDiv">
                        <img src="/img/supportSteps.png" alt="map" class="aboutImg">
                    </div>
                    <div class=" mapText">
                        <p class="fullTextMain">
                            <span class="titleMain">
                                Підтримка на шляху
                            </span> <br> <br>
                            За допомогою п’ятихвилинного тесту  <br>
                            визначимо рівень знань обраної мови,  <br>
                            визначимо вид лексики, який найбільше<br>
                            знадобиться. Регулярно перевірятимемо рівень <br>
                            знань за допомогою інтерактивних тестів.
                        </p>
                    </div>
                </div>

                <!-- bestService -->
                <div class="mapMainBlock revise">
                    <div class=" mapText">
                        <p class="fullTextMain">
                            <span class="titleMain">
                                Усі види послуг
                            </span> <br> <br>
                            Ми готуємо до ЗНО та міжнародних іспитів та  <br>
                            сертифікацій, вчимо говорити іноземною на  <br>
                            практиці для переїзду за кордон, надаємо  <br>
                            безкоштовні консультації з перекладів для клієнтів, <br>
                            виконуємо корпоративні замовлення.
                        </p>
                    </div>
                    <div class="imgDiv">
                        <img src="/img/bestService.png" alt="map" class="aboutImg">
                    </div>
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
                        <img src="/img/location.svg" class="footerImg">
                        <p class="footerText">Чекаємо на вас<br>
                            Місто, вулиця, №26</p>
                    </div>
                    <div class="footerItems">
                        <img src="/img/time.svg" class="footerImg">
                        <p class="footerText">Працюємо<br>
                            8 ранку - 8 вечора</p>
                    </div>
                    <div class="footerItems">
                        <img src="/img/mail.svg" class="footerImg">
                        <p class="footerText">Електронна пошта<br>
                            example@gmail.com</p>
                    </div>
                    <div class="footerItems">
                        <img src="/img/phone.svg" class="footerImg">
                        <p class="footerText">Дзвоніть<br>
                            +380-67-111-11-11</p>
                    </div>
                </div>
            </div>
        </div>
    </footer>
</body>
</html>
