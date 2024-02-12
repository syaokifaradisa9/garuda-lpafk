<!doctype html>
<html lang="en">
    <head>
        <title>Gerbang Aplikasi LPAFK Banjarbaru</title>
        <link rel="icon" type="image/png" href="{{ asset('assets/img/logo/logo.png') }}" />
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v6.5.1/css/all.css">
        <link rel="stylesheet" href="{{ asset('assets/css/auth/style.css') }}">
        <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
        <style>
            body {
                background: #f2f4f8;
                display: flex;
                justify-content: space-around;
                align-items: center;
                flex-wrap: wrap;
                height: 100vh;
                font-family: "Open Sans";
            }

            .helpdesk {
                --bg-color: #5bbcd8;
                --bg-color-light: #227b9a;
                --text-color-hover: #4C5656;
                --box-shadow-color: #0d3678;
            }

            .inventory {
                --bg-color: #B8F9D3;
                --bg-color-light: #e2fced;
                --text-color-hover: #4C5656;
                --box-shadow-color: rgba(184, 249, 211, 0.48);
            }

            .archieve {
                --bg-color: #CEB2FC;
                --bg-color-light: #F0E7FF;
                --text-color-hover: #fff;
                --box-shadow-color: rgba(206, 178, 252, 0.48);
            }

            .staffing {
                --bg-color: #BFD8AF;
                --bg-color-light: #99BC85;
                --text-color-hover: #fff;
                --box-shadow-color: #99BC85;
            }

            .card {
                width: 220px;
                height: 321px;
                background: #fff;
                border-top-right-radius: 10px;
                overflow: hidden;
                display: flex;
                flex-direction: column;
                justify-content: center;
                align-items: center;
                position: relative;
                box-shadow: 0 14px 26px rgba(0,0,0,0.04);
                transition: all 0.3s ease-out;
                text-decoration: none;
            }

            .card:hover {
                transform: translateY(-5px) scale(1.005) translateZ(0);
                box-shadow: 0 24px 36px rgba(0,0,0,0.11),
                0 24px 46px var(--box-shadow-color);
            }

            .card:hover .overlay {
                transform: scale(4) translateZ(0);
            }

            .card:hover .circle {
                border-color: var(--bg-color-light);
                background: var(--bg-color);
            }

            .card:hover .circle:after {
                background: var(--bg-color-light);
            }

            .card:hover p {
                color: var(--text-color-hover);
            }

            .card:active {
                transform: scale(1) translateZ(0);
                box-shadow: 0 15px 24px rgba(0,0,0,0.11),
                0 15px 24px var(--box-shadow-color);
            }

            .card p {
                font-size: 17px;
                color: #4C5656;
                margin-top: 30px;
                z-index: 1000;
                transition: color 0.3s ease-out;
            }

            .circle {
                width: 131px;
                height: 131px;
                border-radius: 50%;
                background: #fff;
                border: 2px solid var(--bg-color);
                display: flex;
                justify-content: center;
                align-items: center;
                position: relative;
                z-index: 1;
                transition: all 0.3s ease-out;
            }

            .circle:after {
                content: "";
                width: 118px;
                height: 118px;
                display: block;
                position: absolute;
                background: var(--bg-color);
                border-radius: 50%;
                top: 7px;
                left: 7px;
                transition: opacity 0.3s ease-out;
            }

            .circle svg {
                z-index: 10000;
                transform: translateZ(0);
            }

            .overlay {
                width: 118px;
                position: absolute; 
                height: 118px;
                border-radius: 50%;
                background: var(--bg-color);
                top: 70px;
                left: 50px;
                z-index: -1;
                transition: transform 0.3s ease-out;
            }
        </style>
	</head>
	<body>
        <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">

        <a href="#" class="card archieve">
            <div class="overlay"></div>
            <img
                style="width: 130px"
                src="{{ asset('assets/icons/archieve.png') }}">
            <p>Arsiparis</p>
        </a>

        <a href="#" class="card helpdesk">
            <div class="overlay"></div>
            <img
                style="width: 130px"
                src="{{ asset('assets/icons/helpdesk-it.png') }}">
            <p>Helpdesk IT</p>
        </a>

        <a href="#" class="card inventory">
            <div class="overlay"></div>
            <img
                style="width: 130px"
                src="{{ asset('assets/icons/inventaris.png') }}">
            <p>Inventaris</p>
        </a>

        <a href="{{ route('staffing.index') }}" class="card staffing">
            <div class="overlay"></div>
            <img
                style="width: 130px"
                src="{{ asset('assets/icons/staffing.png') }}">
            <p>Kepegawaian</p>
        </a>
	</body>
</html>