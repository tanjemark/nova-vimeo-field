<?php

namespace Tanjemark\Fields;

use Laravel\Nova\Fields\Field;
use Laravel\Nova\Http\Requests\NovaRequest;

class Vimeo extends Field
{
    /**
     * The field's component.
     *
     * @var string
     */
    public $component = 'vimeo';

    public function __construct(string $name, ?string $attribute = null, ?mixed $resolveCallback = null)
    {
        parent::__construct($name, $attribute, $resolveCallback);

        $this->withMeta([
            'options' => [
                'width' => 640,
                'height' => 360,
            ]
        ]);
    }

    protected function fillAttributeFromRequest(NovaRequest $request, $requestAttribute, $model, $attribute)
    {
        if ($request->exists($requestAttribute)) {
            $model->{$attribute} = self::parseVimeoUrl($request[$requestAttribute]) ?? $request[$requestAttribute];
        }
    }

    public static function parseVimeoUrl($url)
    {
        $pattern = '%^
            (?:https?://)?  # Optional scheme. Either http or https
            (?:player\.)?   # Optional player subdomain
            vimeo\.com      # Domain
            (?:/video)?     # Optional /video
            /([0-9]+)       # Video ID
        $%x';

        preg_match($pattern, $url, $matches);

        return $matches[1] ?? null;
    }
}
