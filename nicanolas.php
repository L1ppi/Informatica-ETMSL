<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nicanolas DVD</title>
    <style>
        body {
            margin: 0;
            font-family: 'Montserrat', Arial, sans-serif;
            background: #111;
            overflow: hidden;
            height: 100vh;
        }
        .nicanolas {
            border-radius: 24px;
            box-shadow: 0 8px 32px #0008;
            transition: border 0.3s, filter 0.3s;
            position: absolute;
            width: 200px;
        }
    </style>
</head>
<body>
    <img id="nicanolas-img" class="nicanolas" 
    src="https://media.tenor.com/AOdrE-TKs7cAAAAj/dancing-cat-cat-dance.gif" 
    alt="Dancing Cat" height="200px">
    <script>
    const img = document.getElementById('nicanolas-img');
    const larguraImg = 200, AlturaImg = 210;
    const cores = ['#FF5733', '#33FF57', '#3357FF', '#F333FF', '#FFD433', '#33FFF6'];
    let corIndex = 0;

    let x = (window.innerWidth - larguraImg) / 2;
    let y = (window.innerHeight - AlturaImg) / 2;
    let dx = 3, dy = 2;

    function changeColor() {
        img.style.filter = `drop-shadow(0 0 32px ${cores[corIndex]})`;
        img.style.border = `5px solid ${cores[corIndex]}`;
        corIndex = (corIndex + 1) % cores.length;
    }

    function animate() {
        x += dx;
        y += dy;

        if (x <= 0 || x + larguraImg >= window.innerWidth) {
            dx *= -1;
            changeColor();
        }
        if (y <= 0 || y + AlturaImg >= window.innerHeight) {
            dy *= -1;
            changeColor();
        }

        img.style.left = x + 'px';
        img.style.top = y + 'px';

        requestAnimationFrame(animate);
    }

    changeColor();
    animate();

    window.addEventListener('resize', () => {
        x = Math.min(x, window.innerWidth - larguraImg);
        y = Math.min(y, window.innerHeight - AlturaImg);
    });
    </script>
</body>
</html>
