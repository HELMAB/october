<?php namespace Laramab\Movie\Models;

use Model;
use System\Models\File;

/**
 * Model
 */
class Movie extends Model
{
    use \October\Rain\Database\Traits\Validation;

    use \October\Rain\Database\Traits\SoftDelete;

    protected $dates = ['deleted_at'];


    /**
     * @var string The database table used by the model.
     */
    public $table = 'laramab_movie_movies';

    /**
     * @var array Validation rules
     */
    public $rules = [
        'title' => 'required|min:5|max:255',
        'description' => 'required',
        'year' => 'required'
    ];

    /**
     * Attachment only a file.
     *
     * @var string[]
     */
    public $attachOne = [
        'poster' => File::class,
    ];

    /**
     * Attachment many files.
     *
     * @var string[]
     */
    public $attachMany = [
        'galleries' => File::class,
    ];

    /**
     * @var string[]
     */
    public $belongsToMany = [
        'tags' => [
            Tag::class,
            'table' => 'laramab_movie_movies_tags',
            'movie_id',
            'tag_id',
        ],
    ];
}
