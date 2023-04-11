<?php

class TypeModel
{
    private $db;

    public function __construct()
    {
        $this->db = new Database();
    }

    public function getType()
    {
        $sql = "SELECT  Id
                        ,TypeVoertuig
                        ,Rijbewijscategorie
                        
                FROM   TypeVoertuig";

        $this->db->query($sql);

        return $this->db->resultSet();
    }
}

