<?php 
$loadnav = (isset($_GET['loadnav']) && $_GET['loadnav'] != '') ? $_GET['loadnav']: '';
?>
<html> 
    <head>
        <title>  API Test </title>
    </head>
    <body>
    <div>               
                        <div>
                        <ul> 
                        <li> <a href="index.php?loadnav=home"> HOME </a> </li>
                        <li> <a href="index.php?loadnav=create">Create </a> </li>
                        </ul>
                        </div>

                        <div>
                        <?php 
                        switch($loadnav){
                            case 'create':
                            require_once 'form_create.php';
                            break;
                            default:
                            require_once 'home.php';
                            break;
                        }
                        ?>
                        </div>
                        </div>
    </div>
    </body>
</html>
