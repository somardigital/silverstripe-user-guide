<?php

namespace Somar\UserGuide\Admin;

use SilverStripe\Admin\LeftAndMain;
use SilverStripe\ORM\FieldType\DBField;

class UserGuideAdmin extends LeftAndMain
{
    private static $url_segment = 'user-guide';

    private static $menu_title = 'User Guide';

    private static $menu_priority = -1;

    /**
     * The embed code for the user guide
     *
     * @config
     * @var array
     */
    private static $embed_code = null;

    public function getEmbedCode()
    {
        return DBField::create_field('HTMLText', $this->config()->embed_code);
    }
}
