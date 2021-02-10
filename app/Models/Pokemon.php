<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pokemon extends Model
{
    use HasFactory;

    /**
     * The table where this model represent to
     * @var string
     */
    protected $table = 'pokemon';

    /**
     * The Primary key of this model
     * @var string
     */
    protected $primareKey = 'id';

    /**
     * Mass assigning values
     * @var array
     */
    protected $fillable = [
        'name',
        'url'
    ];
}
