<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    protected $guarded = [];
    public function project()
    {
        return $this->belongsTo(Project::class);
    }
    public function complete()
    {
        return $this->update(['completed' => true]);
    }
    public function incomplete()
    {
        return $this->update(['completed' => false]);
    }
}
