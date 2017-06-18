<?php

namespace cinema\Http\Controllers;



class testController extends Controller
{
    /**
     * Show the profile for the given user.
     *
     * @param  int  $id
     * @return Response
     */
    public function index()
    {
       return "hi";
    }

    public function nombre($nombre)
    {
       return "hi".$nombre;
    }

}