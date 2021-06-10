<!DOCTYPE html>
<html lang='fr'>
	<head>
        <meta charset='UTF-8'>
        <meta name='viewport' content='width=device-width, initial-scale=1.0'>
        <title>PHP ex 4.2 fonction</title>
    </head>
    <body >
        <p>
            <?php
            function functionString( $inputParam)
            {
                return $inputParam;
            }
            echo functionString("My string parameter");
            ?>
       </p>
    </body>
</html>