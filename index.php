<?php
const ROOT_DIR = __DIR__;

// require_once __DIR__ . '/vendor/autoload.php';

if (!session_id()){
    session_start();
}

require_once __DIR__ . '/config/constants.php';
require_once PAGES_DIR . '/main.php';
// require_once __DIR__ . '/config/DB.php';


// require_once APP_DIR . '/index.php';


// if (!empty($_POST)){
//     require APP_DIR . '/form_scripts/controller.php';

// }else {
//     require_once PARTS_DIR . '/head.php';
//     require_once __DIR__ . '/config/routes.php';

//     require_once PARTS_DIR . '/footer.php';
// }

