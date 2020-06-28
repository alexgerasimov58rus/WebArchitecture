<?php

require_once 'factories/db/AbstractDBFactory.php';
require_once 'factories/db/DBOracleFactory.php';
require_once 'factories/db/DBPostgreSQLFactory.php';
require_once 'factories/db/DBMySQLFactory.php';

require_once 'objects/dbconnection/AbstractDBConnection.php';
require_once 'objects/dbconnection/DBOracleConnection.php';
require_once 'objects/dbconnection/DBMySQLConnection.php';
require_once 'objects/dbconnection/DBPostgreSQLConnection.php';

require_once 'objects/dbquerybuilder/AbstractDBQueryBuilder.php';
require_once 'objects/dbquerybuilder/DBOracleQueryBuilder.php';
require_once 'objects/dbquerybuilder/DBMySQLQueryBuilder.php';
require_once 'objects/dbquerybuilder/DBPostgreSQLQueryBuilder.php';

require_once 'objects/dbrecodr/AbstractDBRecord.php';
require_once 'objects/dbrecodr/DBOracleRecord.php';
require_once 'objects/dbrecodr/DBMySQLRecord.php';
require_once 'objects/dbrecodr/DBPostgreSQLRecord.php';

function testDB(AbstractDBFactory $factory){
    echo $factory->createDBConnection()->connect() . PHP_EOL;
    echo $factory->createDBRecord()->record() . PHP_EOL;
    echo $factory->createDBQueryBuilder()->builder() . PHP_EOL;
}

testDB(new DBOracleFactory());
echo PHP_EOL;
testDB(new DBMySQLFactory());
echo PHP_EOL;
testDB(new DBPostgreSQLFactory());
