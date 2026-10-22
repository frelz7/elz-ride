<?php
namespace App\Http\Controllers;

use App\Models\Motor;
use Illuminate\Http\Request;

class MotorController extends Controller
{
    public function index()
    {
        $motors = Motor::latest()->get();
        return view('motor.index', compact('motors'));
    }

    public function create()
    {
        return view('motor.create');
    }

    public function store(Request $request)
    {
        Motor::create($request->all());
        return redirect()->route('motor.index');
    }

    public function edit(Motor $motor)
    {
        return view('motor.edit', compact('motor'));
    }

    public function update(Request $request, Motor $motor)
    {
        $motor->update($request->all());
        return redirect()->route('motor.index');
    }

    public function destroy(Motor $motor)
    {
        $motor->delete();
        return redirect()->route('motor.index');
    }
}