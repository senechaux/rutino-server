<?php

/**
 * BaseAccount
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $id
 * @property integer $mobile_id
 * @property integer $wallet_id
 * @property integer $account_type_id
 * @property string $name
 * @property string $description
 * @property timestamp $created_at
 * @property timestamp $updated_at
 * @property Wallet $Wallet
 * @property AccountType $AccountType
 * @property Doctrine_Collection $TransactionAccount
 * @property Doctrine_Collection $PeriodicTransactionAccount
 * 
 * @method integer             getId()                         Returns the current record's "id" value
 * @method integer             getMobileId()                   Returns the current record's "mobile_id" value
 * @method integer             getWalletId()                   Returns the current record's "wallet_id" value
 * @method integer             getAccountTypeId()              Returns the current record's "account_type_id" value
 * @method string              getName()                       Returns the current record's "name" value
 * @method string              getDescription()                Returns the current record's "description" value
 * @method timestamp           getCreatedAt()                  Returns the current record's "created_at" value
 * @method timestamp           getUpdatedAt()                  Returns the current record's "updated_at" value
 * @method Wallet              getWallet()                     Returns the current record's "Wallet" value
 * @method AccountType         getAccountType()                Returns the current record's "AccountType" value
 * @method Doctrine_Collection getTransactionAccount()         Returns the current record's "TransactionAccount" collection
 * @method Doctrine_Collection getPeriodicTransactionAccount() Returns the current record's "PeriodicTransactionAccount" collection
 * @method Account             setId()                         Sets the current record's "id" value
 * @method Account             setMobileId()                   Sets the current record's "mobile_id" value
 * @method Account             setWalletId()                   Sets the current record's "wallet_id" value
 * @method Account             setAccountTypeId()              Sets the current record's "account_type_id" value
 * @method Account             setName()                       Sets the current record's "name" value
 * @method Account             setDescription()                Sets the current record's "description" value
 * @method Account             setCreatedAt()                  Sets the current record's "created_at" value
 * @method Account             setUpdatedAt()                  Sets the current record's "updated_at" value
 * @method Account             setWallet()                     Sets the current record's "Wallet" value
 * @method Account             setAccountType()                Sets the current record's "AccountType" value
 * @method Account             setTransactionAccount()         Sets the current record's "TransactionAccount" collection
 * @method Account             setPeriodicTransactionAccount() Sets the current record's "PeriodicTransactionAccount" collection
 * 
 * @package    rutino-server
 * @subpackage model
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseAccount extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('account');
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
        $this->hasColumn('wallet_id', 'integer', 4, array(
             'type' => 'integer',
             'notnull' => true,
             'length' => 4,
             ));
        $this->hasColumn('account_type_id', 'integer', 4, array(
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
        $this->hasOne('Wallet', array(
             'local' => 'wallet_id',
             'foreign' => 'id',
             'onDelete' => 'CASCADE'));

        $this->hasOne('AccountType', array(
             'local' => 'account_type_id',
             'foreign' => 'id',
             'onDelete' => 'CASCADE'));

        $this->hasMany('Transaction as TransactionAccount', array(
             'local' => 'id',
             'foreign' => 'account_id'));

        $this->hasMany('PeriodicTransaction as PeriodicTransactionAccount', array(
             'local' => 'id',
             'foreign' => 'account_id'));

        $timestampable0 = new Doctrine_Template_Timestampable();
        $this->actAs($timestampable0);
    }
}