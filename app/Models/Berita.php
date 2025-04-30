<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Berita extends Model
{
    use HasFactory;
    protected $fillable = ['id', 'judul', 'isi', 'cover'];
    public $timestamp = true;

    public function deleteImage(){
        if($this->cover && file_exists(public_path('images/berita/' . $this->cover))){
            return unlink(public_path('images/berita/' . $this->cover));
        }                       
    }
}
