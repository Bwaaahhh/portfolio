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
        if($ordre ==="1"){
            $nombre = 3 ;
        }else{
            $nombre = $ordre + 1 ;
        }
        $query = $dbh->query("SELECT * FROM portfolio WHERE ordre = '$ordre-1' ");
        return $query->fetch();
    }

    public function getPictureNextProject($ordre)
    {
        global $dbh;
        if($ordre ==="3"){
            $nombre = 1 ;
        }else{
            $nombre = $ordre + 1 ;
        }
        $nombre = $ordre + 1 ;
        $query = $dbh->query("SELECT * FROM portfolio WHERE ordre = '$nombre' ");
        return $query->fetch();
    }
    public function getPictureFirstProject(){
        global $dbh;
        $query = $dbh->query("SELECT * FROM portfolio WHERE ordre = 1 ");
        return $query->fetch();
    }
}
