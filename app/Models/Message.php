<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Message extends Model
{
    //
protected $fillable = ['content', 'role', 'conversation_id'];

    public function conversation(): BelongsTo
    {
        return $this->belongsTo(Conversation::class);
    }


}
