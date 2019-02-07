<?php
/**
 * Roman plugin for Craft CMS 3.x
 *
 * Convert an integer into roman numerals and vice versa.
 *
 * @link      dominion-designs.com
 * @copyright Copyright (c) 2019 Jalen Davenport
 */

namespace jalendport\roman\variables;

use jalendport\roman\Roman;

/**
 * Roman Variable
 *
 * @author    Jalen Davenport
 * @package   Roman
 * @since     1.0.0
 */
class RomanVariable
{
	
	/**
	 * @param null $number
	 * @return string|null
	 */
	public function getRoman($number = null)
	{
    	return Roman::$plugin->romanService->getRoman($number);
    }
	
	/**
	 * @param null $romanNumerals
	 * @return string|null
	 */
	public function getNumber($romanNumerals = null)
	{
		return Roman::$plugin->romanService->getNumber($romanNumerals);
	}
	
	/**
	 * @return string|null
	 */
	public function currentYear()
	{
		return Roman::$plugin->romanService->getRoman(date('Y'));
	}
}
