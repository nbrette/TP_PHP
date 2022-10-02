<?php


class SQLLite
{

    private $db;

    /**
     * @throws Exception
     */
    public function __construct()
    {
        $this->db = new PDO('sqlite:./db/database.db');
        $this->db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $this->db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);

        if (!file_exists('./db/database.db')) {
            throw new Exception('Database not found');
        }
    }


    public function createBase()
    {
        //function pour peuplé la base de donnée
        //la bdd est déjà présente dans le repo, pas besoin de l'appeller
        $this->db->exec(file_get_contents('./create_base.sql'));
    }


    public function get(string $sql, array $params) {
        $req = $this->db->prepare($sql);

        foreach ($params as $key => $value) {
            $req->bindValue($key, $value);
        }

        $req->execute($params);
        return $req->fetchAll();
    }

    public function insert(string $sql, array $params) {
        $req = $this->db->prepare($sql);

        $req->execute($params);
    }
}


?>