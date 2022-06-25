<?php
// Include database, session, general info
require_once 'core/init.php';
// Include header
require_once 'includes/header.php';
if ($user){
    echo '<div id="custom-container">';
    require_once 'includes/left.php';
    require_once 'includes/main.php';
    require_once 'includes/right.php';
    echo '</div>';
}
else{
    require_once './templates/signin-up-form.php';        
}
require_once 'includes/footer.php';