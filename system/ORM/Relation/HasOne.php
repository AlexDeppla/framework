<?php
/**
 * HasOne
 *
 * @author Virgil-Adrian Teaca - virgil@giulianaeassociati.com
 * @version 3.0
 * @date January 13th, 2016
 */

namespace Nova\ORM\Relation;

use Nova\ORM\Model;
use Nova\ORM\Relation;


class HasOne extends Relation
{
    protected $foreignKey;
    protected $primaryKey;


    public function __construct($className, Model $model, $foreignKey)
    {
        parent::__construct($className);

        // The foreignKey is associated to host Model.
        $this->foreignKey = $foreignKey;

        // The primaryKey is associated to this Model.
        $this->primaryKey = $model->getPrimaryKey();
    }

    public function type()
    {
        return 'hasOne';
    }

    public function get()
    {
        return $this->model->findBy($this->foreignKey, $this->primaryKey);
    }
}