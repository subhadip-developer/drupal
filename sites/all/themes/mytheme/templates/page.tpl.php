<!DOCTYPE html>
<html>
    <head>
        <title>Subhadip Sahoo</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
    </head>
    <body>
        <section class="header">
            <header>
                <div class="logo">
                    <?php if ($logo): ?>
                    <a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" rel="home" id="logo">
                      <img src="<?php print $logo; ?>" alt="<?php print t('Home'); ?>" />
                    </a>
                    <?php endif; ?>
                </div>
                <nav class="nav">
                    <ul>
                        <li><a href="#">Home</a></li>
                        <li><a href="#">About Me</a></li>
                        <li><a href="#">Skills</a></li>
                        <li><a href="#">Projects</a></li>
                        <li><a href="#">CV</a></li>
                        <li><a href="#">Contact Me</a></li>
                    </ul>
                </nav>
            </header>
        </section>
        <section class="banner"></section>
        <section class="main-content">
            <section class="main-inner">
                <div></div>
            </section>
        </section>
        <section class="footer">
            <footer>
                <div>&copy; subhadip.com 2015. All rights reserved.</div>
            </footer>
        </section>
    </body>
</html>