<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory;
    protected $fillable = ['department_id', 'emp_name', 'contact_numbers', 'addresses'];

    public function department(): BelongsTo
    {
        return $this->belongsTo(Department::class);
    }
}
