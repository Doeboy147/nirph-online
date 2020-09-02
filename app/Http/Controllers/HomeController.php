<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Repositories\User as UserRepository;
use Laravel5Helpers\Exceptions\LaravelHelpersExceptions;

class HomeController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        try {
            $data['user'] = Auth::user();
            $data['users'] = $this->getUserRepository()->getPaginated();
            return view('home', $data);
        } catch (LaravelHelpersExceptions $exception) {
            return $this->sendError($exception->getMessage());
        }
    }

    public function show($id)
    {
        try {
            $data['user'] = $this->getUserRepository()->getUser($id);
            return view('single-view', $data);
        } catch (LaravelHelpersExceptions $exception) {
            return $this->sendError($exception->getMessage());
        }
    }

    public function destroy($id)
    {
        try {
            $this->getUserRepository()->deleteUser($id);
            return $this->ajaxSuccess('Item deleted successfully', false, true);
        } catch (LaravelHelpersExceptions $exception) {
            return $this->ajaxError($exception->getMessage());
        }
    }

    protected function getUserRepository()
    {
        return new UserRepository;
    }
}
