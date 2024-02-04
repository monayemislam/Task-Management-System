<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    use HasFactory;
    protected $fillable = [
        'task_name','project_code','description','status','assigned_to'
    ];

    public function assignee()
    {
        return $this->belongsTo(User::class, 'assigned_to', 'id');
    }
}
