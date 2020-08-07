<?php

namespace App\Models\Timeline;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;

class Status extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['hash', 'body'];
    protected $withCount = ['comments'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function getPublishedAttribute()
    {
        return $this->created_at->diffForHumans();
    }

    public function comments()
    {
        return $this->hasMany(Comments::class);
    }
}
