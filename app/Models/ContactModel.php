<?php

namespace App\Models;
use App\Libraries\MySql;
use App\Libraries\QueryBuilder;
use PDO;


class ContactModel extends Model
{
    // Name of the table
    protected $model = "contactform";

    // Max number of records when fetching all records from table
    protected $limit;

    // Non writable fields
    protected $protectedFields = [
        'id',
        'updated_at',
        'deleted_at',
        'updated_by',
        'deleted_by',
    ];

    /**
     * Load class 'staticaly'
     */
    public static function load()
    {
        return new static;
    }

    public function __construct()
    {
        parent::__construct(
            $this->model, 
            $this->limit, 
            $this->protectedFields
        );   
    }


    public static function exists($email, int $id = null)
    {
        $query = "SELECT id FROM `users` WHERE `email`='" . $email . "'" . ($id !== null ? " AND id<>" . $id : "");
        
        $result = MySql::query($query)->fetch();

        return $result !== false;
    }




};