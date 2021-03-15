<!DOCTYPE html>
    <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Project Contact</title>
            <link rel="stylesheet" href="css/styles.css">
        </head>
    <body>
        <?php
            include("includes/header-nav.php");
        ?>
        <main>
            <section class="home">
                <h1 class="home-h1">Let me know what your favorite betta is!</h1>
                <article class="home-article">
                    <section class="form">
                        <article>
                            <div id="message">
                                <div class="head">
                                    <h2>Contact Form</h2>
                                </div>
                                <form action="contact_form_code.php" id="form" method="post" name="form">
                                    <input name="vname" placeholder="Your Name" type="text" value="">
                                    <input name="vemail" placeholder="Your Email" type="text" value="">
                                    <input name="sub" placeholder="Subject" type="text" value="">
                                    <label class="form-label">Message</label>
                                    <textarea name="msg" placeholder="Type your message here"></textarea>
                                    <input id="send" name=subject type="submit" value="Send Feedback">
                                </form>
                                <h3>
                                    <?php
                                        include "contact_form_code.php";
                                    ?>
                                </h3>
                            </div>
                        </article>
                    </section>
                </article>
            </section>
        </main>
        <?php
            include("includes/footer.php");
        ?>
    </body>
</html>