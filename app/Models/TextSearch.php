<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Nicolaslopezj\Searchable\SearchableTrait;

class TextSearch extends Model
{
    use HasFactory;
    use SearchableTrait;
    use Notifiable;
    protected $searchable = [
        /**
         * Columns and their priority in search results.
         * Columns with higher values are more important.
         * Columns with equal values have equal importance.
         *
         * @var array
         */
        'columns' => [
            'TextSearch.name' => 10,
            'TextSearch.ingredients' => 10,
            'TextSearch.id' => 2,
        ],
    ];
   protected $fillable= ['name','id','ingredients'];




}
