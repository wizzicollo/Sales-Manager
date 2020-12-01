<?php

namespace App\Models\Model\Master;

// use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vendor extends Model
{
    protected $table = 'vendors';

    public function user() {

      // return $this->belongsTo('App\Models\User', 'foreign_key' 'user_modified');
      return $this->belongsTo('App\Models\User', 'foreign_key', 'owner_key');

    }
    // use HasFactory;
}
