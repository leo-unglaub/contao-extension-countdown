<?php

/**
 * Countdown
 * Copyright (C) 2015 Foxship Technologies
 *
 * @package	countdown
 * @license	GPL
 * @link	https://www.foxship.com
 */


/**
 * Hooks
 */
$GLOBALS['TL_HOOKS']['replaceInsertTags'][] = array ('CountdownInsertTag', 'replaceInsertTags');
