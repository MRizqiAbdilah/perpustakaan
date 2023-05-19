<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    use HasFactory;

    protected $guarded = ['id'];
    public $table = "member";
    public $primaryKey = "member_id";

    public function peminjaman(){
        return $this->belongsTo(Peminjaman::class);
    }
}
