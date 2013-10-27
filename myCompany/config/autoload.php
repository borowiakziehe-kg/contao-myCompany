<?php

/**
 * Contao Open Source CMS
 * 
 * Copyright (C) 2005-2013 Leo Feyer
 * 
 * @package MyCompany
 * @link    https://contao.org
 * @license http://www.gnu.org/licenses/lgpl-3.0.html LGPL
 */


/**
 * Register the classes
 */
ClassLoader::addClasses(array
(
	// Classes
	'MyCompany\InsertTagsCompany'      => 'system/modules/myCompany/classes/InsertTagsCompany.php',
	'MyCompany\InsertTagsMember'      => 'system/modules/myCompany/classes/InsertTagsMember.php',

    //Content elements
    'MyCompany\CE\TeamMember'   => 'system/modules/myCompany/contentElements/teammember/TeamMember.php',
    'MyCompany\CE\TeamMembers'   => 'system/modules/myCompany/contentElements/teammember/TeamMembers.php',
    'MyCompany\CE\RoutingButton'   => 'system/modules/myCompany/contentElements/googlemaps/RoutingButton.php',
    'MyCompany\CE\CeMycWrapper'   => 'system/modules/myCompany/contentElements/CeMycWrapper.php',
    'MyCompany\CE\StaticMap'   => 'system/modules/myCompany/contentElements/googlemaps/StaticMap.php',

	// Helpers
	'BoziFearuresHelper'        => 'system/modules/myCompany/helpers/BoziFearuresHelper.php',
    'MyCompany\Helper\Text'     => 'system/modules/myCompany/helpers/Text.php',
    'MyCompany\Helper\DataMaps' => 'system/modules/myCompany/helpers/DataMaps.php',

	// Models
	'MyCompany\CompanysModel'     => 'system/modules/myCompany/models/CompanysModel.php',
	'MyCompany\TeamMembersModel'     => 'system/modules/myCompany/models/TeamMembersModel.php',

	// Modules
	'MyCompany\TeamListModule' => 'system/modules/myCompany/modules/TeamListModule.php',
	'MyCompany\CompanyLogoModule' => 'system/modules/myCompany/modules/CompanyLogoModule.php',
	'MyCompany\SocialMediaLinks' => 'system/modules/myCompany/modules/SocialMediaLinks.php',
));


/**
 * Register the templates
 */
TemplateLoader::addFiles(array
(
	'be_mycConfig' => 'system/modules/myCompany/templates',
	'myc_team_list' => 'system/modules/myCompany/templates',

    'ce_mycwrapper' => 'system/modules/myCompany/templates/contentElements',
    'ce_mycTeamMember_default' => 'system/modules/myCompany/templates/contentElements/teammember',
    'ce_mycTeamMember_short' => 'system/modules/myCompany/templates/contentElements/teammember',
    'ce_mycTeamMembers_default' => 'system/modules/myCompany/templates/contentElements/teammember',
    'ce_mycRoutingButton_default' => 'system/modules/myCompany/templates/contentElements/googlemaps',
    'ce_mycStaticMap_default' => 'system/modules/myCompany/templates/contentElements/googlemaps',

    'mod_myc_wrapper' => 'system/modules/myCompany/templates/modules',
    'mycSocialMediaLinks_default' => 'system/modules/myCompany/templates/modules/partials',
    'mycCompanyLogo_default' => 'system/modules/myCompany/templates/modules/partials',
));
