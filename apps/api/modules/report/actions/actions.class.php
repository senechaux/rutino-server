<?php

/**
 * report actions.
 *
 * @package    rutino-server
 * @subpackage report
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z xavier $
 * @see        class::autoreportActions
 */
class reportActions extends autoreportActions
{

	public function embedAdditionaluser_id($item, $params)
	{
		$user_id = $this->getRequest()->getParameter('user_id');
		if ($user_id){
			$array = $this->objects[$item];
			$array['user_id'] = $user_id;
			$item_id = $array['id'];

			$q = Doctrine_Query::create()
			  ->select('r.id')
			  ->from('report r')
			  ->innerJoin('a.Wallet w')
			  ->innerJoin('w.User u')
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
