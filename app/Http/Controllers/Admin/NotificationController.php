<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\NotificationCreateRequest;
use App\Repositories\NotificationRepository;
use Illuminate\Http\JsonResponse;

class NotificationController extends Controller
{
    /**
     * @var NotificationRepository
     */
    protected $notificationRepository;

    /**
     * UserController constructor.
     * @param NotificationRepository $notificationRepository
     */
    public function __construct(NotificationRepository $notificationRepository)
    {
        $this->notificationRepository = $notificationRepository;
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param NotificationCreateRequest $request
     * @return JsonResponse
     */
    public function store(NotificationCreateRequest $request): JsonResponse
    {
        $input = $request->all();
        $input['created_by'] = auth()->id();
        $data = $this->notificationRepository->create($input);

        if (isset($data->id)) {
            return $this->sendResponse($data, 'Successfully Sent!');
        } else {
            return $this->sendError('Something went Wrong!', 400);
        }
    }
}
