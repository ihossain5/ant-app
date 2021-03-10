<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class AdminHomeController extends Controller {
    public function index() {
        return view('admin.index');
    }

    public function allEmployee() {
        return view('admin.employee');
    }
    public function storeEmployee(Request $request) {

        $validator = Validator::make($request->all(), [
            'name'  => 'required',
            'email' => 'required',
            'phone' => 'required',
            'photo' => 'required',
        ]);
        if ($validator->passes()) {
            $image = $request->photo;
            if ($image) {
                $image_name      = hexdec(uniqid());
                $ext             = strtolower($image->getClientOriginalExtension());
                $image_full_name = $image_name . '.' . $ext;
                $upload_path     = 'users/';
                $upload_path1    = 'avatar/users';
                $image_url       = $upload_path . $image_full_name;
                $success         = $image->move($upload_path1, $image_full_name);
                // $img = Image::make($image)->resize(512, 512);
                // $img->save($upload_path1 . $image_full_name, 60);

            }
            $employee = User::create([
                'name'  => $request->name,
                'email' => $request->email,
                'phone' => $request->phone,
                'photo' => $image_url,
            ]);
            return back()->with(['success' => 'Employee created successfully']);
        }
        return back()->with(['errors' => $validator->errors()]);

    }
}
