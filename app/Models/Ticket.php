<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ticket extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'description', 'priority', 'os', 'software', 'status', 'user_id'];

    // Relationship: A ticket belongs to a user
    public function user() {
        return $this->belongsTo(User::class);
}
}
