<?php
    include_once('config.php');
    $sites = json_decode(file_get_contents(PROJECTS_JSON), true);
    $resouces = json_decode(file_get_contents(RESOURCE_JSON), true);
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
                <?php OutputLinks($sites); ?>
            </div>
            <div class="col-md-6">
                <h2>Adding New Project</h2>
            </div>
            <div class="col-md-3">
                <h2>Resources</h2>
                <?php OutputLinks($resouces); ?>
            </div>
        </div>
    </div>
</body>
</html>