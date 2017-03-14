<?php

class Portfolio{

    public function getAllProject(){
        global $dbh;
        $query = $dbh->query("SELECT * FROM projet_portfolio " );
        return $query->fetchAll();
    }
}
