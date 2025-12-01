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
    </head>
    <body>
        <div class="container">
            <?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/navbar.php'; ?>
            <main>
                <div class="box">
                    <h1 class="title">Projects</h1>
                    <p>Various Projects and such</p>
                    <ul class="cards">
                        <li>
                            <a class="card link" href="https://madzvm.party">
							<img class="card-image" src="/assets/images/madzvm.png">
							<div class="card-body">
								<h3 class="card-heading">MadzVM.party</h3>
								<p>
                                    Take turns controlling virtual computers with people! Built on CollabVM
								</p>
							</div>
						    </a>
                        </li>
                    </ul>
                </div>
            </main>
        </div>
    </body>
</html>