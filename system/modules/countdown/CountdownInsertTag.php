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
 * Class CountdownInsertTag
 * Contains methods to handle the countdown insert tags
 */
class CountdownInsertTag
{
	/**
	 * Replace {{countdown}} insert tags
	 *
	 * Example:
	 * 	{{countdown::<start>::<stop>::<format>}}
	 * 	{{countdown::123456789::123456789::%y-%m-%d}}
	 *
	 * @param	string			$strTag		The unknown insert tag.
	 * @return	string|false				The value for the insert tag or false.
	 */
	public function replaceInsertTags ($strTag)
	{
		$arrChunks = trimsplit ('::', $strTag);

		// check if we have to parse the insert tag
		if ($arrChunks[0] == 'countdown')
		{
			$objCountdown = new Countdown ($arrChunks[1], $arrChunks[2]);
			return $objCountdown->getDifference ($arrChunks[3]);
		}

		// not our insert tag, so we ignore it
		return false;
	}
}
