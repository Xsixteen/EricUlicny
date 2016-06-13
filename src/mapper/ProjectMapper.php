<?php
    namespace Mapper;

    use \Model\Project;

    use PDO;

    class ProjectMapper extends AbstractMapper implements IDataMapper {    

        public function get($id) {}
        public function create($data) {}
        public function remove($id) {}
        public function update($obj) {}
        public function delete($id) {}

        public function getAllProjects() {
            $sql  = ' SELECT';
            $sql .= ' p.id, p.name, p.description, p.languages, p.url, p.type';
            $sql .= ' FROM projects AS p ORDER BY p.name DESC';

            $statement = $this->_pdo->prepare($sql);
            $statement->setFetchMode(PDO::FETCH_CLASS, '\Model\Project');
            $statement->execute();

            return $statement->fetchAll();
        }
    }
?>