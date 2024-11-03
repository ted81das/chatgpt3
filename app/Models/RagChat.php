<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class RagChat extends Model
{
    //
    protected $fillable = ['title', 'user_id'];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function messages(): HasMany
    {
        return $this->hasMany(Message::class);
    }



}
