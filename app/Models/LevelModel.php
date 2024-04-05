<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class LevelModel extends Model
{
    protected $table = 'm_level';
    protected $primaryKey = 'level_id';
    protected $fillable = ['level_kode', 'level_nama'];
    public function level(): BelongsTo
    {
        return $this->belongsTo(UserModel::class, 'level_id', 'level_id');
    }
}