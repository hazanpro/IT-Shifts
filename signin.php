<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="description" content="IT-Shifts management of TowerJazz">
        <meta name="keywords" content="IT,Shifts,TowerJazz">
        <meta name="author" content="Idan Hazan">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
        <link rel="manifest" href="manifest.json">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css">
        <link rel="stylesheet" href="css/signin.css">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.slim.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.15.0/umd/popper.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/moment.min.js"></script>
        <script>
            $(document).ready(function()
            {
                $('[data-toggle="tooltip"]').tooltip();
                $('input').attr('title', '');
            });

            function OutlookWebApp() { window.open('https://tslmail.towersemi.com/owa/'); }
        </script>
        <title>IT-Shifts</title>
    </head>
    <body class="text-center">
        <?php
            session_start();

            if (isset($_POST['Username']) && $_POST['Username'] == 'System')
            {
                $_SESSION['Username'] = $_POST['Username'];
                header('Location: index.php');
            }
        ?>
        <form class="form-signin" method="post">
            <img src="img/logo.png" width="100%" height="100%">
            <div class="input-group mt-2 mb-2">
                <div class="input-group-prepend">
                    <span class="input-group-text" data-toggle="tooltip" data-placement="left" title="Active Directory">
                        <i class="fas fa-user"></i>
                    </span>
                </div>
                <input type="text" class="form-control" placeholder="Username" required>
            </div>
            <div class="input-group mt-2 mb-2">
                <div class="input-group-prepend">
                    <span class="input-group-text" data-toggle="tooltip" data-placement="left" title="Badge ID">
                        <i class="fas fa-unlock-alt"></i>
                    </span>
                </div>
                <input type="password" class="form-control" placeholder="Password" required>
                <div class="input-group-append">
                    <button class="input-group-text" data-toggle="tooltip" data-placement="right" title="Password Recovery" onclick="OutlookWebApp();">
                        <i class="fas fa-envelope-open-text"></i>
                    </button>
                </div>
            </div>
            <p class="text-muted mt-3 mb-3">Your initial details are taken from <a href="http://whoisweb/whois/Home/Search?text=91700" target="_blank" class="alert-link">Whois</a>.</p>
            <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
            <p class="text-muted mt-5">Developed by Idan Hazan</p>
        </form>
    </body>
</html>
