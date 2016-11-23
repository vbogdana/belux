<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of StorageController
 *
 * @author Bogdana
 */

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;

class StorageController extends Controller {
    public function goToStorage($filename = [])
    {
        if (is_array($filename)) {
            $filename = implode('/', $filename);
        }
        // storage_path('app') - path to /storage/app folder
        $path = storage_path('app') . '/' . $filename;
        $file = \File::get($path);
        $type = \File::mimeType($path);

        return \Response::make($file,200)
            ->header("Content-Type", $type);
    }
}
