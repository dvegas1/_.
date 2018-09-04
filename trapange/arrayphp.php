<?php
    $contents = "EL ARRAY DEL FTP";
?>
<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Listado</title>
    </head>
    <body>
        <ul>
            <?php
                foreach($contents as $e) {
                    foreach($e as $file) {
                        echo "<li class='download'>" . $file["name"] . "</li>";
                    }
                }
            ?>
        </ul>
        <script src="http://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
        <script>
            $(function() {
                $(".download").click(function() {
                    var file = $(this).html();
                    $.ajax({
                        method: "POST",
                        url: "download.php",
                        data: {
                            file: file
                        }
                    });
                });
            });
        </script>
    </body>
</html>