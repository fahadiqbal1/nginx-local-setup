<?php
    $sites = json_decode(file_get_contents('sites.json'), true);
    $resouces = json_decode(file_get_contents('resources.json'), true);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Local Development</title>
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css">
</head>
<body>
   <div class="container">
        <div class="row">
            <div class="col-md-3">
                <h2>Current Projects</h2>
                <?php
                    foreach($sites as $site => $location)
                    {
                        printf("<li><a href='http://%s'>%s</a></li>",$location,$site);
                    }
                ?>
            </div>
            <div class="col-md-6">
                <h2>Adding New Project</h2>
            </div>
            <div class="col-md-3">
                <h2>Resources</h2>
                <?php
                    foreach($resouces as $site => $location)
                    {
                        printf("<li><a href='http://%s'>%s</a></li>",$location,$site);
                    }
                ?>
            </div>
        </div>
    </div>
</body>
</html>