<?php
namespace Muffin\Tags\Model\Table;

use Cake\ORM\Table;

/**
 * TaggedTable
 */
class TaggedTable extends Table
{

    /**
     * Initialize table config.
     *
     * @param array $config Config options
     * @return void
     */
    public function initialize(array $config)
    {
        $this->setTable('tagged');
        $this->addBehavior('Timestamp');
    }
}
