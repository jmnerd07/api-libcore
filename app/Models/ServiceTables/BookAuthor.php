<?php

namespace App\Models\ServiceTables;

use Illuminate\Database\Eloquent\Model;

class BookAuthor extends Model
{
	protected $connection = 'service_db';
    protected $table =  'books_authors';
    public $timestamps = false;
    protected $hidden = [
            'user_id_creator', 'created_at', 'id','book_id',/*'author_id'*/
        ];
    protected $casts = [
            'book_id'=>'integer',
            'author_id'=>'integer'
        ];
    public function details()
    {
        return $this->belongsTo('App\Models\ServiceTables\Author', 'author_id', 'id')
            ->where('authors.record_id', null);
    }
    public function book()
    {
        return $this->belongsTo('App\Models\ServiceTables\Book', 'book_id', 'id');
    }
}
