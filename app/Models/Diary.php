<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Diary extends Model
{
    use HasFactory;
    use SoftDeletes;
    
    protected $fillable =[
        'title',
        'body',
        'date',
        'is_publish',
        'user_id',
        'image_url',
        ];
    
    function getPaginateByLimit(int $limit_count = 10)
    {
        return $this->orderby('updated_at', 'DESC')->paginate($limit_count);
    }
    
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
