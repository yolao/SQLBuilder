<?php
namespace SQLBuilder\Universal\Syntax;
use SQLBuilder\ToSqlInterface;
use SQLBuilder\Driver\BaseDriver;
use SQLBuilder\Driver\MySQLDriver;
use SQLBuilder\Driver\PgSQLDriver;
use SQLBuilder\ArgumentArray;
use SQLBuilder\Universal\Traits\KeyTrait;
use SQLBuilder\Universal\Syntax\Column;
use SQLBuilder\Exception\UnsupportedDriverException;

class AlterTableDropIndex implements ToSqlInterface
{
    protected $index;

    public function __construct($indexName) {
        $this->indexName = $indexName;
    }

    public function toSql(BaseDriver $driver, ArgumentArray $args) 
    {
        return 'DROP INDEX ' .  $driver->quoteIdentifier($this->indexName);
    }
}




