<?php

namespace App\Models;

use App\Support\HasAdvancedFilter;
use App\Traits\Tenantable;
use Carbon\Carbon;
use DateTimeInterface;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class WordpressInstall extends Model
{
    use HasFactory, HasAdvancedFilter, SoftDeletes, Tenantable;

    public $table = 'wordpress_installs';

    protected $fillable = [
        'site_record_id',
        'create_database',
    ];

    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    public const CREATE_DATABASE_SELECT = [
        'true'  => 'Yes',
        'false' => 'no',
    ];

    public $orderable = [
        'id',
        'site_record.root_domain',
        'create_database',
    ];

    public $filterable = [
        'id',
        'site_record.root_domain',
        'create_database',
    ];

    protected function serializeDate(DateTimeInterface $date)
    {
        return $date->format('Y-m-d H:i:s');
    }

    public function siteRecord()
    {
        return $this->belongsTo(CloudSite::class);
    }

    public function getCreateDatabaseLabelAttribute($value)
    {
        return static::CREATE_DATABASE_SELECT[$this->create_database] ?? null;
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
