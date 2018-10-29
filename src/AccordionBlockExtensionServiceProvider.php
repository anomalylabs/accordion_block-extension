<?php namespace Anomaly\AccordionBlockExtension;

use Anomaly\AccordionBlockExtension\Block\BlockModel;
use Anomaly\AccordionBlockExtension\Accordion\AccordionModel;
use Anomaly\Streams\Platform\Addon\AddonServiceProvider;
use Anomaly\Streams\Platform\Model\AccordionBlock\AccordionBlockBlocksEntryModel;
use Anomaly\Streams\Platform\Model\AccordionBlock\AccordionBlockAccordionEntryModel;

/**
 * Class AccordionBlockExtensionServiceProvider
 *
 * @link   http://pyrocms.com/
 * @author PyroCMS, Inc. <support@pyrocms.com>
 * @author Ryan Thompson <ryan@pyrocms.com>
 */
class AccordionBlockExtensionServiceProvider extends AddonServiceProvider
{

    /**
     * The addon class bindings.
     *
     * @type array|null
     */
    protected $bindings = [
        AccordionBlockBlocksEntryModel::class => BlockModel::class,
        AccordionBlockAccordionEntryModel::class   => AccordionModel::class,
    ];

}
