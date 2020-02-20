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
                         <li> <a href="index.php?loadnav=read">Display Producs </a> </li>
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
