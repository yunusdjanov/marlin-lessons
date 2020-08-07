<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="utf-8">
        <title>
            Подготовительные задания к курсу
        </title>
        <meta name="description" content="Chartist.html">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no, user-scalable=no, minimal-ui">
        <link id="vendorsbundle" rel="stylesheet" media="screen, print" href="css/vendors.bundle.css">
        <link id="appbundle" rel="stylesheet" media="screen, print" href="css/app.bundle.css">
        <link id="myskin" rel="stylesheet" media="screen, print" href="css/skins/skin-master.css">
        <link rel="stylesheet" media="screen, print" href="css/statistics/chartist/chartist.css">
        <link rel="stylesheet" media="screen, print" href="css/miscellaneous/lightgallery/lightgallery.bundle.css">
        <link rel="stylesheet" media="screen, print" href="css/fa-solid.css">
        <link rel="stylesheet" media="screen, print" href="css/fa-brands.css">
        <link rel="stylesheet" media="screen, print" href="css/fa-regular.css">
    </head>
    <body class="mod-bg-1 mod-nav-link ">
        <main id="js-page-content" role="main" class="page-content">
            <div class="col-md-6">
                <div id="panel-1" class="panel">
                    <div class="panel-hdr">
                        <h2>
                            Задание
                        </h2>
                        <div class="panel-toolbar">
                            <button class="btn btn-panel waves-effect waves-themed" data-action="panel-collapse" data-toggle="tooltip" data-offset="0,10" data-original-title="Collapse"></button>
                            <button class="btn btn-panel waves-effect waves-themed" data-action="panel-fullscreen" data-toggle="tooltip" data-offset="0,10" data-original-title="Fullscreen"></button>
                        </div>
                    </div>
                    
                       
                    <div class="panel-container show">
                    <?php 
                       $newArr = [
                        ["box-style" => "d-flex mt-2",
                        "title" => "My Tasks",
                        "span" => "d-inline-block ml-auto",
                        "label" => "130 / 500",
                        "bar-outer-style" => "progress progress-sm mb-3",
                        "bar-style" => "progress-bar bg-fusion-400",
                        "role" => "progressbar",
                        "style" => "width: 65%;",
                        "avalue" => 65,
                        "avaluemin" => 0,
                        "avaluemax" => 100],
                       ["box-style" => "d-flex",
                        "title" => " Transfered",
                        "span" => "d-inline-block ml-auto",
                        "label" => "440 TB",
                        "bar-outer-style" => "progress progress-sm mb-3",
                        "bar-style" => "progress-bar bg-success-500",
                        "role" => "progressbar",
                        "style" => "width: 34%;",
                        "avalue" => 34,
                        "avaluemin" => 0,
                        "avaluemax" => 100],
                        ["box-style" => "d-flex",
                        "title" => "Bugs Squashed",
                        "span" => "d-inline-block ml-auto",
                        "label" => "77%",
                        "bar-outer-style" => "progress progress-sm mb-3",
                        "bar-style" => "progress-bar bg-info-400",
                        "role" => "progressbar",
                        "style" => "width: 77%;",
                        "avalue" => 77,
                        "avaluemin" => 0,
                        "avaluemax" => 100],
                        ["box-style" => "d-flex",
                        "title" => "User Testing",
                        "span" => "d-inline-block ml-auto",
                        "label" => "7 days",
                        "bar-outer-style" => "progress progress-sm mb-g",
                        "bar-style" => "progress-bar bg-primary-300",
                        "role" => "progressbar",
                        "style" => "width: 84%;",
                        "avalue" => 84,
                        "avaluemin" => 0,
                        "avaluemax" => 100]

                       ];
                    
                    ?>
                        <div class="panel-content">
                        <?php foreach($newArr as $newValue){ ?>
                            <div class=" <?php echo $newValue["box-style"]; ?> ">
                           <p> <?php echo $newValue["title"]; ?></p>
                                <span class="<?php echo $newValue["span"]; ?>"> <p> <?php echo $newValue["label"] ?> </p> </span>
                            </div>
                            <div class="<?php echo $newValue["bar-outer-style"]; ?>">
                                <div class="<?php echo $newValue["bar-style"]; ?>" role="<?php echo $newValue["role"] ?>" style="<?php echo $newValue["style"]; ?>" aria-valuenow="<?php echo $newValue["avalue"]; ?>" aria-valuemin="$newValue<?php echo $newValue["avaluemax"];?> " aria-valuemax="<?php echo $newValue["avaluemax"]; ?>"></div>
                            </div>
                        <?php } ?>
                        </div>
                    </div>
                </div>
            </div>
        </main>
        

        <script src="js/vendors.bundle.js"></script>
        <script src="js/app.bundle.js"></script>
        <script>
            // default list filter
            initApp.listFilter($('#js_default_list'), $('#js_default_list_filter'));
            // custom response message
            initApp.listFilter($('#js-list-msg'), $('#js-list-msg-filter'));
        </script>
    </body>
</html>
