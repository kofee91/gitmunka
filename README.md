README

Fileok:
index.php
README.md (ez a file)

Feladat:
A Zend_Db_Table származtatásával hozz létre egy alaposztályt, 
ami képes a lehető legegyszerűbb módon paraméterezéssel automatikusan létrehozni a saját struktúráját (származtatással). 
Elegendő, ha csak a MySQL-t támogatja. 
A primary id legyen GUID. 
Legyen benne egy mező, ami minden update-nél tárolja az aktuális timestamp-et. 
Kezelje a struktúra változásokat adatvesztés nélkül. 
A kód legyen kommentelve, README.md-ért plusz pont jár. 
A kódot git verziókövetőben kérjük (egy URL-t várunk, amit le lehet klónozni).

Adatbázis:
feladat_id BINARY(16) NOT NULL PRIMARY KEY, 
server_time TIMESTAMP

Használat:
Feladatnak neveztem el az új alaposztályt.
$table = new Feladat(array('db' => $db));
$table->insert_data();

Készítette:
Kozma Ferenc
