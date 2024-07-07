<?php

namespace App\Models;

trait TableNameTrait
{
    public function __construct(array $attributes = [])
    {
        parent::__construct($attributes);

        // get the class name
        $baseName = get_called_class();
        $className = last(explode('\\', $baseName));

        $this->setTable($this->tableName(sprintf('%ss', strtolower($className))));
    }

    public function getTableName(): string
    {

        return $this->table;
    }

    protected function tableName(string $tableName): string
    {
        return sprintf('%s_%s', $this->prefix, $tableName);
    }
}
