<?php

/**
 * transaction actions.
 *
 * @package    rutino-server
 * @subpackage transaction
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z xavier $
 * @see        class::autotransactionActions
 */
class transactionActions extends autotransactionActions
{

	public function embedAdditionaluser_id($item, $params)
	{
		$user_id = $this->getRequest()->getParameter('user_id');
		if($user_id){
			$array = $this->objects[$item];
			$array['user_id'] = $user_id;
			$item_id = $array['id'];

			$q = Doctrine_Query::create()
			  ->select('t.id')
			  ->from('Transaction t')
			  ->innerJoin('t.Account a')
			  ->innerJoin('a.Wallet w')
			  ->innerJoin('w.sfGuardUser u')
			  ->where('user_id = ?', $user_id)
			  ->addWhere('id = ?', $item_id)
			  ->limit(1);

			$account = $q->fetchArray();
			
			if (count($account)){
				$this->objects[$item] = $array;
			}else{
				unset($this->objects[$item]);
				//$this->objects[$item] = null;
			}
			//echo "\n\n objects mod :";
			//var_dump($this->objects);
		}
	}

	public function embedAdditionalaccount_global_id($item, $params)
	{
		if (isset($this->objects[$item])){
			$array = $this->objects[$item];
			$item_id = $array['id'];

			$q = Doctrine_Query::create()
			  ->select('t.id, a.global_id')
			  ->from('Transaction t')
			  ->innerJoin('t.Account a')
			  ->Where('t.id = ?', $item_id)
			  ->limit(1);

			$account = $q->fetchArray();
			$array['account_global_id'] = $account[0]['Account']['global_id'];
			$this->objects[$item] = $array;
		}
	}

	public function embedAdditionalcurrency_global_id($item, $params)
	{
		if (isset($this->objects[$item])){
			$array = $this->objects[$item];
			$item_id = $array['id'];

			$q = Doctrine_Query::create()
			  ->select('t.id, c.global_id')
			  ->from('Transaction t')
			  ->innerJoin('t.Currency c')
			  ->Where('t.id = ?', $item_id)
			  ->limit(1);

			$account = $q->fetchArray();
			$array['currency_global_id'] = $account[0]['Currency']['global_id'];
			$this->objects[$item] = $array;
		}
	}
}
