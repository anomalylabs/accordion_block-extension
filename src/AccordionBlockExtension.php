<?php namespace Anomaly\AccordionBlockExtension;

use Anomaly\BlocksModule\Block\BlockExtension;
use Anomaly\AccordionBlockExtension\Block\BlockModel;

/**
 * Class AccordionBlockExtension
 *
 * @link   http://pyrocms.com/
 * @author PyroCMS, Inc. <support@pyrocms.com>
 * @author Ryan Thompson <ryan@pyrocms.com>
 */
class AccordionBlockExtension extends BlockExtension
{
    
    /**
     * The block category.
     *
     * @var string
     */
    protected $category = 'layout';

    /**
     * This extension provides a FAQs
     * block for the blocks module.
     *
     * @var string
     */
    protected $provides = 'anomaly.module.blocks::block.accordion';

    /**
     * The block view.
     *
     * @var string
     */
    protected $view = 'anomaly.extension.accordion_block::content';

    /**
     * The block model.
     *
     * @var string
     */
    protected $model = BlockModel::class;

}
