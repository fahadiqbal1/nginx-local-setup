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
    <script src="//code.jquery.com/jquery-2.1.3.min.js"></script>
    <script src="assets/main.js"></script>
</head>
<body>
   <div class="container">
        <div class="row">
            <div class="col-md-3">
                <h2>Current Projects</h2>
                <?php OutputLinks($sites); ?>
                <h2>Resources</h2>
                <?php OutputLinks($resouces); ?>
            </div>
            <div class="col-md-9">
                <h2>Adding New Project</h2>
                <section>
                   Name of New Project: <input type="text" name="project" id="project-input">
                   <button class="btn btn-xs" id="btn-helpers">Toggle Help Text</button><br>
                    <ol>
                        <li>
                            <div class="step">
                                <code>mkdir <?=PROJECTS_DIR ?><span class="project"></span></code> <br>
                                <small class="helper">Make the project directory</small>
                            </div>
                        </li>
                        <li>
                            <div class="step">
                                <code>sudo chown -R <?=USER ?>:www-data <?=PROJECTS_DIR ?><span class="project"></span></code><br>
                                <small class="helper">Assign ownership of the new directory</small>
                            </div>
                        </li>
                        <li>
                            <div class="step">
                                <code>sudo chmod 755 <?=PROJECTS_DIR ?><span class="project"></span></code><br>
                                <small class="helper">Give read permissions to the directory</small>
                            </div>
                        </li>
                        <hr>
                        <li>
                            <div class="step">
                                <code>sudo cp /etc/nginx/sites-available/blog.dev /etc/nginx/sites-available/<span class="project"></span>.dev</code><br>
                                <small class="helper">Copy Nginx server block</small>
                            </div>
                        </li>
                        <li>
                            <div class="step">
                                <code>sudo <?=EDITOR?> /etc/nginx/sites-available/<span class="project"></span>.dev</code><br>
                                <small class="helper">Open the newly created server block for editing</small>
                            </div>
                        </li>
                        <li>
                            <div class="step">
                                <code>Change root folder to <?=PROJECTS_DIR ?><span class="project"></span></code><br>
                                <small class="helper">Change the root of the server block to the working directory</small>
                            </div>
                        </li>
                        <li>
                            <div class="step">
                                <code>Change server_name to <span class="project"></span>.dev</code><br>
                                <small class="helper">Change the server name to the project name</small>
                            </div>
                        </li>
                        <hr>
                        <li>
                            <div class="step">
                                <code>sudo ln -s /etc/nginx/sites-available/<span class="project"></span>.dev /etc/nginx/sites-enabled/<span class="project"></span>.dev</code><br>
                                <small class="helper">Create a link to Nginx enabled sites to activate the site</small>
                            </div>
                        </li>
                        <li>
                            <div class="step">
                                <code>sudo service nginx restart</code><br>
                                <small class="helper">Restart Nginx to allow for all of the changed to take effect</small>
                            </div>
                        </li>
                        <li>
                            <div class="step">
                                <code>sudo -- sh -c "echo 127.0.0.1 <span class="project"></span>.dev >> /etc/hosts"</code><br>
                                <small class="helper">Add the new project to the hosts</small>
                            </div>
                        </li>
                    </ol>
                </section>
            </div>
        </div>
    </div>
</body>
</html>