<?php

namespace App\Models;

use App\Support\HasAdvancedFilter;
use App\Traits\Tenantable;
use Carbon\Carbon;
use DateTimeInterface;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Sslcertificate extends Model
{
    use HasFactory, HasAdvancedFilter, SoftDeletes, Tenantable;

    public $table = 'sslcertificates';

    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    public const FORCE_SELECT = [
        'true'  => 'Force HTTPS',
        'false' => 'Do not force',
    ];

    public const TYPE_SELECT = [
        'letsencrypt' => 'Lets encrypt',
        'custom'      => 'Custom',
    ];

    protected $fillable = [
        'site_record_id',
        'type',
        'certificate',
        'private',
        'force',
        'additional',
    ];

    public $orderable = [
        'id',
        'site_record.root_domain',
        'type',
        'certificate',
        'private',
        'force',
        'additional',
    ];

    public $filterable = [
        'id',
        'site_record.root_domain',
        'type',
        'certificate',
        'private',
        'force',
        'additional',
    ];

    protected function serializeDate(DateTimeInterface $date)
    {
        return $date->format('Y-m-d H:i:s');
    }

    public function siteRecord()
    {
        return $this->belongsTo(CloudSite::class);
    }

    public function getTypeLabelAttribute($value)
    {
        return static::TYPE_SELECT[$this->type] ?? null;
    }

    public function getForceLabelAttribute($value)
    {
        return static::FORCE_SELECT[$this->force] ?? null;
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
