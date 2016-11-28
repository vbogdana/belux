<?php

/**
 * Description of PackageController
 *
 * @author Bogdana
 */

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;

class PackageController extends Controller {
    
    public function goToPackage($package)
    {
        $path = '/packages/' . $package;
        return \View::make($path);
    }
}
