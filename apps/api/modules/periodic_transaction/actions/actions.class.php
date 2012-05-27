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
	public function embedAdditionalaccount_global_id($item, $params)
	{
		if (isset($this->objects[$item])){
			$array = $this->objects[$item];
			$array['account_global_id'] = $array['Account']['global_id'];
			unset($array['Account']);
			$this->objects[$item] = $array;
		}
	}

	public function embedAdditionalcurrency_global_id($item, $params)
	{
		if (isset($this->objects[$item])){
			$array = $this->objects[$item];
			$array['currency_global_id'] = $array['Currency']['global_id'];
			unset($array['Currency']);
			$this->objects[$item] = $array;
		}
	}

	public function query($params)
	{
		$query = parent::query($params);
		$user_id = $this->getRequest()->getParameter('user_id');
		if ($user_id){
			$query->innerJoin('Account.Wallet Wallet')->innerJoin('Wallet.sfGuardUser sfGuardUser')->addWhere('sfGuardUser.id = ?', $user_id);
		}
		return $query;
	}
}
