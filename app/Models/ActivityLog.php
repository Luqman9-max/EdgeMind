<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ActivityLog extends Model
{
    protected $fillable = [
        'admin_id',
        'action',
        'description',
        'subject_type',
        'subject_id',
    ];

    public function admin()
    {
        return $this->belongsTo(Admin::class);
    }
}
