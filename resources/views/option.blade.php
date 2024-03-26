<html>

<head>
    <!--====== Title ======-->
    <title>Jagat Tirta Amarta</title>

    <!--====== Favicon Icon ======-->
    <link rel="shortcut icon" href="amarta_pure/images/logo/logo_io/favicon.ico" type="image/png">

</head>
<style>
    @import url('https://fonts.googleapis.com/css?family=Ubuntu:400,700&display=swap');

    :root {
        --dur: all 550ms ease-in-out;
        --dur-a: all 650ms ease-in-out;
        --dur-b: all 750ms ease-in-out;
    }

    body {
        padding: 0;
        margin: 0;
        height: 100vh;
        display: grid;
        align-items: center;
        font-family: 'Ubuntu';
        /* Permalink - use to edit and share this gradient: https://colorzilla.com/gradient-editor/#1CB3E4+0,1101e8+100 */
        /* background: #1CB3E4; */
        background-image: url("amarta_pure/images/option/bg.jpg");
        background-position: center;
        /* Center the image */
        background-repeat: no-repeat;
        /* Do not repeat the image */
        background-size: cover;
    }

    .container {
        max-width: 1200px;
        margin: auto;
        display: grid;
        grid-template-columns: 1fr 1fr 1fr;
        grid-gap: 20px;
        padding: 20px;
        box-sizing: border-box;
    }

    .item {
        background: #1CB3E4;
        height: 400px;
        position: relative;
        border-radius: 15px;
        padding: 30px;
        box-sizing: border-box;
        color: #fff;
    }

    .card {
        position: absolute;
        top: 0;
        right: 0;
        bottom: 0;
        left: 0;
        margin: auto;
        z-index: 10;
        width: 100%;
        height: 100%;
        overflow: hidden;
        border-radius: 15px;
        -webkit-transition: var(--dur);
        -moz-transition: var(--dur);
        -ms-transition: var(--dur);
        -o-transition: var(--dur);
        transition: var(--dur);
        clip-path: circle(100.0% at 50% 50%);
    }

    .card img {
        position: absolute;
        top: 0;
        right: 0;
        bottom: 0;
        left: 0;
        margin: auto;
        z-index: 10;
        height: 100%;
        width: auto;
        max-width: 9999px;
        overflow: hidden;
        border-radius: 15px;
        -webkit-transition: var(--dur);
        -moz-transition: var(--dur);
        -ms-transition: var(--dur);
        -o-transition: var(--dur);
        transition: var(--dur);
        clip-path: circle(100.0% at 50% 50%);
    }

    .item:hover .card img {
        clip-path: circle(0.0% at 50% 50%);
    }

    .circle {
        background-image: url("amarta_pure/images/option/bg_card.jpg");
        background-position: center;
        /* Center the image */
        background-repeat: no-repeat;
        /* Do not repeat the image */
        background-size: cover;
        max-width: 100%;
        height: 100%;
        position: absolute;
        z-index: 2;
        top: 0;
        right: 0;
        bottom: 0;
        left: 0;
        margin: auto;
        -webkit-transition: var(--dur-a);
        -moz-transition: var(--dur-a);
        -ms-transition: var(--dur-a);
        -o-transition: var(--dur-a);
        transition: var(--dur-a);
        clip-path: circle(100.0% at 50% 50%);
    }

    .circle2 {
        background: #1CB3E4;
        -webkit-transition: var(--dur-b);
        -moz-transition: var(--dur-b);
        -ms-transition: var(--dur-b);
        -o-transition: var(--dur-b);
        transition: var(--dur-b);
        clip-path: circle(100.0% at 50% 50%);
    }

    .item:hover .card img {
        clip-path: circle(0.0% at 50% 50%);
    }

    .item:hover .card .circle {
        clip-path: circle(0.0% at 75% 60%);
    }

    .item:hover .card .circle2 {
        clip-path: circle(0.0% at 35% 20%);
    }

    img {
        max-width: 100%;
        position: absolute;
        z-index: 3;
        top: 0;
        right: 0;
        bottom: 0;
        left: 0;
        margin: auto;
    }

    .content {
        position: relative;
        z-index: 0;
        display: flex;
        align-items: center;
        height: 100%;
    }
</style>
<div class="container">
    <a href="/company" target="_blank">
        <div class="item">
            <div class="card">
                <div class="circle circle2"></div>
                <div class="circle circle1"></div>
                <img src="amarta_pure/images/logo/logo_jta.png" style="width:50%; height:50%" />
            </div>
            <div class="content">
                <p>Profil Perusahaan</p>
            </div>
        </div>
    </a>
    <a href="/amarta_pure_water" target="_blank">
        <div class="item">
            <div class="card">
                <div class="circle circle2"></div>
                <div class="circle circle1"></div>
                <img src="amarta_pure/images/logo/logo_amarta_pure.png" style="width:60%; height:40%" />
            </div>
            <div class="content">
                <p>Salah satu unit yang kami sediakan</p>
            </div>
        </div>
    </a>
    <a href="/amarta_pure_treatment" target="_blank">
        <div class="item">
            <div class="card">
                <div class="circle circle2"></div>
                <div class="circle circle1"></div>
                <img src="amarta_pure/images/logo/logo_water_treatment.png" style="width:60%; height:55%" />
            </div>
            <div class="content">
                <p>Salah satu unit yang kami sediakan</p>
            </div>
        </div>
    </a>
</div>


<!--
<img src="https://i.ibb.co/tCKLc3d/audience-band-club-2747446.jpg" />
<img src="https://i.ibb.co/3hnXN31/4k-wallpaper-audience-band-2728557.jpg" />
<img src="https://i.ibb.co/vqsdkRt/cheerful-concert-crowd-849.jpg" />
-->

</html>