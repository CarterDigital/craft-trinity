<?php

namespace carter\trinity\fields;

use Craft;
use craft\base\FieldInterface;
use craft\base\EagerLoadingFieldInterface;
use craft\base\Field;
use craft\fields\Matrix;

class Trinity extends Field implements FieldInterface
{
    public static function displayName(): string
    {
        return Craft::t('app', 'Trinity');
    }
}