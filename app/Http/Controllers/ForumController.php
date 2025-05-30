<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ForumController extends Controller
{
    public function index()
    {
        return response()->json([
            'message' => 'Data forum berhasil diambil',
            'data' => [
                // tambahkan data dummy atau dari database
                ['id' => 1, 'judul' => 'Topik A'],
                ['id' => 2, 'judul' => 'Topik B'],
            ]
        ]);
    }
}

