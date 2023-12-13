<?php


namespace App\Repositories;


use App\Models\User;
use Illuminate\Container\Container as Application;

class UserRepository extends BaseRepository
{
    public function __construct()
    {
        parent::__construct(Application::getInstance());
    }


    /**
     * @var array
     */
    protected $fieldSearchable = [
        'name',
        'company_name',
        'username',
        'role',
        'plan',
        'note',
        'telephone',
        'email',
    ];

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
        return User::class;
    }
}
