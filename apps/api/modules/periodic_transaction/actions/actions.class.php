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
			  ->select('t.id')
			  ->from('periodic_transaction p')
			  ->innerJoin('p.Account a')
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
