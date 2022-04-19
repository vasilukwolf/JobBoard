<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
  use HasFactory;

  protected $fillable = [
    'job_title',
    'job_location',
    'job_link',
    'company_name',
    'company_logo',
    'user_id'
  ];

  public function tags()
  {
    return $this->belongsToMany(Tag::class);
  }

  public function user()
  {
    return $this->belongsTo(User::class);
  }

}
