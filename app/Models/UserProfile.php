<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\User;

class UserProfile extends Model
{

	use SoftDeletes;
    protected $fillable = [
			'first_name' , 'last_name', 'dob','mobile',
		];

	public function user(){

        return $this->belongsTo(User::class);
    }	
}
