<!DOCTYPE html>
<html>
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    </head>
    <body>
        <div class="card text-center">
        <div class="card-header">
            <h5 class="card-title">Here is your result</h5>
        </div>
        <div class="card-body">
            <p class="card-text">
                <pre>
                    <?php
                        $image=$_FILES["image"]["tmp_name"];
                        move_uploaded_file($image, "image");
                        chmod("image", 0666);
                        shell_exec("tesseract image output -l eng --oem 1 --psm 3");
                        chmod("output.txt", 0666);
                        $outputfile = fopen("output.txt", 'r') or die("Unable to open file!!!");
                        //$output = fread($ouputfile, filesize("output.txt")) or die("Unable to read file!!!");
                        while($output = fgets($outputfile))
                        {
                            echo $output;
                        }
                        fclose($outputfile);
                        //echo $output;
                        //echo "Everything is done!!!";
                    ?>
                </pre>
            </p>
            <a href="http://localhost/Symbol%20Recognition%20v1/" class="btn btn-primary">Convert Another Image</a>
        </div>
        </div>
    </body>
</html>