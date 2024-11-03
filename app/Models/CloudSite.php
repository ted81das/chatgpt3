<?php

namespace App\Models;

use App\Support\HasAdvancedFilter;
use App\Traits\Tenantable;
use Carbon\Carbon;
use DateTimeInterface;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class CloudSite extends Model
{
    use HasFactory, HasAdvancedFilter, SoftDeletes, Tenantable;

    public $table = 'cloud_sites';

    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    public $orderable = [
        'id',
        'server_records.name',
        'root_domain',
        'project_type',
        'webhoook_url',
    ];

    public $filterable = [
        'id',
        'server_records.name',
        'root_domain',
        'project_type',
        'webhoook_url',
    ];

    protected $fillable = [
        'server_records_id',
        'root_domain',
        'web_directory',
        'project_root',
        'project_type',
        'webhoook_url',
        'system_user_id',
        'authorid_id',
    ];

    public const PROJECT_TYPE_SELECT = [
        'laravel'    => 'laravel',
        'nodejs'     => 'nodejs',
        'statamic'   => 'statamic',
        'craft-cms'  => 'craft-cms',
        'symfony'    => 'symfony',
        'wordpress'  => 'wordpress',
        'octobercms' => 'octobercms',
        'cakephp'    => 'cakephp',
    ];

    protected function serializeDate(DateTimeInterface $date)
    {
        return $date->format('Y-m-d H:i:s');
    }

    public function serverRecords()
    {
        return $this->belongsTo(CloudServer::class);
    }

    public function getProjectTypeLabelAttribute($value)
    {
        return static::PROJECT_TYPE_SELECT[$this->project_type] ?? null;
    }

    public function getCreatedAtAttribute($value)
    {
        return $value ? Carbon::createFromFormat('Y-m-d H:i:s', $value)->format(config('project.datetime_format')) : null;
    }

    public function systemUser()
    {
        return $this->belongsTo(SystemUser::class);
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
