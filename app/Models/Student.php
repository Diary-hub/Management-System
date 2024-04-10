<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $table = 'students';
    protected $primaryKey = 'id';
    protected $fillable = ['name', 'address', 'mobile', 'imageURL'];

    public function mobile()
    {
        // add logic to correctly format number here
        // a more robust ways would be to use a regular expression
        return substr($this->mobile, 0, 4) . " " . substr($this->mobile, 4, 3) . " " . substr($this->mobile, 7);
    }
    use HasFactory;
}
