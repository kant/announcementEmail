<?php

/**
 * @defgroup plugins_generic_announcementEmail announcementEmail Plugin
 */
 
/**
 * @file plugins/generic/announcementEmail/index.php
 *
 * Copyright (c) 2014-2019 Simon Fraser University
 * Copyright (c) 2003-2019 John Willinsky
 * Distributed under the GNU GPL v2. For full terms see the file docs/COPYING.
 *
 * @ingroup plugins_generic_announcementEmail
 * @brief Wrapper for announcementEmail plugin.
 *
 */

require_once('AnnouncementEmailPlugin.inc.php');

return new AnnouncementEmailPlugin();

?>
