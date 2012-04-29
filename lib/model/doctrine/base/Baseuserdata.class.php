<?php

/**
 * Baseuserdata
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $id
 * @property integer $user_id
 * @property string $information
 * @property user $user
 * 
 * @method integer  getId()          Returns the current record's "id" value
 * @method integer  getUserId()      Returns the current record's "user_id" value
 * @method string   getInformation() Returns the current record's "information" value
 * @method user     getUser()        Returns the current record's "user" value
 * @method userdata setId()          Sets the current record's "id" value
 * @method userdata setUserId()      Sets the current record's "user_id" value
 * @method userdata setInformation() Sets the current record's "information" value
 * @method userdata setUser()        Sets the current record's "user" value
 * 
 * @package    rutino-server
 * @subpackage model
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class Baseuserdata extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('userdata');
        $this->hasColumn('id', 'integer', 4, array(
             'type' => 'integer',
             'primary' => true,
             'autoincrement' => true,
             'length' => 4,
             ));
        $this->hasColumn('user_id', 'integer', 4, array(
             'type' => 'integer',
             'notnull' => true,
             'length' => 4,
             ));
        $this->hasColumn('information', 'string', 4000, array(
             'type' => 'string',
             'notnull' => true,
             'length' => 4000,
             ));
    }

    public function setUp()
    {
        parent::setUp();
        $this->hasOne('user', array(
             'local' => 'user_id',
             'foreign' => 'id',
             'onDelete' => 'CASCADE'));

        $timestampable0 = new Doctrine_Template_Timestampable();
        $this->actAs($timestampable0);
    }
}