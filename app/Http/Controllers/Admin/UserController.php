<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\UserCreateRequest;
use App\Models\User;
use App\Repositories\UserRepository;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * @var UserRepository
     */
    protected $userRepository;

    /**
     * UserController constructor.
     * @param UserRepository $userRepository
     */
    public function __construct(UserRepository $userRepository)
    {
        $this->userRepository = $userRepository;
    }

    public function index(Request $request)
    {
        if ($request->ajax()) {
//      $categories = CtdCategory::all();
            $categories = User::query()->orderBy('category_name');
            return datatables()->of($categories)
                ->addColumn('total_issue', function ($row) {
                    return 0;
                })
                ->addColumn('total_purchase', function ($row) {
                    return 0;
                })
                ->addColumn('total_remaining', function ($row) {
                    return 0;
                })
                ->addColumn('action', function ($row) {
                    $canEdit = $row->created_by == auth()->id() || auth()->user()->hasRole(['Super Admin', 'Support', 'Admin CTD', 'Executive', 'Incharge HQ']) ? 1 : 0;
                    $canDelete = $row->created_by == auth()->id() || auth()->user()->hasRole(['Super Admin', 'Support', 'Admin CTD', 'Executive', 'Incharge HQ']) ? 1 : 0;
                    return view("actions")
                        ->with("id", $row->id)
                        ->with("canEdit", $canEdit)
                        ->with("canDelete", $canDelete)
                        ->render();
                })
                ->make(true);
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param UserCreateRequest $request
     * @return JsonResponse
     */
    public function store(UserCreateRequest $request): JsonResponse
    {
        $input = $request->all();
        $input['created_by'] = auth()->id();
        $user = $this->userRepository->create($input);
        if (isset($user->id)) {
            return $this->sendResponse($user, 'Successfully Created!');
        } else {
            return $this->sendError('Something went Wrong!', 400);
        }
    }

    public function show()
    {
    }

    public function update()
    {
    }

    public function delete()
    {
    }

}
