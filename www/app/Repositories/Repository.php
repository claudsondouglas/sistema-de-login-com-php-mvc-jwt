<?php
namespace App\Repositories;

class Repository {
    protected $table = null;
    protected $db = null;
    protected $fillable = "*";

    public function __construct() {
        if ($this->table === null) {
            throw new \Exception('Table name is not defined');
        }
        $this->db = new \PDO('mysql:host=mysql;dbname=poticms', 'root', 'password');
    }

    public function findOne() {
        $query = "SELECT $this->fillable FROM ".$this->table." LIMIT 1";
        $stmt = $this->db->prepare($query);
        $stmt->execute();

        return $stmt->fetch(\PDO::FETCH_ASSOC);
    }

    public function findBy($field, $value, $fillable = null) {
        $query = "SELECT ". ($fillable ?? $this->fillable) ." FROM ".$this->table." WHERE `$field` = :field LIMIT 1";
        $stmt = $this->db->prepare($query);
        $stmt->execute(['field' => $value]);

        return $stmt->fetch(\PDO::FETCH_ASSOC);
    }
}