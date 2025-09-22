<?php

namespace Somar\UserGuide\Admin;

use SilverStripe\Admin\LeftAndMain;
use SilverStripe\ORM\FieldType\DBField;

class UserGuideAdmin extends LeftAndMain
{
    private static $url_segment = 'user-guide';

    private static $menu_title = 'CMS User Guide';

    private static $menu_icon_class = 'font-icon-help-circled';

    private static $menu_priority = -10;

    private static $required_permission_codes = 'CMS_ACCESS_CMSMain';

    private static $embed_code = null;

    public function getEmbedCode()
    {
        return DBField::create_field('HTMLText', $this->config()->embed_code);
    }
}
