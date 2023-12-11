<?php


namespace App\Repositories;


use App\Models\Notification;
use Illuminate\Container\Container as Application;

class NotificationRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'subject',
        'message',
    ];

    public function __construct()
    {
        parent::__construct(Application::getInstance());
    }

    /**
     * @return array
     */
    public function getFieldsSearchable(): array
    {
        return $this->fieldSearchable;
    }

    /**
     * @return string
     */
    public function model(): string
    {
        return Notification::class;
    }
}
