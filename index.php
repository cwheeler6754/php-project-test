<!DOCTYPE html>
    <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Project Home</title>
            <link rel="stylesheet" href="css/styles.css">
        </head>
    <body>
        <?php
            include("includes/header-nav.php");

            // Prices

            $babybettaprice = 2.49;
            $tax = 1.06;
            $total = $babybettaprice * $tax;
            $baby_total = number_format($total, 2);

            $whitebettaprice = 39.99;
            $tax = 1.06;
            $total = $whitebettaprice * $tax;
            $white_total = number_format($total, 2);

            $blackbettaprice = 40.00;
            $tax = 1.06;
            $total = $blackbettaprice * $tax;
            $black_total = number_format($total, 2);

            $plakatbettaprice = 48.98;
            $tax = 1.06;
            $total = $plakatbettaprice * $tax;
            $plakat_total = number_format($total, 2);

            $redbettaprice = 49.98;
            $tax = 1.06;
            $total = $redbettaprice * $tax;
            $red_total = number_format($total, 2);

            $galaxybettaprice = 59.99;
            $tax = 1.06;
            $total = $galaxybettaprice * $tax;
            $galaxy_total = number_format($total, 2);

            // Image Variables

            $baby_img = "<img src='media/baby_betta.jpg'>";
            $white_img = "<img src='media/white_half_moon_betta.jpg'>";
            $black_img = "<img src='media/black_turquoise_samurai_betta.jpg'>";
            $plakat_img = "<img src='media/Plakat-Fighter-Betta.jpg'>";
            $red_img = "<img src='media/betta_full_moon_red.jpg'>";
            $galaxy_img = "<img src='media/nemo_koi_galaxy_halfmoon_betta.jpg'>";

            //Multidimensional array

            $dreambettas = array(

                array(
                    'images' => $baby_img,
                    'name' => 'Baby Betta',
                    'unit price' => $babybettaprice,
                    'cost' => $baby_total,
                    'location' => 'Petco.com',
                    'description' => 'The baby betta is a mystery fish. You recieve a baby betta and the mystery is you do not know what color or breed until they grow.',
                ),

                array(
                    'images' => $white_img,
                    'name' => 'White Halfmoon Betta',
                    'unit price' => $whitebettaprice,
                    'cost' => $white_total,
                    'location' => 'LiveAquaria.com',
                    'description' => 'The White Halfmoon Betta offers a contrast that is very striking when placed in an aquarium with dark decorations or background.  This is my favorite type of betta.',
                ),

                array(
                    'images' => $black_img,
                    'name' => 'Black Turquoise Samurai Betta',
                    'unit price' => $blackbettaprice,
                    'cost' => $black_total,
                    'location' => 'coastgemusa.com',
                    'description' => 'This betta would look very nice in a lighter aquarium setting using turqoise rocks and other bright colored decor.',
                ),

                array(
                    'images' => $plakat_img,
                    'name' => 'Black Dragonscale Plakat Fighter Betta',
                    'unit price' => $plakatbettaprice,
                    'cost' => $plakat_total,
                    'location' => 'aquariumfishsale.com',
                    'description' => 'This betta looks old. This betta would look good with a medievil themed tank as it is a dragonscale betta.',
                ),

                array(
                    'images' => $red_img,
                    'name' => 'Red Full Moon Betta',
                    'unit price' => $redbettaprice,
                    'cost' => $red_total,
                    'location' => 'aquariumfishsale.com',
                    'description' => 'This betta is nice and full. The vivid red would look good in a darker tank setting. Black rocks and decor would fit this betta nicely.',
                ),

                array(
                    'images' => $galaxy_img,
                    'name' => 'Nemo Koi Galaxy Halfmoon Betta',
                    'unit price' => $galaxybettaprice,
                    'cost' => $galaxy_total,
                    'location' => 'kingkoigoldfish.com',
                    'description' => 'This is my dream betta. I enjoy the colors of this particular fish. If you get the colors just right, it can actually look like a galaxy.',
                )
            );
        ?>
        <main>
            <section class="home">
                <h1 class="home-h1">My Dream Betta's</h1>
                <article class="home-article">
                    <?php
                        foreach ($dreambettas as $dreambetta) {
                            echo '<h2>' . $dreambetta['name'] . '</h2>';
                            echo '<div>' . $dreambetta['images'] . '</div>';
                            echo '<h3>The average price is $' . $dreambetta['unit price'] . '.</h3>';
                            echo '<h3>The total price with tax is $' . $dreambetta['cost'] . '.</h3>';
                            echo '<h3>This betta is available at: ' . $dreambetta['location'] . '.</h3>';
                            echo '<p>' . $dreambetta['description'] . '</p>';
                            echo '<hr>';
                        }
                    ?>
                </article>
            </section>
       </main>
        <?php
            include("includes/footer.php");
        ?>
    </body>
</html>