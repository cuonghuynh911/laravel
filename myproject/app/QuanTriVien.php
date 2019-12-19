<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

class QuanTriVien extends Authenticatable
{
    protected $table='quan_tri_vien';

    protected $fillable=[
    	'ten_dang_nhap', 'mat_khau', 'ho_ten'
    ];

    public function getPasswordAttribute()
	{
		return $this->mat_khau;
	}
}
