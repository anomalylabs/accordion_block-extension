<?php

use Anomaly\Streams\Platform\Database\Migration\Migration;

/**
 * Class AnomalyExtensionAccordionBlockCreateAccordionBlockFields
 *
 * @link   http://pyrocms.com/
 * @author PyroCMS, Inc. <support@pyrocms.com>
 * @author Ryan Thompson <ryan@pyrocms.com>
 */
class AnomalyExtensionAccordionBlockCreateAccordionBlockFields extends Migration
{

    /**
     * The addon fields.
     *
     * @var array
     */
    protected $fields = [
        'title'    => 'anomaly.field_type.text',
        'content'  => 'anomaly.field_type.blocks',
        'sections' => [
            'type'   => 'anomaly.field_type.repeater',
            'config' => [
                'related' => 'accordion_block.sections',
                'add_row' => 'anomaly.extension.accordion_block::field.sections.add_row',
            ],
        ],
    ];

}
