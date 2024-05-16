<?php

namespace App\Http\Controllers;

use App\Models\Role;
use Illuminate\Http\Request;

class RoleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index() //afficher la tableau des roles sur la page 
    {
        //variable role qui recupere l'ensemble des roles pour envoyer sur la page html
        $roles = Role::get();
        return View('role.index', compact('roles'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create() //formulaire ou on ajoute les role
    {
        //retourner la page
        return View('role.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request) //prendre en parametre un request
    {
        //
        $roles=new Role();
        $roles->intitule=$request->intitule;
        $roles->save();
        return redirect()->route('role_index');
    }

    /**
     * Display the specified resource.
     */
    public function show($id) //recuperer un role en foction de son id
    {
        //
        $roles=Role::find($id);
        if($roles){
            return View('role.show', compact('roles'));
        }
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id) //va nous renvoyer le formulaire qui permet de verifier
    {
        //
        $roles=Role::find($id);
        return View('role.edit', compact ('roles'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id) //la methode qui permet de modiie dans la base de donnee
    {
        //
        $roles=Role::find($id);
        if($roles){
            $roles->intitule=$request->intitule;
            $roles->save();
            returnredirect()->route('role_index');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id) // delete dans la base de donnee
    {
        //
        $roles=Role::find($id);
        if($roles){
            $roles->delete();
            returnredirect()->route('role_index');
        }
    }
}