<?php

class sfResourceSerializerJson extends sfResourceSerializer
{
  public function getContentType()
  {
    return 'application/json';
  }

  public function serialize($array, $rootNodeName = 'data', $collection = true)
  {
    // if(is_array($array)){
    //   $array = array_merge(array(),$array);
    // }
    return json_encode($array);
  }

  public function unserialize($payload)
  {
    return json_decode($payload, true);
  }
}