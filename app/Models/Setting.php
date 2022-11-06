<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
    use HasFactory;

    protected $fillable = [
      'website_title',
      'address',
      'logo',
      'logo_dark',
      'facebook',
      'instagram',
      'twitter',
      'snapchat',
      'whatsapp',
      'mobile1',
      'mobile2',
      'mobile3',
      'email1',
      'email2',
  ];
}
