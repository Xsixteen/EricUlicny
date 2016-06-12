<?php
namespace Model;
use JsonSerializable;
abstract class AbstractModel implements JsonSerializable {
  public static function createFromArray($data) {
    $class = get_called_class();
    $obj = new $class();
    foreach(getAllVarsAndValues() as $k => $v) {
      if($data[$k]) {
        $obj->$k = $data[$k];
      }
    }
    return $obj;
  }
  public static function getAllVarsAndValues() {
    $class = get_called_class();
    return get_class_vars($class);
  }
  public static function getVars() {
    $class = get_called_class();
    $obj = new $class();
    return array_keys( get_class_vars($class) );
  }
  public function jsonSerialize() {
    return get_object_vars($this);
  }
}