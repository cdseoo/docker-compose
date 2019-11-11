<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>LAMP STACK</title>
        <link rel="stylesheet" href="/assets/css/bulma.min.css">
    </head>
    <body>
        <section class="hero is-medium is-info is-bold">
            <div class="hero-body">
                <div class="container has-text-centered">
                    <h1 class="title">
                        LNMP STACK
                    </h1>
                    <h2 class="subtitle">
                        Your local development environment
                    </h2>
                </div>
            </div>
        </section>
        <section class="section">
            <div class="container">
                <div class="columns">
                    <div class="column">
                        <h3 class="title is-3 has-text-centered">Environment</h3>
                        <hr>
                        <div class="content">
                            <ul>
                                
                                <li>PHP <?= phpversion(); ?></li>
                                <li>
                                    <?php
                                    $link = new mysqli("mysql", "root", "123456", null);
                                    /* check connection */
                                    if ($link->connect_errno) {
                                        printf("MySQL connecttion failed: %s", $link->connect_error);
                                    } else {
                                        /* print server version */
                                        printf("MySQL Server %s", mysqli_get_server_info($link));
                                    }
                                    /* close connection */
                                    mysqli_close($link);
                                    ?>
                                </li>
                                <li><?php print $_SERVER{'SERVER_SOFTWARE'}; ?></li>
                            </ul>
                        </div>
                    </div>
                    <div class="column">
                        <h3 class="title is-3 has-text-centered">Quick Links</h3>
                        <hr>
                        <div class="content">
                            <ul>
                                <li><a href="/phpinfo.php">phpinfo()</a></li>
                                <li><a href="//<?php print $_SERVER{'SERVER_NAME'}; ?>:8080">phpMyAdmin</a></li>
                                <li><a href="/db.php">Test DB</a></li>
                                <!-- <li><a href="/redis.php">Test Redis</a></li> -->
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </body>
</html>