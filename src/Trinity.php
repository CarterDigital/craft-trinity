<?php
/**
 * Trinity Plugin for Craft 3
 *
 * @link      https://www.carterdigital.com.au
 * @copyright Copyright (c) 2018 Carter.
 * @author    Dimas Putra <dimas@carterdigital.com.au>
 */
namespace carter\trinity;

use Craft;
use craft\base\Plugin;
use craft\events\RegisterComponentTypesEvent;
use craft\services\Fields;

use carter\trinity\fields\Trinity as TrinityField;

use yii\base\Event;

class Trinity extends Plugin
{
    public static $plugin;

    /**
     * Called after the plugin class is instantiated; do any one-time initialization
     * here such as hooks and events.
     */
    public function init()
    {
        parent::init();
        self::$plugin = $this;

        Event::on(
            Fields::class,
            Fields::EVENT_REGISTER_FIELD_TYPES,
            function(RegisterComponentTypesEvent $event) {
                $event->types[] = TrinityField::class;
            }
        );
    }
}