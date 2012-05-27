<?php

/**
 * Account actions.
 *
 * @package    rutino-server
 * @subpackage account
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z xavier $
 * @see        class::autoaccountActions
 */
class accountActions extends autoaccountActions
{
	public function embedAdditionalwallet_global_id($item, $params)
	{
		if (isset($this->objects[$item])){
			$array = $this->objects[$item];
			$array['wallet_global_id'] = $array['Wallet']['global_id'];
			unset($array['Wallet']);
			$this->objects[$item] = $array;
		}
	}

	public function embedAdditionalaccount_type_global_id($item, $params)
	{
		if (isset($this->objects[$item])){
			$array = $this->objects[$item];
			$array['account_type_global_id'] = $array['AccountType']['global_id'];
			unset($array['AccountType']);
			$this->objects[$item] = $array;
		}
	}

	public function query($params)
	{
		$query = parent::query($params);
		$user_id = $this->getRequest()->getParameter('user_id');
		if ($user_id){
			$query->innerJoin('Wallet.sfGuardUser sfGuardUser')->addWhere('sfGuardUser.id = ?', $user_id);
		}
		return $query;
	}
}
