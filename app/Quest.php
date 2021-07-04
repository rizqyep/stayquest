<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Quest extends Model
{
    public function completion()
    {
        return $this->hasOne(QuestCompletion::class, 'quest_id', 'id');
    }

    public function isCompleted($user_id)
    {
        $completedCount = CompletedQuests::where(['user_id' => $user_id, 'quest_id' => $this->id])->count();

        if ($completedCount > 0) {
            return true;
        } else {
            return false;
        }
    }
}