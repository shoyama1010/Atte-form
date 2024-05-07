<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Attendance extends Model
{
	protected $table = 'attendances';

	protected $fillable = [
		'user_id',
		'punch_in_at',
		'punch_out_at',
		'created_at',
		'updated_at',
	];

	public function user()
	{
		return $this->belongsTo(User::class);
	}
}
