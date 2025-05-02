<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Penerbit extends Model
{
    use HasFactory;
    protected $fillable = ['id', 'nama_penerbit'];
    public $timestamp = true;

    
    public function berita(){
        return $this->hasMany(Berita::class);
    }
}
