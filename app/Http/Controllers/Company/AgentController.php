<?php

namespace App\Http\Controllers\Company;

use App\Http\Controllers\Controller;

class AgentController extends Controller
{
    public function AgentDashboard(){
        dd("comap");
        return view('agent.agent_dashboard');
    }
}
