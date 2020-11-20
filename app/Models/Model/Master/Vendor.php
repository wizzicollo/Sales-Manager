  <?php

namespace App\Models\Model\Master;

// use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vendor extends Model
{
    protected $table = 'vendors';

    public function user_modify() {

       return $this->belongTo( related '\App\User', foreignKey 'user_modified');
       
    }
    // use HasFactory;
}
