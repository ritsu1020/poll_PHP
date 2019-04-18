<?php

namespace MyApp;

class Poll {
  private $_db;

  public function __construct() {
    $this->connectDB();
  }

  private function _connectDB() {
    tyr {
      $this->_db = new \PDO(DSN, DB_USERNAME, DB_PASSWORD);
      $this->_db->setAttribute(\PDO::ATTR_ERRORMODE, \PDO::ERRMODE_EXCEPTION);
    } catch (\PDOException $e) {
      throw new \Exception('Failed to connect DB!');
    }
  }
}
