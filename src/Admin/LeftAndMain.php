<?php

namespace Somar\Documentation\Admin;

use SilverStripe\Admin\LeftAndMain as AdminLeftAndMain;
use SilverStripe\ORM\FieldType\DBField;

class LeftAndMain extends AdminLeftAndMain
{
    private static $url_segment = 'documentation';
    private static $menu_title = 'Documentation';
    private static $menu_priority = -1;

    public function getEmbed()
    {
        return DBField::create_field("HTMLText", $this->config()->embed);
    }
}
