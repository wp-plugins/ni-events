<?php

/*
|--------------------------------------------------------------------------
| Autoload our application
|--------------------------------------------------------------------------
|
| Here we include all our required files for the application to run correctly.
| At the moment this is a big mess of require_once calls and needs to be 
| tidied up with an autoloader function
|
*/

define( 'NI_EVENTS_PLUGIN_DIR', plugin_dir_path( __FILE__ ) );
define( 'NI_EVENTS_FOLDER', 'ni-events' );

require_once NI_EVENTS_PLUGIN_DIR . 'library/' . NI_EVENTS_FOLDER . '/Registry.php';

require_once NI_EVENTS_PLUGIN_DIR . 'config.php';

require_once NI_EVENTS_PLUGIN_DIR . 'library/' . NI_EVENTS_FOLDER . '/NI_Events.php';

require_once NI_EVENTS_PLUGIN_DIR . 'library/' . NI_EVENTS_FOLDER . '/View.php';

require_once NI_EVENTS_PLUGIN_DIR . 'library/' . NI_EVENTS_FOLDER . '/PostType.php';

require_once NI_EVENTS_PLUGIN_DIR . 'library/' . NI_EVENTS_FOLDER . '/PostTypeFactory.php';

require_once NI_EVENTS_PLUGIN_DIR . 'library/' . NI_EVENTS_FOLDER . '/Shortcodes.php';

require_once NI_EVENTS_PLUGIN_DIR . 'library/' . NI_EVENTS_FOLDER . '/MetaBox.php';

require_once NI_EVENTS_PLUGIN_DIR . 'library/' . NI_EVENTS_FOLDER . '/MetaBoxFactory.php';

require_once NI_EVENTS_PLUGIN_DIR . 'library/' . NI_EVENTS_FOLDER . '/MetaBoxes/MetaBoxBase.php';

require_once NI_EVENTS_PLUGIN_DIR . 'library/' . NI_EVENTS_FOLDER . '/MetaBoxes/MetaBoxInterface.php';

require_once NI_EVENTS_PLUGIN_DIR . 'library/' . NI_EVENTS_FOLDER . '/MetaBoxes/MetaBoxLocation.php';

require_once NI_EVENTS_PLUGIN_DIR . 'library/' . NI_EVENTS_FOLDER . '/MetaBoxes/MetaBoxDateFrom.php';

require_once NI_EVENTS_PLUGIN_DIR . 'library/' . NI_EVENTS_FOLDER . '/MetaBoxes/MetaBoxDateTo.php';

require_once NI_EVENTS_PLUGIN_DIR . 'library/' . NI_EVENTS_FOLDER . '/MetaBoxes/MetaBoxMap.php';

require_once NI_EVENTS_PLUGIN_DIR . 'controllers/BaseController.php';

require_once NI_EVENTS_PLUGIN_DIR . 'controllers/GlobalController.php';

require_once NI_EVENTS_PLUGIN_DIR . 'controllers/InstallController.php';

require_once NI_EVENTS_PLUGIN_DIR . 'controllers/UpgradeController.php';

require_once NI_EVENTS_PLUGIN_DIR . 'controllers/AdminController.php';

require_once NI_EVENTS_PLUGIN_DIR . 'models/BaseModel.php';
