<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Quest extends Model
{
    public function completion()
    {
        return $this->hasOne(QuestCompletion::class, 'quest_id', 'id');
    }
}