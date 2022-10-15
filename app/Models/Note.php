<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Note extends Model
{
    use HasFactory;
    protected $table = 'notes';
    protected $primaryKey = 'note_id';
    protected $fillable = ['note_title', 'note','cat_id','user_id'];
}
