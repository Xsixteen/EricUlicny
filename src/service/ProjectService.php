<?php

namespace Service;

use \Model\Project;
use \Mapper\ProjectMapper;

class ProjectService extends AbstractService {

    public function getAllProjects() {
        return $this->_mapper->ProjectMapper();
    }

}

?>