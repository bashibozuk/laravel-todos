<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Todo
 * @package App
 * @property int $id
 * @property int $user_id
 * @property string $text
 * @property string $created_at
 * @property string $updated_at
 */
class Todo extends Model
{
    //

    protected $fillable = [
      'user_id', 'text'
    ];

    public function user()
    {
        return $this->hasOne(\App\User::class, 'id', 'user_id');
    }

    public function tags()
    {
        return $this->belongsToMany(\App\Tag::class);
    }
}
