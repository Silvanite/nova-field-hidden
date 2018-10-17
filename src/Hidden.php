<?php

namespace Silvanite\NovaFieldHidden;

use Laravel\Nova\Fields\Field;

class Hidden extends Field
{
    /**
     * The field's component.
     *
     * @var string
     */
    public $component = 'nova-field-hidden';

    /**
     * Indicates if the element should be shown on the index view.
     *
     * @var bool
     */
    public $showOnIndex = false;

    /**
     * Indicates if the element should be shown on the detail view.
     *
     * @var bool
     */
    public $showOnDetail = false;

    /**
     * Indicates if the element should be shown on the creation view.
     *
     * @var bool
     */
    public $showOnCreation = true;

    /**
     * Indicates if the element should be shown on the update view.
     *
     * @var bool
     */
    public $showOnUpdate = false;

    public function value($value)
    {
        return $this->withMeta([
            'value' => $value,
        ]);
    }
}
