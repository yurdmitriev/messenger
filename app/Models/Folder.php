<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Folder extends Model
{
    use HasFactory;

    protected $table = 'folders';

    public $timestamps = false;

    public function chats()
    {
        return $this->belongsTo(Chat::class);
    }

    public function users()
    {
        return $this->belongsTo(Chat::class);
    }
}
