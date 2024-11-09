<?php

namespace App\Http\Controllers;

use App\Models\Client;
use Illuminate\Http\Request;

class ClientControlller extends Controller
{
    public function index()
    {
      $clients = Client::all();
      return view('clients.index', compact('clients'));
    }  
    public function create()
    {
      $clients = Client::all();
      return view('clients.create', compact('clients'));
    }
    public function store(Request $request)
    {
      ClientControlller::create($request->all());
      return redirect('albums')->with('success', 'Client create successfully');
    }
    public function edit($id)
    {
      $client = Client::findOrFail($id);
      return view('clients.edit', compact('clients'));
    }
    public function update(Request $request, $id)
    {
      $client = Client::findOrFail($id);
      $client->update($request->all());
      return redirect('client')->with('Success', 'Client updated successfully');
    }
    public function destroy($id)
    {
      $client = Client::findOrFail($id);
      $client->delete();
      return redirect('clients')->with('Success', 'Client deleted successfullty');
    }   
}
