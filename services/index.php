<!DOCTYPE html>
<html lang="">
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="/style.css">
        <style>
        </style>
        <title>Home - MadzTop</title>
        <link rel="icon" type="image/x-icon" href="/assets/images/icons/favicon.ico">
        <script src="https://kit.fontawesome.com/5227b94534.js" crossorigin="anonymous"></script>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <style>
            p {
                margin-bottom: 2px;
            }
        </style>
    </head>
    <body>
        <div class="container">
            <?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/navbar.php'; ?>
            <main>
                <div class="box">
                    <h1 class="title">Services</h1>
                    <p>Collection of software I host for me and my friends</p>
                    <h2>Jellyfin Media Server</h2>
                    <p>A media server used to watch diffrent kinds of media, smiliar to services like plex and netflix.</p>
                    <a href="https://jf.madz.mov">Jellyfin</a>
                    <h2>Minecraft Server</h2>
                    <p>You already know what this is. Currently runs papermc with multiple plugins, it also has bedrock support.</p>
                    <p>More to come</p>
                </div>
            </main>
            <?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php'; ?>
        </div>
    </body>
</html>