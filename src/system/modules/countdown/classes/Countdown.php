<?php

/**
 * Class Countdown
 * Contains methods to handle countdowns
 */
class Countdown extends System
{
	/**
	 * The start of the countdown
	 * @var DateTime
	 */
	public $objCountdownStart;


	/**
	 * The end of the countdown.
	 * @var DateTime
	 */
	public $objCountdownEnd;


	/**
	 * Create the instance and set the start and end values
	 *
	 * @param	DateTime	$objCountdownStart	The beginning of the countdown.
	 * @param	DateTime	$objCountdownEnd	The end of the countdown.
	 * @return	void
	 */
	public function __construct ($intCountdownStart, $intCountdownEnd)
	{
		$this->objCountdownStart = new DateTime ('@' . (int) $intCountdownStart);
		$this->objCountdownEnd = new DateTime ('@' . (int) $intCountdownEnd);
	}


	/**
	 * Get the difference between the two countdown values
	 *
	 * @param	string	$strFormat	The format of the return value.
	 * @return	string				The formated difference between the dates.
	 */
	public function getDifference ($strFormat)
	{
		$objInterval = $this->objCountdownStart->diff ($this->objCountdownEnd);
		return $objInterval->format ($strFormat);
	}
}
