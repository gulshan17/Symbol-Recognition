<!DOCTYPE html>
<html>
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <link rel="stylesheet" href="index.css" type="text/css">
        <link rel="stylesheet" href="header.css" type="text/css">

        <!--Include JQuery-->
        <script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.3.1.min.js"></script>

        <!-- <script src="index.js"></script> -->
    </head>

    <body>
        <?php
            require_once "header.html";
        ?>
        <section>
            <form method="POST" action="serverside.php" enctype="multipart/form-data">
                <input type="file" name="image" id="imagefile">
                <div id="warning"></div>
                <input type="submit" id="submit" class="btn btn-primary">
            </form>
        </section>

    </body>

</html>