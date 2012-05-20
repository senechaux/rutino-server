<?php

/**
 * account actions.
 *
 * @package    rutino-server
 * @subpackage account
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z xavier $
 * @see        class::autoaccountActions
 */
class accountActions extends autoaccountActions
{
	public function embedAdditionaluser_id($item, $params)
	{
		$user_id = $this->getRequest()->getParameter('user_id');
		if ($user_id){
			$array = $this->objects[$item];
			$array['user_id'] = $user_id;
			$item_id = $array['id'];

			$q = Doctrine_Query::create()
			  ->select('a.id')
			  ->from('account a')
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
			}
		}
	}
}
