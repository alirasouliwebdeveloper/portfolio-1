<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Skill extends Model
{
    use HasFactory;

    protected $fillable = [
        'meta_name', 'meta_value', 'body',
        'image', 'status', 'position', 'user_id',
        'deleted_at'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function returnStatus($status)
    {
        return
            $status == 1 ?
                '<span class="badge badge-success">Publish</span>'
                :
                '<span class="badge badge-warning">Draft</span>';
    }

    public function scopeNotDeletedSkills($query)
    {
        return $query->where('deleted_at', null)->latest();
    }
}
