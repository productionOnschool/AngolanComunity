<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>404 Error - Astronaut</title>
    <style>
        /* CSS styles here */
        html,
        body {
            height: 100%;
            width: 100%;
            margin: 0;
            background: linear-gradient(90deg, rgba(47, 54, 64, 1) 23%, rgba(24, 27, 32, 1) 100%);
        }

        .moon {
            background: linear-gradient(90deg, rgba(208, 208, 208, 1) 48%, rgba(145, 145, 145, 1) 100%);
            position: absolute;
            top: -100px;
            left: -300px;
            width: 900px;
            height: 900px;
            border-radius: 100%;
            box-shadow: 0px 0px 30px -4px rgba(0, 0, 0, 0.5);
        }

        .error {
            position: absolute;
            left: 100px;
            top: 400px;
            transform: translateY(-60%);
            font-family: 'Righteous', cursive;
            color: #363e49;
        }

        .error__title {
            font-size: 10em;
        }

        .error__subtitle {
            font-size: 2em;
        }

        .error__button {
            min-width: 7em;
            margin-top: 3em;
            padding: 0.5em 2em;
            outline: none;
            border: 2px solid #2f3640;
            background-color: transparent;
            border-radius: 8em;
            color: #576375;
            cursor: pointer;
            font-size: 0.75em;
        }

        .astronaut {
            position: absolute;
            width: 185px;
            height: 300px;
            left: 70%;
            top: 50%;
            transform: translate(-50%, -50%) rotate(20deg) scale(1.2);
        }
    </style>
</head>

<body>
    <div class="moon"></div>
    <div class="error">
        <div class="error__title">404</div>
        <div class="error__subtitle">Hmmm...</div>
        <div class="error__description">It looks like one of the developers fell asleep</div>
        <button class="error__button error__button--active">LOGIN</button>
        <button class="error__button">CONTACT</button>
    </div>
    <div class="astronaut">
        <canvas id="visor" width="60px" height="60px"></canvas>
    </div>
    <script>
        function drawVisor() {
            const canvas = document.getElementById('visor');
            const ctx = canvas.getContext('2d');
            ctx.beginPath();
            ctx.moveTo(5, 45);
            ctx.bezierCurveTo(15, 64, 45, 64, 55, 45);
            ctx.lineTo(55, 20);
            ctx.bezierCurveTo(55, 15, 50, 10, 45, 10);
            ctx.lineTo(15, 10);
            ctx.bezierCurveTo(15, 10, 5, 10, 5, 20);
            ctx.lineTo(5, 45);
            ctx.fillStyle = '#2f3640';
            ctx.strokeStyle = '#f5f6fa';
            ctx.fill();
            ctx.stroke();
        }
        drawVisor();
    </script>
</body>

</html>