<?php

/**
 * Settings
 *
 * PUBLIC:                 PRIVATE
 * -----------             ------------------
 * __construct
 *
 * STATIC:
 * ------------------------------------------
 * model
 *
 */
class Settings extends CActiveRecord
{
    /** @var string */    
    protected $_table = 'settings';
    
    public function __construct()
    {
        parent::__construct();
    }

	/**
	 * Returns the static model of the specified AR class
	 */
	public static function model()
	{
		return parent::model(__CLASS__);
	}

}
