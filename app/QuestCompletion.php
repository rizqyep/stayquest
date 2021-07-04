<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class QuestCompletion extends Model
{
    public function quest()
    {
        return $this->belongsTo(Quest::class, 'quest_id', 'id');
    }
}