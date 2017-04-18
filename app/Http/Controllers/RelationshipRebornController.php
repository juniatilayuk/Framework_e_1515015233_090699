<?php
namespace App\Http\Controllers;
use App\Dosen;

class RelationshipRebornController extends Controller
{
    public function UjiDosentHave()
    {
        return Dosen::deosentHave('deosen_matakuliah')->get();
    }
    public function UjiHas()
    {
        return Dosen::has('deosen_matakuliah')->get();
    }
}