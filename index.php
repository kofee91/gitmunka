<!DOCTYPE html>
<!--
Tesztfeladat.
Kozma Ferenc
2015.10.26.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        class Feladat extends Zend_Db_Table_Abstract
        {
            
        protected $_name = 'feladat'; //Tabla neve.
        protected $_primary = 'feladat_id'; //Primary key neve.
        protected $_sequence = false; //Az id nem novekszik automatikusan.
        
        /*A feladat_id mezo frissul egy uj UUID-vel.
         * A server_time mezo frissul a beillesztes idejevel megegyezo idovel.*/
        protected function insert_data(){
                    $data = array(
                        'feladat_id'      => new Zend_Db_Expr('UUID()'),
                        'server_time' => new Zend_Db_Expr('NOW()')
                    );
                    $this->_db->insert($this->_name, $data);
		}
        }
        
        /*Csatlakozas az adatbazis szerverere.
         * Biztonsagi okokbol a config.ini fajlbol toltodik be az adat.*/
        $config = new Zend_Config_Ini('/var/www/html/ZendApp/application/configs/config.ini');
        $db = Zend_Db::factory($config->database);
        
        $table = new Feladat(array('db' => $db));
        $table->insert_data();
        ?>
    </body>
</html>
