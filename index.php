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
                        <li> <a href="index.php?loadnav=home"> Home </a> </li>
                        <li> <a href="index.php?loadnav=create">Create </a> </li>
                        <li> <a href="index.php?loadnav=read">Display Products </a> </li>
                        <li> <a href="index.php?loadnav=category">Display Categories </a> </li>
                        </ul>
                        </div>

                        <div>
                        <?php 
                        switch($loadnav){
                            case 'create':
                            require_once 'form_create.php';
                            break;
                            case 'read':
                            require_once 'readall.php';
                            break;
                            case:'category':
                            require_once 'category.php';
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
