<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="style.css" media="screen" type="text/css">
    <script type="text/javascript" src="jquery-3.1.1.min.js"></script>
</head>

<body>
    <script type="text/javascript">
        $(function() {
            $('#home').click(function() {
                $('.profil').slideDown(1000);
            });
            $('#hide').click(function() {
                $('.profil').slideUp(1000);
            });
        });
    </script>
    <div class="profil">
        <div id="hide">
            Close
        </div>
        <div class="sub-profil">
            <div class="isi-sub-profil">
                <img src="kill.png" alt="" /><br> Killua Zoldyck
            </div>
        </div>
        <a href="#">
            <div class="sub-profil2">
                HOME
            </div>
        </a>
        <a href="#">
            <div class="sub-profil2">
                BIODATA
            </div>
        </a>
        <a href="#">
            <div class="sub-profil2">
                INBOX
            </div>
        </a>
        <a href="#setting">
            <div class="sub-profil2">
                SETTING >
            </div>
        </a>
        <div id="setting" class="isi">
            <a href="#">
                <div id="sub-isi">
                    Profile
                </div>
            </a>
            <a href="#">
                <div id="sub-isi">
                    Email
                </div>
            </a>
            <a href="#">
                <div id="sub-isi">
                    Password
                </div>
            </a>
            <a href="#">
                <div id="sub-isi">
                    Exit
                </div>
            </a>
        </div>
    </div>

</body>
</html>
