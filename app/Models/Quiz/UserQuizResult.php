<?php

namespace App\Models\Quiz;

use App\Models\User;
use Illuminate\Database\Eloquent\Relations\Pivot;

class UserQuizResult extends Pivot
{
    protected $table = "user_quiz_results";

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['user_id', 'quiz_id', 'total_attempted', 'total_skipped', 'total_wrong', 'total_right'];

    public function user()
    {
      return $this->belongsTo(User::class,'user_id');
    }
}
