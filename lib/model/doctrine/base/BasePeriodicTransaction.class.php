<?php

/**
 * BasePeriodicTransaction
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $id
 * @property string $global_id
 * @property integer $account_id
 * @property integer $currency_id
 * @property string $name
 * @property string $description
 * @property float $amount
 * @property timestamp $date
 * @property blob $picture
 * @property string $geo
 * @property integer $periodicity
 * @property timestamp $created_at
 * @property timestamp $updated_at
 * @property Account $Account
 * @property Currency $Currency
 * 
 * @method integer             getId()          Returns the current record's "id" value
 * @method string              getGlobalId()    Returns the current record's "global_id" value
 * @method integer             getAccountId()   Returns the current record's "account_id" value
 * @method integer             getCurrencyId()  Returns the current record's "currency_id" value
 * @method string              getName()        Returns the current record's "name" value
 * @method string              getDescription() Returns the current record's "description" value
 * @method float               getAmount()      Returns the current record's "amount" value
 * @method timestamp           getDate()        Returns the current record's "date" value
 * @method blob                getPicture()     Returns the current record's "picture" value
 * @method string              getGeo()         Returns the current record's "geo" value
 * @method integer             getPeriodicity() Returns the current record's "periodicity" value
 * @method timestamp           getCreatedAt()   Returns the current record's "created_at" value
 * @method timestamp           getUpdatedAt()   Returns the current record's "updated_at" value
 * @method Account             getAccount()     Returns the current record's "Account" value
 * @method Currency            getCurrency()    Returns the current record's "Currency" value
 * @method PeriodicTransaction setId()          Sets the current record's "id" value
 * @method PeriodicTransaction setGlobalId()    Sets the current record's "global_id" value
 * @method PeriodicTransaction setAccountId()   Sets the current record's "account_id" value
 * @method PeriodicTransaction setCurrencyId()  Sets the current record's "currency_id" value
 * @method PeriodicTransaction setName()        Sets the current record's "name" value
 * @method PeriodicTransaction setDescription() Sets the current record's "description" value
 * @method PeriodicTransaction setAmount()      Sets the current record's "amount" value
 * @method PeriodicTransaction setDate()        Sets the current record's "date" value
 * @method PeriodicTransaction setPicture()     Sets the current record's "picture" value
 * @method PeriodicTransaction setGeo()         Sets the current record's "geo" value
 * @method PeriodicTransaction setPeriodicity() Sets the current record's "periodicity" value
 * @method PeriodicTransaction setCreatedAt()   Sets the current record's "created_at" value
 * @method PeriodicTransaction setUpdatedAt()   Sets the current record's "updated_at" value
 * @method PeriodicTransaction setAccount()     Sets the current record's "Account" value
 * @method PeriodicTransaction setCurrency()    Sets the current record's "Currency" value
 * 
 * @package    rutino-server
 * @subpackage model
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BasePeriodicTransaction extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('periodic_transaction');
        $this->hasColumn('id', 'integer', 20, array(
             'type' => 'integer',
             'primary' => true,
             'autoincrement' => true,
             'length' => 20,
             ));
        $this->hasColumn('global_id', 'string', 255, array(
             'type' => 'string',
             'notnull' => true,
             'length' => 255,
             ));
        $this->hasColumn('account_id', 'integer', 20, array(
             'type' => 'integer',
             'notnull' => true,
             'length' => 20,
             ));
        $this->hasColumn('currency_id', 'integer', 20, array(
             'type' => 'integer',
             'notnull' => true,
             'length' => 20,
             ));
        $this->hasColumn('name', 'string', 4000, array(
             'type' => 'string',
             'length' => 4000,
             ));
        $this->hasColumn('description', 'string', 4000, array(
             'type' => 'string',
             'length' => 4000,
             ));
        $this->hasColumn('amount', 'float', null, array(
             'type' => 'float',
             'notnull' => true,
             ));
        $this->hasColumn('date', 'timestamp', null, array(
             'type' => 'timestamp',
             'notnull' => true,
             ));
        $this->hasColumn('picture', 'blob', null, array(
             'type' => 'blob',
             'notnull' => false,
             ));
        $this->hasColumn('geo', 'string', 4000, array(
             'type' => 'string',
             'notnull' => false,
             'length' => 4000,
             ));
        $this->hasColumn('periodicity', 'integer', 4, array(
             'type' => 'integer',
             'notnull' => true,
             'length' => 4,
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
        $this->hasOne('Account', array(
             'local' => 'account_id',
             'foreign' => 'id',
             'onDelete' => 'CASCADE'));

        $this->hasOne('Currency', array(
             'local' => 'currency_id',
             'foreign' => 'id',
             'onDelete' => 'CASCADE'));

        $timestampable0 = new Doctrine_Template_Timestampable();
        $this->actAs($timestampable0);
    }
}