<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Test extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'subject',
        'title',
        'date',
        'body',
        'answer',
        'user_id',
        'image_url',
        ];
    
    function getPaginateByLimit(int $limit_count = 50)
    {
        return $this->orderby('updated_at', 'DESC')->paginate($limit_count);
    }
    
    public function user()
{
    return $this->belongsTo(User::class);
}
}
