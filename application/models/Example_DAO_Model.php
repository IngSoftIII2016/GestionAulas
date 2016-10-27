<?php
require_once APPPATH . '/models/orm/Base_DAO.php';

class Example_DAO_Model extends BaseDAO
{

    public function __construct()
    {
        parent::__construct('Horario');
    }

    /**
     * @param $entity
     * @return Entity
     */
    protected function is_invalid($entity)
    {
        return FALSE;
    }
}