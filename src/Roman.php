<?php
/**
 * Roman plugin for Craft CMS 4.x
 *
 * Convert an integer into roman numerals and vice versa.
 *
 * @link      https://jalendport.com
 * @copyright Copyright (c) 2019 Jalen Davenport
 */

namespace jalendport\roman;

use craft\base\Plugin;
use craft\web\twig\variables\CraftVariable;
use jalendport\roman\services\RomanService;
use jalendport\roman\variables\RomanVariable;
use yii\base\Event;

/**
 * Roman
 *
 * @author    Jalen Davenport
 * @package   Roman
 * @since     1.0.0
 *
 * @property  RomanService $romanService
 */
class Roman extends Plugin
{
    /**
     * @var Roman
     */
    public static Roman $plugin;

	/**
	 * Init method
	 */
	public function init(): void
	{
        parent::init();
        self::$plugin = $this;

        Event::on(
            CraftVariable::class,
            CraftVariable::EVENT_INIT,
            function (Event $event) {
                /** @var CraftVariable $variable */
                $variable = $event->sender;
                $variable->set('roman', RomanVariable::class);
            }
        );
    }

}
