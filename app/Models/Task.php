<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Task extends Model
{
    use HasFactory;

      // every task belongs to a project
      public function project(): BelongsTo
      {
          return $this->belongsTo(Project::class);
      }

      
      // gets time difference between current time and created time, e.g "3 mins ago" or "4 months ago"
      public function getCreatedAttribute()
      {
          return $this->created_at->diffForHumans();
      }
}
