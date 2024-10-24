<?php

namespace App\Helpers;

use Illuminate\Support\Facades\File;
use Request;
use App\Models\LogActivity as LogActivityModel;


class Loggerhelper
{

    public static function error_logs($message)
    {
        $date = date('Y-m-d');
        $dirPath = "ErrorLogs/{$date}";
        if (!File::exists(storage_path("logs/{$dirPath}"))) {
            File::makeDirectory(storage_path("logs/{$dirPath}"), 0777, true, true);
        }
        $fileName = "{$dirPath}/error_log_{$date}.txt";
        File::append(storage_path("logs/{$fileName}"), $message . PHP_EOL);
    }

    // public static function logProcess($message)
    // {
    //     $date = date('Y-m-d');
    //     $dirPath = "ProcessLogs/{$date}";
    //     if (!File::exists(storage_path("logs/{$dirPath}"))) {
    //         File::makeDirectory(storage_path("logs/{$dirPath}"), 0777, true, true);
    //     }
    //     $fileName = "{$dirPath}/process_log_{$date}.txt";
    //     File::append(storage_path("logs/{$fileName}"), $message . PHP_EOL);
    // }

    public static function addToLog($subject)
    {
        $log = [];
        $log['subject'] = $subject;
        $log['url'] = Request::fullUrl();
        $log['method'] = Request::method();
        $log['ip'] = Request::ip();
        $log['agent'] = Request::header('user-agent');
        $log['user_id'] = auth()->check() ? auth()->user()->id : 1;
        LogActivityModel::create($log);
    }

    public static function logActivityLists()
    {
        return LogActivityModel::latest()->get();
    }

    ///get actiity by controller 
    // public function logActivity()
    // {
    //     $logs = \LogActivity::logActivityLists();
    //     return view('logActivity', compact('logs'));
    // }
}
