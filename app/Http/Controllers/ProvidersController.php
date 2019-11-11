<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Provider;

class ProvidersController extends Controller
{

    public function index()
    {
        $providers = Provider::all();

        return view('providers.index', compact('providers'));
    }

    public function create()
    {
        return view('providers.create');
    }

    public function store()
    {
        $attributes = request()->validate([
            'name' => 'required',
            'email' => 'required',
            'monthlyPayment' => 'required'
        ]);

       Provider::create($attributes);

        return redirect('/providers');
    }

    public function edit(Provider $provider)
    {
        return view('providers.edit', compact('provider'));
    }

    public function update(Provider $provider)
    {
        $provider->name = request('name');
        $provider->email = request('email');
        $provider->monthlyPayment = request('monthlyPayment');

        $provider->save();

        return redirect('/providers');
    }

    public function show(Provider $provider)
    {
        return view('providers.show', compact('provider'));
    }

    public function destroy(Provider $provider)
    {
        $provider->delete();

        return redirect('/providers');
    }
}
