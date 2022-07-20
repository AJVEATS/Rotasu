<?php ?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Gibbon</title>
    <meta name="description" content="Starting soon..">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="static/css/index.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tiny-slider/2.9.4/tiny-slider.css">

    <script src="https://cdnjs.cloudflare.com/ajax/libs/tiny-slider/2.9.2/min/tiny-slider.js"></script>
</head>

</html>

<body>

    <script type="module">
        import {
            tns
        } from '../node_modules/tiny-slider/src/tiny-slider.js';

        var slider = tns({
            container: '.my-slider',
            items: 1,
            slideBy: 'page',
            autoplay: true
        });
    </script>
    <main>
        <section class="hero-slider">
            <div class="my-slider">
                <div class="slider-slide" style="background-image: url(https://source.unsplash.com/C6oPXOatFD8);">

                </div>
                <div class="slider-slide" style="background-image: url(https://source.unsplash.com/C6oPxOatFD8);">

                </div>
            </div>
        </section>
    </main>
</body>