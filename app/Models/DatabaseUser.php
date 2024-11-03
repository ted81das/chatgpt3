<?php

namespace App\Models;

use App\Support\HasAdvancedFilter;
use App\Traits\Tenantable;
use Carbon\Carbon;
use DateTimeInterface;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class DatabaseUser extends Model
{
    use HasFactory, HasAdvancedFilter, SoftDeletes, Tenantable;

    public $table = 'database_users';

    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    public const REMOTE_SELECT = [
        'true'  => 'Remote',
        'false' => 'Local',
    ];

    public const READONLY_SELECT = [
        'true'  => 'Readonly',
        'false' => 'Not Readonly',
    ];

    public $orderable = [
        'id',
        'server_record.name',
        'user',
        'password',
        'remote',
    ];

    public $filterable = [
        'id',
        'server_record.name',
        'user',
        'password',
        'remote',
    ];

    protected $fillable = [
        'server_record_id',
        'user',
        'password',
        'remote',
        'remote_ip',
        'readonly',
    ];

    protected function serializeDate(DateTimeInterface $date)
    {
        return $date->format('Y-m-d H:i:s');
    }

    public function serverRecord()
    {
        return $this->belongsTo(CloudServer::class);
    }

    public function getRemoteLabelAttribute($value)
    {
        return static::REMOTE_SELECT[$this->remote] ?? null;
    }

    public function getReadonlyLabelAttribute($value)
    {
        return static::READONLY_SELECT[$this->readonly] ?? null;
    }

    public function getCreatedAtAttribute($value)
    {
        return $value ? Carbon::createFromFormat('Y-m-d H:i:s', $value)->format(config('project.datetime_format')) : null;
    }

    public function authorid()
    {
        return $this->belongsTo(User::class);
    }

    public function getUpdatedAtAttribute($value)
    {
        return $value ? Carbon::createFromFormat('Y-m-d H:i:s', $value)->format(config('project.datetime_format')) : null;
    }

    public function getDeletedAtAttribute($value)
    {
        return $value ? Carbon::createFromFormat('Y-m-d H:i:s', $value)->format(config('project.datetime_format')) : null;
    }

    public function team()
    {
        return $this->belongsTo(Team::class);
    }
}
