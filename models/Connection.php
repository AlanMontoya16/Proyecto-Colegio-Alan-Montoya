<?php

  class Connection {

  	public static function connect() {


 
        $link = new PDO("mysql:host=localhost", "dbname=nombre", "root", "root" );

        return $link;
  	}

  }