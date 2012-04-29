<?php

/**
 * Baseuser
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $id
 * @property string $user
 * @property string $password
 * @property string $hash
 * @property string $email
 * @property timestamp $created_at
 * @property timestamp $updated_at
 * @property Doctrine_Collection $DataUser
 * 
 * @method integer             getId()         Returns the current record's "id" value
 * @method string              getUser()       Returns the current record's "user" value
 * @method string              getPassword()   Returns the current record's "password" value
 * @method string              getHash()       Returns the current record's "hash" value
 * @method string              getEmail()      Returns the current record's "email" value
 * @method timestamp           getCreatedAt()  Returns the current record's "created_at" value
 * @method timestamp           getUpdatedAt()  Returns the current record's "updated_at" value
 * @method Doctrine_Collection getDataUser()   Returns the current record's "DataUser" collection
 * @method user                setId()         Sets the current record's "id" value
 * @method user                setUser()       Sets the current record's "user" value
 * @method user                setPassword()   Sets the current record's "password" value
 * @method user                setHash()       Sets the current record's "hash" value
 * @method user                setEmail()      Sets the current record's "email" value
 * @method user                setCreatedAt()  Sets the current record's "created_at" value
 * @method user                setUpdatedAt()  Sets the current record's "updated_at" value
 * @method user                setDataUser()   Sets the current record's "DataUser" collection
 * 
 * @package    rutino-server
 * @subpackage model
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class Baseuser extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('user');
        $this->hasColumn('id', 'integer', 4, array(
             'type' => 'integer',
             'primary' => true,
             'autoincrement' => true,
             'length' => 4,
             ));
        $this->hasColumn('user', 'string', 255, array(
             'type' => 'string',
             'notnull' => true,
             'length' => 255,
             ));
        $this->hasColumn('password', 'string', 255, array(
             'type' => 'string',
             'notnull' => true,
             'length' => 255,
             ));
        $this->hasColumn('hash', 'string', 255, array(
             'type' => 'string',
             'notnull' => true,
             'length' => 255,
             ));
        $this->hasColumn('email', 'string', 255, array(
             'type' => 'string',
             'notnull' => true,
             'length' => 255,
             ));
        $this->hasColumn('created_at', 'timestamp', null, array(
             'type' => 'timestamp',
             'notnull' => true,
             ));
        $this->hasColumn('updated_at', 'timestamp', null, array(
             'type' => 'timestamp',
             'notnull' => true,
             ));
    }

    public function setUp()
    {
        parent::setUp();
        $this->hasMany('userdata as DataUser', array(
             'local' => 'id',
             'foreign' => 'user_id'));

        $timestampable0 = new Doctrine_Template_Timestampable();
        $this->actAs($timestampable0);
    }
}