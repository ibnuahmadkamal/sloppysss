<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ModelUser extends Model
{
    protected $table = 'users';
}

class ModelReview extends Model
{
    protected $tablereview = 'review';
}
