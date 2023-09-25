<?php

namespace App\Http\Controllers;

use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ImagesController extends Controller
{
    public function index()
    {
        $result = array();
        $result['breadcrumb'] = array();
        $result['title'] = 'Imagenes';
        array_push($result['breadcrumb'], ['module' => 'Imagenes', 'url' => '/admin/images']);
        return view('admin.images.index')->with('result', $result);
    }

    public function up(Request $request)
    {
        try {

            $width = $height = $filesize = 0;
            $info = null;
            $validated = $request->validate([
                'file' => 'required',
            ]);
            if ($request->hasFile('file')) {
                $nombre = $request->file('file')->getClientOriginalName();
                $extension = $request->file->extension();
                $name = Str::slug($nombre, '-') . '.' . $extension;
                $temporal = $request->file('file')->getRealPath();
                $folder = public_path('/images');
                $newRuta = $folder . '/' . $name;
                if (copy($temporal, $newRuta)) {
                    if (file_exists($newRuta)) {
                        $size = getimagesize($newRuta);
                        if ($size) {
                            $width = $size[0];
                            $height = $size[1];
                        }
                        try {
                            $info = exif_read_data($newRuta, 0, true);
                        } catch (\Throwable $th) {
                            //throw $th;
                            $info = null;
                        }
                        try {
                            $filesize = filesize($newRuta);
                        } catch (\Throwable $th) {
                            //throw $th;
                            $filesize = 0;
                        }
                        DB::table('images')->insert([
                            'image_name' => $name,
                            'image_info' => $info != null ? json_encode($info) : null,
                            'image_width' => $width,
                            'image_height' => $height,
                            'image_size' => $filesize,
                            'image_path' => '/images/' . $name,
                            'created_at' => date('Y-m-d H:i:s')
                        ]);
                    }
                }
            }
            return response('', 200);
        } catch (\Throwable $th) {
            //throw $th;
            return response('', 404);
        }
    }
}
