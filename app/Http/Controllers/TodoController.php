<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Todolist;

class TodoController extends Controller
{
    public function index() {
      return Todolist::all();
    }

    public function getAllActiveTodos() {
      return Todolist::where( 'isDone', false )->get();
    }

    public function getAllCompletedTodos() {
      return Todolist::where( 'isDone', true )->get();
    }

    public function store( Request $request ) {
      $todo = new Todolist( $request->all() );
      $todo->save();

      return Response::json( $todo );
    }

    public function show( $id ) {
      return Todolist::find( $id );
    }

    public function update( Request $request, $id ) {
      $todo = Todolist::find( $id );
      $todo->TodoName = $request->TodoName;
      $todo->isDone = $request->isDone;
      $todo->update();

      return Response::json( $todo );
    }
}
