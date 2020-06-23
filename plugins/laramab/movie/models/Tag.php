<?php namespace Laramab\Movie\Models;

use Model;

/**
 * Model
 */
class Tag extends Model
{
    use \October\Rain\Database\Traits\Validation;

    use \October\Rain\Database\Traits\SoftDelete;

    protected $dates = ['deleted_at'];


    /**
     * @var string The database table used by the model.
     */
    public $table = 'laramab_movie_tags';

    /**
     * @var array Validation rules
     */
    public $rules = [
        'name' => 'required'
    ];

    /**
     * @var string[]
     */
    public $belongsToMany = [
        'movies' => [
            Movie::class,
            'table' => 'laramab_movie_movies_tags',
            'tag_id',
            'movie_id',
        ],
    ];
}
