<?php
/**
 * Roman plugin for Craft CMS 3.x
 *
 * Convert an integer into roman numerals and vice versa.
 *
 * @link      dominion-designs.com
 * @copyright Copyright (c) 2019 Jalen Davenport
 */

namespace jalendport\roman\services;

use craft\base\Component;

/**
 * RomanService Service
 *
 * @author    Jalen Davenport
 * @package   Roman
 * @since     1.0.0
 */
class RomanService extends Component
{
	
	/**
	 * @var string
	 */
	private $result = '';
	
	/**
	 * @var array
	 */
	public $romanNumerals = [
		'M'  => 1000,
		'CM' => 900,
		'D'  => 500,
		'CD' => 400,
		'C'  => 100,
		'XC' => 90,
		'L'  => 50,
		'XL' => 40,
		'X'  => 10,
		'IX' => 9,
		'V'  => 5,
		'IV' => 4,
		'I'  => 1
	];
	
	/**
	 * @param null $number
	 * @return string|null
	 */
	public function getRoman($number = null)
    {
		$this->result = null;
		foreach($this->romanNumerals as $key => $value)
		{
			$matches = (int)($number / $value);
			$this->result .= str_repeat($key, $matches);
			$number %= $value;
		}
		return $this->result;
    }
    
	/**
	 * @param null $roman
	 * @return string|null
	 */
	public function getNumber($roman = null)
	{
		$this->result = null;
		foreach($this->romanNumerals as $key => $value)
		{
			while (strpos($roman, $key) === 0)
			{
				$this->result += $value;
				$roman = substr($roman, strlen($key));
			}
		}
		return $this->result;
	}
	
}
