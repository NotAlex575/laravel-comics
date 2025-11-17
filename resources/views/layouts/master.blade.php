<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield("title")</title>

    <!--BOOTSTRAP-->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])

    <!--CSS-->
    <style>
        .dc-footer {
            background-image: url('/assets/img/footer-bg.jpg');
            background-size: cover;
            background-position: center;
        }
            .footer-logo-container {
            position: absolute;
            right: 0;
            top: 50%;
            transform: translateY(-50%);
            pointer-events: none; /* opzionale */
        }

        .footer-logo {
            height: 450px; /* o la dimensione che vuoi */
        }

        .hero-header {
            background: url('/assets/img/jumbotron.jpg') top/cover no-repeat;
            height: 350px;
        }

        .fixed-card-img {
            width: 100%;
            height: 200px;      
            object-fit: cover;  
        }

    </style>

</head>
<body>
    @include("partials/header")
    @yield("main")
    @include("partials/footer")
</body>
</html>