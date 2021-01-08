<?php

/**
 * @package DevstarPlugin
 */

namespace Inc\Base;

class Activate
{
    public static function activate()
    {
        // Generated a CPT

        echo 'Test';
        // Flush rewrite rules
        flush_rewrite_rules();
    }
}
