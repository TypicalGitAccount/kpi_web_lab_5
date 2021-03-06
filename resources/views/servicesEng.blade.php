<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Philosopher&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="/css/style.css">
    <link rel="stylesheet" href="/css/servicesStyle.css">

    <title>My Time</title>
    <link rel="icon" type="image/x-icon" href="/img/favicon.png">
</head>
<body>
    <header>
        <div class="container">
            <div class="lineHeader">
                <div class="higherHeader">
                    <a href="{{url('/services')}}" class="languageHeader"><span class="textLanguageHeader">Language</span><img src="/img/UK_flag.png" alt="flag" class="flag"></a>
                </div>
                <div class="lowHeader">
                    <img src="/img/Logo.png" alt="logo" class="logoImg">
                    <button class="btnLowHeader firstBtn" onclick="window.location='{{url('/en')}}'">Home</button>
                    <button class="btnLowHeader" onclick="window.location='{{url('/services/en')}}'">Services</button>
                    <button class="btnLowHeader lastBtn" onclick="window.location='{{url('/aboutUs/en')}}'">About us</button>
                </div>
            </div>
        </div>
    </header>
    <div class="media">
        <a href="https://www.youtube.com/"><img src="/img/youtubeImg.png" alt="youtube" class="mediaImg"></a> <br>
        <a href="https://instagram.com/"><img src="/img/instagramImg.jpg" alt="inst" class="mediaImg"></a> <br>
        <a href="https://web.telegram.org/"><img src="/img/telegramIng.png" alt="tel" class="mediaImg"></a> <br>
        <a href="{{url('/email/en')}}"><img src="/img/gmail.png" alt="ask a mail" class="mediaImg"></a> <br>
        <abbr title="Copy phone" onclick="copyPhone()"><img src="/img/phone.png" alt="phone" class="mediaImg"></abbr>
        <script>
            function copyPhone() {
              var copyText = '+380-67-111-11-11';
              navigator.clipboard.writeText(copyText).then(() => {
                alert("???? ?????????????????? ?????????? ????????????????");
              });
            }
          </script>
    </div>
    <main>
        <div class="container">
            <h1 class="titleMain">Our services</h1>
            <div class="allServices">
                <div class="firstServices">
                    <img src="/img/groupClasses.png" alt="groupClasses" class="servicesImg">
                    <p class="fullTextMain">
                        Group classes <br>
                        UAH 500 per hour
                    </p>
                </div>
                <div class="firstServices">
                    <img src="/img/individualClasses.png" alt="groupClasses" class="servicesImg">
                    <p class="fullTextMain">
                        Individual lessons <br>
                        UAH 1000 per hour
                    </p>
                </div>
                <div class="firstServices lastFirstServices">
                    <img src="/img/teaBreakImage.png" alt="groupClasses" class="servicesImg">
                    <p class="fullTextMain">
                        Tea breaks <br>
                        (delicacies are free)
                    </p>
                </div>
                <div class="firstServices">
                    <img src="/img/examsImage.png" alt="groupClasses" class="servicesImg">
                    <p class="fullTextMain">
                        Knowledge level tests<br>
                        before and after the course<br>
                        (free)
                    </p>
                </div>
                <div class="firstServices">
                    <img src="/img/speakingClubImage.png" alt="groupClasses" class="servicesImg">
                    <p class="fullTextMain">
                        Speaking clubs<br>
                        With native speakers<br>
                        UAH 200 per hour
                    </p>
                </div>
                <div class="firstServices lastFirstServices">
                    <img src="/img/cinemaHours.png" alt="groupClasses" class="servicesImg">
                    <p class="fullTextMain">
                        Watching foreign movies<br>
                        (free)
                    </p>
                </div>
            </div>
        </div>
    </main>
    <footer>
        <div class="container">
            <div class="higherFotter">
                <h1 class="titleFooter">Ready to join?</h1>
                <hr class="lineBellowTitleFotter">
                <div class="footerAllItems">
                    <div class="footerItems">
                        <img src="/img/location.svg" class="footerImg">
                        <p class="footerText">Are waiting for you<br>
                            Kyiv, street, ???26</p>
                    </div>
                    <div class="footerItems">
                        <img src="/img/time.svg" class="footerImg">
                        <p class="footerText">We work from  <br>
                            8 am to 8 pm</p>
                    </div>
                    <div class="footerItems">
                        <img src="/img/mail.svg" class="footerImg">
                        <p class="footerText">Email<br>
                            example@gmail.com</p>
                    </div>
                    <div class="footerItems">
                        <img src="/img/phone.svg" class="footerImg">
                        <p class="footerText">Call<br>
                            +380-67-111-11-11</p>
                    </div>
                </div>
            </div>
        </div>
    </footer>
</body>
</html>
