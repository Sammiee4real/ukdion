<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Campaign extends Model
{
    use HasFactory;

    protected $fillable = ['campaign_name','user_id','date_from','date_to','total_budget','daily_budget','creative_uploads_path'];
    // protected $guard = [];
    
}
