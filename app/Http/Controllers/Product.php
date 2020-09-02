<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Laravel5Helpers\Exceptions\LaravelHelpersExceptions;
use App\Repositories\Product as Repository;
use App\Definitions\Product as Definition;

class Product extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        try {
            $data['user'] = Auth::user();
            $data['products'] = $this->getRepository()->getPaginated();
            return view('products.index', $data);
        } catch (LaravelHelpersExceptions $exception) {
            return $this->sendError($exception->getMessage());
        }
    }

    public function save(Request $request)
    {
        try {
            $this->getRepository()->createResource($this->getDefinition($request->all()));
            return $this->ajaxSuccess('Product added successfully', false, true);
        } catch (LaravelHelpersExceptions $exception) {
            return $this->ajaxError($exception->getMessage());
        }
    }

    public function show($id)
    {
        try {
            $data['product'] = $this->getRepository()->getResource($id);
            return view('products.view', $data);
        } catch (LaravelHelpersExceptions $exception) {
            return $this->sendError($exception->getMessage());
        }
    }

    public function destroy($id)
    {
        try {
            $this->getRepository()->deleteResource($id);
            return $this->ajaxSuccess('Product removed successfully', false, true);
        }catch (LaravelHelpersExceptions $exception) {
            return $this->ajaxError($exception->getMessage());
        }
    }

    public function updateProduct(Request $request, $id)
    {
        try {
            $this->getRepository()->editResource($this->getDefinition($request->all()), $id);
            return $this->ajaxSuccess('Product updated successfully', route('products'), false);
        } catch (LaravelHelpersExceptions $exception) {
            return $this->ajaxError($exception->getMessage());
        }
    }

    protected function getRepository()
    {
        return new Repository;
    }

    protected function getDefinition($resquest)
    {
        return new Definition($resquest);
    }
}

