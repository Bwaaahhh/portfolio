<?php

class Portfolio{

    public function getAllProject()
    {
        global $dbh;
        $query = $dbh->query("SELECT * FROM portfolio " );
        return $query->fetchAll();
    }

    public function getOneProject($name)
    {
        global $dbh;
        $query = $dbh->query("SELECT * FROM portfolio WHERE nom = '$name' ");
        return $query->fetch();
    }

    public function getPicturePrevProject($ordre)
    {
        global $dbh;
        $query = $dbh->query("SELECT image FROM portfolio WHERE ordre = '$ordre'-1 ");
        return $query->fetch();
    }

    public function getPictureNextProject($ordre)
    {
        global $dbh;
        $query = $dbh->query("SELECT image FROM portfolio WHERE ordre = '$ordre'+1 ");
        return $query->fetch();
    }
}
