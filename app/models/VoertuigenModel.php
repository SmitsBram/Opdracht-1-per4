<?php

class VoertuigenModel
{
    private $db;

    public function __construct()
    {
        $this->db = new Database();
    }

    public function getVoertuigen()
    {
        $sql = "SELECT  Kenteken
                        , Type
                        , Bouwjaar
                        , Brandstof
                        , TypevoertuigId
                FROM   Voertuigen
                ORDER BY Kenteken ASC
                ";
                $sql = "SELECT  Kenteken
                , Type
                , Bouwjaar
                , Brandstof
                , TypevoertuigId
                , Rijbewijscategorie
        FROM    Voertuigen
        ORDER BY Rijbewijscategorie";


        $this->db->query($sql);

        return $this->db->resultSet();
    }
}
