<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Appsetting extends Model
{
    use HasFactory;
    protected $fillable = ['store_name','status','widgetapearance','chatopt','faqs','app_script_tag'];
}
