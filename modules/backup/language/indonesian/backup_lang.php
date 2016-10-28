<?php 
$lang['module_backup'] = "Cadangkan";

$lang['data_backup_dashboard'] = "Jangan lupa untuk <a href=\"".fuel_url('tools/backup')."\">mencadangkan Basis Data anda</a> secara rutin";
$lang['data_last_backup'] = "Cadangan Terakhir";
$lang['data_backup'] = "Data yang telah dicadangkan.";
$lang['cron_db_backup'] = "Basis Data telah dicadangkan dengan nama file: %s.";
$lang['cron_db_backup_asset'] = "Basis Data dan direktori \'assets\' telah dicadangkan dengan nama file: %s.";
$lang['cron_db_backed_up_already'] = "Basis Data telah selesai dicadangkan";
$lang['cron_db_folder_not_writable'] = "Direktori tidak dapat digunakan untuk menyimpan data (<i>not writable</i>). Pastikan direktori dapat digunakan untuk menyimpan data (<i>writable</i>)";
$lang['cron_email'] = "Surat Elektronik telah dikirim ke %ls.";
$lang['cron_email_error'] = "Terdapat kesalahan saat mengirimkan Surat Elektronik anda ke %ls.";
$lang['cron_email_subject'] = "Data cadangan \'Tugas yang Terjadwal\' (<i>cronjob</i>) untuk %ls.";
$lang['data_backup_instructions'] = "Anda sedang mencadangkan Basis Data yang anda miliki. Proses ini akan mengunduh berkas dengan format 'gzip' dari peramban yang anda pakai untuk dapat disimpan ke dalam komputer anda.";
$lang['data_backup_instructions_writable'] = "Proses ini juga mencadangkan berkas di web pusat dengan membuat direktori berdasarkan tanggal dicadangkan";
$lang['data_backup_instructions_not_writable'] = "Untuk mengunggah atau menyimpan data dengan format \'zip\' di web pusat, anda harus memastikan direktori yang hendak dipakai dapat digunakan untuk menyimpan data (<i>writable</i>) atau rubah alamat direktori di berkas \'fuel/application/config/config.php\'. <strong> Pastikan direktori tersebut dan seluruh direktori di atas direktori asal web (<i>web root</i>) tidak dapat diakses dari luar sistem atau telah diatur hak aksesnya menggunakan.htaccess </strong>";
$lang['data_backup_not_writable'] = "(tidak dapat digunakan untuk menyimpan berkas (<i>not writable</i>))";
$lang['data_backup_include_assets'] = "Apakah termasuk direktori 'assets'";
$lang['data_backup_no_backup'] = "Tidak, jangan cadangkan";
$lang['data_backup_yes_backup'] = "Iya, cadangkan";
