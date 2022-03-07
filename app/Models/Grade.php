<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Grade extends Model
{
    use HasFactory;

    /**
     * Update the current grade with the new grade if applicable.
     * Grade will only be updated when it is higher than the previous grade (best result counts).
     *
     * @param $grade double The new grade
     * @return void
     */
    public function addResult($grade)
    {
        $this->refresh();

        if ($this->best_grade >= $grade) {
            return;
        }
        $this->best_grade = $grade;

        if ($this->best_grade >= $this->lowest_passing_grade){
            $this->passed_at = now();
        }
        $this->save();
    }
}
