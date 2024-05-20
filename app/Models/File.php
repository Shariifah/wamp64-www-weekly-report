<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class File extends Model
{
    use HasFactory;

    protected $table = 'upload_files';

    protected $fillable = [
        'file_name',
        'file',
        'employee_name',
        'service_id'
    ];

    public function service() {
        return $this->belongsTo(Service::class);
    }
}
