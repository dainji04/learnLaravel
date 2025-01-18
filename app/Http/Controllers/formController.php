<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormController extends Controller
{
    // Hiển thị form
    public function showForm()
    {
        return view('user');
    }

    // Xử lý dữ liệu từ form
    public function handleForm(Request $request)
    {
        // Lấy dữ liệu từ form
        $name = $request->input('name');
        $email = $request->input('email');

        // Hiển thị dữ liệu (hoặc xử lý tiếp)
        return "Tên: $name, Email: $email";
    }
}
