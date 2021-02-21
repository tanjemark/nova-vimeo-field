<?php

namespace Tanjemark\Fields;

use Laravel\Nova\Fields\Field;

class Vimeo extends Field
{
    /**
     * The field's component.
     *
     * @var string
     */
    public $component = 'vimeo';

    public function __construct(string $name, ?string $attribute = null, ?callable $resolveCallback = null)
    {
        parent::__construct($name, $attribute, $resolveCallback);
        $this->withMeta([
            'options' => [
                'width' => 640,
                'height' => 360,
            ]
        ]);
    }
}
