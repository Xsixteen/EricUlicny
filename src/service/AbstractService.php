<?php
namespace Service;

use \Mapper\IDataMapper;


abstract class AbstractService {
  protected $_mapper = null;
  public function __construct(IDataMapper $mapper) {
    $this->_mapper = $mapper;
  }
}
?>