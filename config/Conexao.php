<?php
namespace App\config;

use PDO;

class Conexao {
    public static function conectar() {
        return new PDO('mysql:host=localhost;dbname=router', 'root', 'Force_sql994');
    }
}
