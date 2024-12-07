<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Storage;

class BackupStorage extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'storage:backup';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Backup Laravel storage to backups directory';

    public function __construct()
    {
        parent::__construct();
    }

    public function handle()
    {
        $source = storage_path('app/public');

        $backupDir = '/home/deliveryv/backups/storage_backup_' . now()->format('Y_m_d_His');

        if (!is_dir($backupDir)) {
            mkdir($backupDir, 0755, true);
        }

        $this->copyFolder($source, $backupDir);

        $this->deleteOldBackups();

        $this->info("Backup completed! Files copied to: {$backupDir}");
    }

    private function copyFolder($source, $destination)
    {
        if (is_dir($source)) {
            @mkdir($destination, 0755, true);
            $files = scandir($source);
            foreach ($files as $file) {
                if ($file === '.' || $file === '..') continue;
                $src = $source . '/' . $file;
                $dest = $destination . '/' . $file;
                if (is_dir($src)) {
                    $this->copyFolder($src, $dest);
                } else {
                    copy($src, $dest);
                }
            }
        }
    }

    private function deleteOldBackups()
    {
        $backupPath = '/home/deliveryv/backups/';
        $files = glob($backupPath . 'storage_backup_*');
        $expireTime = 5 * 24 * 60 * 60;

        foreach ($files as $file) {
            if (filemtime($file) < time() - $expireTime) {
                exec("rm -rf {$file}");
            }
        }
    }
}
