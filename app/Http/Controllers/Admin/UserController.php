<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\UserCreateRequest;
use App\Http\Requests\UserUpdateRequest;
use App\Models\User;
use App\Repositories\UserRepository;
use Carbon\Carbon;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Yajra\DataTables\Exceptions\Exception;

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

    /**
     * @throws \Exception
     */
    public function index(Request $request): JsonResponse
    {
        if ($request->ajax()) {
            $companies = $this->userRepository->allQuery()->where('role', 'company');
            try {
                return datatables()->of($companies)
                    ->addColumn('plan', function ($row) {
                        return $row->plan . ' year';
                    })
                    ->addColumn('expire_date', function ($row) {
                        return view("admin.users.actions.renew")
                            ->with("row", $row)
                            ->render();
                    })
                    ->addColumn('action', function ($row) {
                        $canEdit = $row->created_by == auth()->check() && auth()->user()->role == User::ADMIN_ROLE ? 1 : 0;
                        $canDelete = $row->created_by == auth()->check() && auth()->user()->role == User::ADMIN_ROLE ? 1 : 0;
                        return view("admin.users.actions.actions")
                            ->with("id", $row->id)
                            ->with("canEdit", $canEdit)
                            ->with("canDelete", $canDelete)
                            ->render();
                    })
                    ->rawColumns(['expire_date','action'])
                    ->make();
            } catch (Exception $e) {
                return $this->sendError($e->getMessage());
            }
        }
        return $this->sendError('Not Authorized');
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
        $input['role'] = 'company';
        $input['plan_date'] = Carbon::now()->toDateString();
        $user = $this->userRepository->create($input);
        if (isset($user->id)) {
            return $this->sendResponse($user, 'Successfully Created!');
        } else {
            return $this->sendError('Something went Wrong!', 400);
        }
    }

    /**
     * Show Record by id.
     *
     * @param $id
     * @return JsonResponse
     * @throws \Exception
     */
    public function show($id): JsonResponse
    {
        $company = $this->userRepository->find($id);
        if (!isset($company->id)) {
            return $this->sendError("Company not found");
        }
        return $this->sendResponse($company, "Record Found");
    }

    /**
     * Update the specified resource in storage.
     *
     * @param int $id
     * @param UserUpdateRequest $request
     * @return JsonResponse
     */
    public function update($id, UserUpdateRequest $request): JsonResponse
    {
        $input = $request->except('password');
        try {
            $company = $this->userRepository->find($id);
        } catch (\Exception $e) {
            return $this->sendError("Company not found");
        }

        if (!empty($input["newPassword"])) {
            $input['password'] = $input["newPassword"];
        }
        $data = $company->fill($input)->save();
        return $this->sendResponse($data, "Record Updated!");
    }

    /**
     * Update the Plan Date resource in storage.
     *
     * @param int $id
     * @param $plan
     * @return JsonResponse
     */
    public function updatePlan($id, $plan): JsonResponse
    {
        try {
            $company = $this->userRepository->find($id);
        } catch (\Exception $e) {
            return $this->sendError("Company not found");
        }

        $company->plan = $plan;
        $company->plan_date = Carbon::now()->toDateString();
        $company->save();
        return $this->sendSuccess("Plan Update Successfully!");
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return JsonResponse
     * @throws \Exception
     */
    public function destroy($id): JsonResponse
    {
        $company = $this->userRepository->find($id);
        if (!isset($company->id)) {
            return $this->sendError("Company not found");
        }

        $company->delete();
        return $this->sendResponse($company, "Record Deleted!");
    }

}
