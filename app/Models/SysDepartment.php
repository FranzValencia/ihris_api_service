<?php

namespace App\Models;

// use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SysDepartment extends Model
{
    // use HasFactory;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'department';


    /**
     * The primary key associated with the table.
     *
     * @var string
     */
    protected $primaryKey = 'department_id';

    // Disable timestamps
    public $timestamps = false;
}
