<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Berita extends Model
{
    use HasFactory;
    protected $fillable = ['id', 'judul', 'isi', 'cover', 'tanggal_terbit', 'id_kategori', 'id_penerbit'];
    public $timestamp = true;

    public function deleteImage(){
        if($this->cover && file_exists(public_path('images/berita/' . $this->cover))){
            return unlink(public_path('images/berita/' . $this->cover));
        }                       
    }

    public function penerbit(){
        return $this->belongsTo(Penerbit::class, 'id_penerbit');
    }
    public function kategori(){
            return $this->belongsTo(Kategori::class, 'id_kategori');
    }
    }
