<?php

namespace k_tith\BackupViewer\Http\Controllers;

use App\Http\Controllers\Controller;
use Carbon\Carbon;
use Illuminate\Support\Facades\Storage;

class BackupViewerController extends Controller
{

    public function index(){

        $disk = Storage::disk(config('laravel-backup.backup.destination.disks'));
        $files = $disk->files(config('app.name'));
        $backups = [];
        foreach ($files as $k => $f) {
            if (substr($f, -4) == '.zip' && $disk->exists($f)) {
                $backups[] = [
                    'file_path'             => $f,
                    'file_name'             => str_replace(config('laravel-backup.backup.name') . config('app.name').'/', '', $f),
                    'file_size'             => $disk->size($f),
                    'last_modified'         => $disk->lastModified($f),
                    'last_modified_human'   => date('F jS, Y, g:ia (T)',$disk->lastModified($f)),
                    'file_size_human'       => 121,
                    'file_age'              => Carbon::parse($disk->lastModified($f))->diffForHumans(),
                ];
            }
        }
        $backups = array_reverse($backups);
        return view('backup-viewer::index', ['backups' => $backups]);
    }


}

