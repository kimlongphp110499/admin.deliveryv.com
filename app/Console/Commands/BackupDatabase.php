<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Storage;
use Carbon\Carbon;

class BackupDatabase extends Command
{
    /**
     * Tên và chữ ký của command.
     *
     * @var string
     */
    protected $signature = 'backup:database';

    /**
     * Mô tả command.
     *
     * @var string
     */
    protected $description = 'Sao lưu cơ sở dữ liệu và lưu vào storage/app/delivery V dưới dạng tệp zip';

    /**
     * Thực thi command.
     *
     * @return int
     */
    public function handle()
    {
        $this->info('Bắt đầu sao lưu cơ sở dữ liệu...');

        // Đường dẫn lưu trữ
        $storagePath = storage_path('app/Delivery V');

        // Tạo thư mục nếu chưa tồn tại
        if (!is_dir($storagePath)) {
            mkdir($storagePath, 0755, true);
        }

        // Tên tệp sao lưu với timestamp
        $fileName = 'backup_' . Carbon::now()->format('Y_m_d_His') . '.sql';

        // Đường dẫn đầy đủ của tệp sao lưu
        $backupPath = $storagePath . '/' . $fileName;

        // Thông tin kết nối cơ sở dữ liệu từ .env
        $dbHost     = env('DB_HOST', 'localhost');
        $dbPort     = env('DB_PORT', 3306);
        $dbName     = env('DB_DATABASE', 'deliveryv_new');
        $dbUser     = env('DB_USERNAME', 'deliveryv_deliveryv');
        $dbPassword = env('DB_PASSWORD', 'XJQflfq[ZG$6');

        // Lệnh sao lưu cơ sở dữ liệu
        $dumpCommand = sprintf(
            'mysqldump --user=%s --password=%s --host=%s --port=%s %s > %s',
            escapeshellarg($dbUser),
            escapeshellarg($dbPassword),
            escapeshellarg($dbHost),
            escapeshellarg($dbPort),
            escapeshellarg($dbName),
            escapeshellarg($backupPath)
        );

        // Thực thi lệnh sao lưu
        $result = null;
        $output = null;
        exec($dumpCommand, $output, $result);

        if ($result !== 0) {
            $this->error('Lỗi khi sao lưu cơ sở dữ liệu.');
            return 1;
        }

        // Nén tệp sao lưu thành zip
        $zip = new \ZipArchive();
        $zipFileName = $storagePath . '/backup_' . Carbon::now()->format('Y_m_d_His') . '.zip';

        if ($zip->open($zipFileName, \ZipArchive::CREATE) === TRUE) {
            $zip->addFile($backupPath, $fileName);
            $zip->close();

            // Xóa tệp .sql sau khi nén
            unlink($backupPath);

            $this->info('Sao lưu cơ sở dữ liệu thành công. Tệp lưu tại: ' . $zipFileName);
        } else {
            $this->error('Không thể tạo tệp zip.');
            return 1;
        }
        if ($result !== 0) {
            \Log::error('Lỗi khi sao lưu cơ sở dữ liệu.');
            return 1;
        }
    
        \Log::info('Sao lưu cơ sở dữ liệu thành công.');
        return 0;
    }
}
