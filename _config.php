<?php

use Somar\UserGuide\UserGuideAdmin;
use SilverStripe\Admin\CMSMenu;

# Remove user guide admin menu item
CMSMenu::remove_menu_class(UserGuideAdmin::class);
