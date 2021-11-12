<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class memberChoice extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'member_id',
        'book_id',
        'return_date',
    ];

    
    public function member()
    {
        return $this->belongsTo(member::class, 'member_id', 'id');
    }

    
    public function book()
    {
        return $this->belongsTo(Book::class, 'book_id', 'id');
    }
}
