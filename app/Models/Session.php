<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Session extends Model
{
    protected $guarded = [];
    
    public function chats()
    {
        return $this->hasManyThrought(Chat::class, Message::class);
    }
    
    public function messages()
    {
        return $this->hasMany(Message::class);
    }
}
