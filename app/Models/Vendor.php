<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vendor extends Model
{
  public function performancefeedbacks()
  {
    return $this->hasMany(PerformanceFeedback::class);
  }
}

class PerformanceFeedback extends Model
{
  public function vendor()
  {
    return $this->belongsTo(Vendor::class);
  }

  public function user()
  {
    return $this->belongsTo(User::class);
  }
}
