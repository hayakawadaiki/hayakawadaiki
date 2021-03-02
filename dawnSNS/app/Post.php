<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
		use Notifiable;

		/**
		 * The attributes that are mass assignable.
		 *
		 * @var array
		 */
		protected $fillable = [
				'user_id', 'post',
		];

		/**
		 * The attributes that should be hidden for arrays.
		 *
		 * @var array
		 */
		protected $hidden = [
				'remember_token',
		];

		public function user()
    {
    	return $this->belongsTo('App\User');
    }

		public function getTimeLines(Int $user_id, Array $follow_ids)
    {
      return $this->whereIn('user_id', $follow_ids)->orderBy('created_at', 'DESC')->paginate();
    }
}
