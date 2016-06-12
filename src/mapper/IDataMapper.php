<?php
namespace Mapper;


interface IDataMapper {
  public function get($id);
  public function create($data);
  public function remove($id);
  public function update($obj);
  public function delete($id);
}

?>