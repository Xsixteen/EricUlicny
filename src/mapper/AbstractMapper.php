<?php

namespace Mapper;

abstract class AbstractMapper {
  protected $_pdo = null;
  
  public function __construct($db) {
    $this->_pdo = $db;
  }
}

?>