<!DOCTYPE html>
<html>
    <head>
        <title>Hello World!</title>
    </head>
    <body>
        <?php
            echo "Hello World!\n";
            $commit = getenv('DEMO_COMMIT') ?: "dev";
            echo "Build: ${commit}\n";
        ?>
    </body>
</html>
