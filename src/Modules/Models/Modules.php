<?php

namespace Studio3S\Modules\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Http\Request;

class Modules extends Model
{
    use SoftDeletes;

    protected $table = "modules";
    protected $fillable = array("name", "slug", "description", "active", "order");

    public function getModulesValidateRules()
    {
        return array(
            "name" => ["required"],
        );
    }

    public function getModulesValidateMessages()
    {
        return array(
            "name.required" => "Nhập tên module",
        );
    }

    public function getModules(Request $request)
    {
        # code...
    }

    public function createModules(Request $request)
    {
        # code...
    }

    public function updateModules($slug, Request $request)
    {
        # code...
    }

    public function deleteModule($slug)
    {
        # code...
    }
}
