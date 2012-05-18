<?php

/**
 * BaseWallet
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $id
 * @property integer $mobile_id
 * @property integer $user_id
 * @property string $name
 * @property string $description
 * @property timestamp $created_at
 * @property timestamp $updated_at
 * @property User $User
 * @property Doctrine_Collection $AccountWallet
 * @property Doctrine_Collection $ReportWallet
 * 
 * @method integer             getId()            Returns the current record's "id" value
 * @method integer             getMobileId()      Returns the current record's "mobile_id" value
 * @method integer             getUserId()        Returns the current record's "user_id" value
 * @method string              getName()          Returns the current record's "name" value
 * @method string              getDescription()   Returns the current record's "description" value
 * @method timestamp           getCreatedAt()     Returns the current record's "created_at" value
 * @method timestamp           getUpdatedAt()     Returns the current record's "updated_at" value
 * @method User                getUser()          Returns the current record's "User" value
 * @method Doctrine_Collection getAccountWallet() Returns the current record's "AccountWallet" collection
 * @method Doctrine_Collection getReportWallet()  Returns the current record's "ReportWallet" collection
 * @method Wallet              setId()            Sets the current record's "id" value
 * @method Wallet              setMobileId()      Sets the current record's "mobile_id" value
 * @method Wallet              setUserId()        Sets the current record's "user_id" value
 * @method Wallet              setName()          Sets the current record's "name" value
 * @method Wallet              setDescription()   Sets the current record's "description" value
 * @method Wallet              setCreatedAt()     Sets the current record's "created_at" value
 * @method Wallet              setUpdatedAt()     Sets the current record's "updated_at" value
 * @method Wallet              setUser()          Sets the current record's "User" value
 * @method Wallet              setAccountWallet() Sets the current record's "AccountWallet" collection
 * @method Wallet              setReportWallet()  Sets the current record's "ReportWallet" collection
 * 
 * @package    rutino-server
 * @subpackage model
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseWallet extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('wallet');
        $this->hasColumn('id', 'integer', 4, array(
             'type' => 'integer',
             'primary' => true,
             'autoincrement' => true,
             'length' => 4,
             ));
        $this->hasColumn('mobile_id', 'integer', 4, array(
             'type' => 'integer',
             'notnull' => false,
             'length' => 4,
             ));
        $this->hasColumn('user_id', 'integer', 4, array(
             'type' => 'integer',
             'notnull' => true,
             'length' => 4,
             ));
        $this->hasColumn('name', 'string', 255, array(
             'type' => 'string',
             'notnull' => true,
             'length' => 255,
             ));
        $this->hasColumn('description', 'string', 4000, array(
             'type' => 'string',
             'notnull' => false,
             'length' => 4000,
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
        $this->hasOne('User', array(
             'local' => 'user_id',
             'foreign' => 'id',
             'onDelete' => 'CASCADE'));

        $this->hasMany('Account as AccountWallet', array(
             'local' => 'id',
             'foreign' => 'wallet_id'));

        $this->hasMany('Report as ReportWallet', array(
             'local' => 'id',
             'foreign' => 'wallet_id'));

        $timestampable0 = new Doctrine_Template_Timestampable();
        $this->actAs($timestampable0);
    }
}