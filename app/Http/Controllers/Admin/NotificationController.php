<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\NotificationCreateRequest;
use App\Repositories\NotificationRepository;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Yajra\DataTables\Exceptions\Exception;

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
        $input['company_id'] = $input['email-to'];
        $input['subject'] = $input['email-subject'];
        $input['message'] = $input['email-message'];

        $data = $this->notificationRepository->create($input);

        if (isset($data->id)) {
            return $this->sendResponse($data, 'Successfully Sent!');
        } else {
            return $this->sendError('Something went Wrong!', 400);
        }
    }

    /**
     * @throws \Exception
     */
    public function index(Request $request): JsonResponse
    {
        if ($request->ajax()) {
            $companyId = auth()->user()->id;
            $data = $this->notificationRepository->allQuery()->where('company_id', $companyId);
            try {
                return datatables()->of($data)
                    ->addColumn('message', function ($row) {
                        $first100Chars = substr($row->message, 0, 70);
                        return strlen($row->message) > 70 ? $first100Chars . '...' : $first100Chars;
                    })
                    ->addColumn('action', function ($row) {
                        return view("company.dashboard.actions.view")
                            ->with("row", $row)
                            ->render();
                    })
                    ->rawColumns(['action'])
                    ->make();
            } catch (Exception $e) {
                return $this->sendError($e->getMessage());
            }
        }
        return $this->sendError('Not Authorized');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param $ids
     * @return JsonResponse
     */
    public function destroy($ids): JsonResponse
    {
        $selectedIds = explode(',', $ids);
        $data = $this->notificationRepository->allQuery()->whereIn('id', $selectedIds)->get();
        if (count($data)) {
            foreach ($data as $item) {
                $item->delete();
            }
        }
        return $this->sendSuccess("Deleted Successfully!");
    }
}
