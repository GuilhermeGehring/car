<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\State;
use \Exception;

class StateController extends Controller {

	public function index() {
		$states = State::all();
		return view('state.index', ['states' => $states]);
	}

	public function create() {
		return view('state.create');
	}

	public function store(Request $request) {
		try {
			$state = new State;

			$state->name    = $request->name;
			$state->acronym = $request->acronym;

			$state->save();
			return redirect()->route('state.index');
		} catch (Exception $e) {
			echo $e->getMessage();
		}

	}

	public function edit($id) {
		$states = State::find($id);
		return view('state.edit', ['states' => $states]);
	}

	public function update(Request $request, $id) {
	  try{
      $state = State::find($id);

      $state->name    = $request->name;
      $state->acronym = $request->acronym;

      $state->save();
      return redirect()->route('state.index');
    } catch (Exception $e){
      echo $e->getMessage();
    }

	}

	public function destroy($id) {
		$state = State::find($id);

		$state->delete();
		return redirect()->route('state.index');
	}

}
