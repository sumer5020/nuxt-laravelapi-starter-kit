<?php

namespace App\Helpers;

use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Monolog\Formatter\LineFormatter;
use Monolog\Handler\StreamHandler;
use Monolog\Logger;
use Monolog\Processor\WebProcessor;

class ActivityLogger
{
    // The 7 layer of log system
    // Tip: use this to log some data to specific file and folder
    // Use example: ActivityLogger::log('registration', 'debug', 'test', ['key' => 'value']);
    static function log($channel_name="api.app", $level="debug", $message="", $context=[])
    {
        // Get current user
        $auth_user = Auth::user();
        $log_folder = 'gust';

        if ($auth_user != null) {
            $log_folder = $auth_user['id'] . '_' . $auth_user['email'];
        }

        $path = 'userLogs/' . Carbon::now()->format('Y-M') . '/' . $log_folder . '/';

        // set context
        $context = empty($context) ? [] : (is_array($context) ? $context : [$context]);

        // set logger
        $logger = new Logger($channel_name);

        // set processor
        $logger->pushProcessor(new WebProcessor());

        // set formatter
        $dateFormat = "Y-m-d H:i:s";
        $output = "[%datetime%] %channel%.%level_name%: %message% %context% %extra%\n";
        $formatter = new LineFormatter($output, $dateFormat);

        // set handler
        switch ($level) {
            case "emergency": {
                    $stream = new StreamHandler(storage_path($path . 'emergency.log'), Logger::EMERGENCY);
                    $stream->setFormatter($formatter);
                    $logger->pushHandler($stream);

                    $logger->emergency($message, $context);
                    break;
                }
            case "alert": {
                    $stream = new StreamHandler(storage_path($path . 'alert.log'), Logger::ALERT);
                    $stream->setFormatter($formatter);
                    $logger->pushHandler($stream);

                    $logger->alert($message, $context);
                    break;
                }
            case "critical": {
                    $stream = new StreamHandler(storage_path($path . 'critical.log'), Logger::CRITICAL);
                    $stream->setFormatter($formatter);
                    $logger->pushHandler($stream);

                    $logger->critical($message, $context);
                    break;
                }
            case "error": {
                    $stream = new StreamHandler(storage_path($path . 'error.log'), Logger::ERROR);
                    $stream->setFormatter($formatter);
                    $logger->pushHandler($stream);

                    $logger->error($message, $context);
                    break;
                }
            case "warning": {
                    $stream = new StreamHandler(storage_path($path . 'warning.log'), Logger::WARNING);
                    $stream->setFormatter($formatter);
                    $logger->pushHandler($stream);

                    $logger->warning($message, $context);
                    break;
                }
            case "notice": {
                    $stream = new StreamHandler(storage_path($path . 'notice.log'), Logger::NOTICE);
                    $stream->setFormatter($formatter);
                    $logger->pushHandler($stream);

                    $logger->notice($message, $context);
                    break;
                }
            case "info": {
                    $stream = new StreamHandler(storage_path($path . 'info.log'), Logger::INFO);
                    $stream->setFormatter($formatter);
                    $logger->pushHandler($stream);

                    $logger->info($message, $context);
                    break;
                }
            case "debug": {
                    $stream = new StreamHandler(storage_path($path . 'debug.log'), Logger::DEBUG);
                    $stream->setFormatter($formatter);
                    $logger->pushHandler($stream);

                    $logger->debug($message, $context);
                    break;
                }
        }
    }
}
