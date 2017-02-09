<?php
require_once APPPATH . '/models/orm/BaseDAO.php';
class EdificioDAO extends BaseDAO {
	
	public function __construct() {
		parent::__construct ( 'Edificio' );
	}
	
	/**
	 *
	 * @param
	 *        	$entity
	 * @return array|bool
	 */
	protected function is_invalid($entity)
	{
		$entity->nombre = validate_not_empty($entity->nombre);
		if ($entity->nombre == NULL) {
			return format_error('Campo Faltante', 'el campo nombre es obligatorio');
		}
		return FALSE;
	}
  	protected function is_invalid_insert($entity){
           return $this->is_invalid($entity);
    }
    protected function is_invalid_update($entity){
    	return $this->is_invalid($entity);
    }
    protected function is_invalid_delete($entity){
    	return FALSE;
    }
}