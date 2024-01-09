<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StatusModel extends Model
{
    use HasFactory;

    protected $primaryKey = 'id'; // Sesuaikan dengan nama kolom ID Anda
    public $incrementing = false;
    protected $table = "tbl_status";

    protected $guarded = [];
}


