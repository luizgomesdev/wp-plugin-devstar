<?php

/**
 *  @package DevstarPlugin
 */

namespace Inc;

final class Init
{
    /**
     * Store all the classes inside an array
     * @return array Full list of classes
     */
    public static function get_services()
    {
        return [
            Views\Admin::class,
            Base\Enqueue::class,
            Base\SettingsLinks::class
        ];
    }

    /**
     * Loop through the classes, initialize them,
     * and call the register() method if it exists
     * @return
     */
    public static function register_services()
    {
        foreach (self::get_services() as $class) {
            $service = self::instantiate($class);
            if (method_exists($service, 'register')) {
                $service->register();
            }
        }
    }

    /**
     * Initialize the class
     * @param  class $class    class from the services array
     * @return class instance  new instance of the class
     */
    private static function instantiate($class)
    {
        return new $class();
    }
}

// use Inc\Activate;
// use Inc\Deactivate;
// use Inc\View\Admin;

// if (!class_exists('DevstarPlugin')) {
//   class DevstarPlugin
//   {
//

//     function __construct()
//     {
//       DevstarPlugin::$plugin = plugin_basename(__FILE__);
//     }
//     static function register()
//     {
//



//
//     }




//     protected function create_post_type()
//     {
//       add_action('init', array($this, 'custom_post_type'));
//     }


//     public function activate()
//     {
//       Activate::activate();
//     }
//     public function uninstall()
//     {
//       // Delete a CPT
//       // Delete all the plugin data from the DB
//     }

//     function custom_post_type()
//     {
//       register_post_type('book', array('public' => true, 'label' => 'Books'));
//     }



//     private function print_stuff()
//     {
//       echo 'Test';
//     }
//   }


//   $devstarPlugin = new DevstarPlugin();
//   DevstarPlugin::register();


//   // Activation
//   register_activation_hook(__FILE__, array($devstarPlugin, 'activate'));
//   // Deactivation
//   register_deactivation_hook(__FILE__, array('Deactivate', 'deactivate'));
// }
