<?php

/**
 * periodic_transaction actions.
 *
 * @package    rutino-server
 * @subpackage periodic_transaction
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z xavier $
 * @see        class::autoperiodic_transactionActions
 */
class periodic_transactionActions extends autoperiodic_transactionActions
{

	public function embedAdditionaluser_id($item, $params)
	{
		$user_id = $this->getRequest()->getParameter('user_id');
		if($user_id){
			$array = $this->objects[$item];
			$array['user_id'] = $user_id;
			$item_id = $array['id'];

			$q = Doctrine_Query::create()
			  ->select('pt.id')
			  ->from('PeriodicTransaction pt')
			  ->innerJoin('pt.Account a')
			  ->innerJoin('a.Wallet w')
			  ->innerJoin('w.sfGuardUser u')
			  ->where('user_id = ?', $user_id)
			  ->addWhere('pt.id = ?', $item_id)
			  ->limit(1);

			$periodic_transaction = $q->fetchArray();
			
			if (count($periodic_transaction)){
				$this->objects[$item] = $array;
			}else{
				unset($this->objects[$item]);
			}
		}
	}

	public function embedAdditionalaccount_global_id($item, $params)
	{
		if (isset($this->objects[$item])){
			$array = $this->objects[$item];
			$item_id = $array['id'];

			$q = Doctrine_Query::create()
			  ->select('pt.id, a.global_id')
			  ->from('PeriodicTransaction pt')
			  ->innerJoin('pt.Account a')
			  ->Where('pt.id = ?', $item_id)
			  ->limit(1);

			$periodic_transaction = $q->fetchArray();

			$array['account_global_id'] = $periodic_transaction[0]['Account']['global_id'];
			$this->objects[$item] = $array;
		}
	}

	public function embedAdditionalcurrency_global_id($item, $params)
	{
		if (isset($this->objects[$item])){
			$array = $this->objects[$item];
			$item_id = $array['id'];

			$q = Doctrine_Query::create()
			  ->select('pt.id, c.global_id')
			  ->from('PeriodicTransaction pt')
			  ->innerJoin('pt.Currency c')
			  ->Where('pt.id = ?', $item_id)
			  ->limit(1);

			$periodic_transaction = $q->fetchArray();

			$array['currency_global_id'] = $periodic_transaction[0]['Currency']['global_id'];
			$this->objects[$item] = $array;
		}
	}
}
