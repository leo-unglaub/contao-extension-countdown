<?php

/**
 * Countdown
 * Copyright (C) 2013 2create
 *
 * @package	countdown
 * @license	LGPL
 * @link	http://www.2create.at
 */


/**
 * Hooks
 */
$GLOBALS['TL_HOOKS']['replaceInsertTags'][] = array('CountdownInsertTag', 'replaceInsertTags');

?>