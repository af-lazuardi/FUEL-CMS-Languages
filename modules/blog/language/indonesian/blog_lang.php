<?php
/*
|--------------------------------------------------------------------------
| Module Names
|--------------------------------------------------------------------------
*/
$lang['module_blog_posts'] = "Tulisan";
$lang['module_blog_categories'] = "Kategori";
$lang['module_blog_comments'] = "Komentar";
$lang['module_blog_links'] = "Tautan";
$lang['module_blog_authors'] = "Penulis";
$lang['module_blog_settings'] = "Pengaturan";

/*
|--------------------------------------------------------------------------
| Errors
|--------------------------------------------------------------------------
*/
$lang['blog_error_blank_comment'] = "Tuliskan pada kolom komentar";
$lang['blog_error_invalid_comment_email'] = "Tuliskan alamat surat elektronik yang valid";
$lang['blog_error_comment_site_submit'] = "Komentar harus diposkan melalui formulir yang terdapat pada website";
$lang['blog_error_comment_already_submitted'] = "Komentar ini pernah diposkan";
$lang['blog_error_consecutive_comments'] = "Harap tunggu untuk mengeposkan beberapa komentar yang berurutan";
$lang['blog_error_delete_uncategorized'] = "Anda tidak dapat menghapus kategori \'uncategorized\'";

/*
|--------------------------------------------------------------------------
| Page Titles
|--------------------------------------------------------------------------
*/
$lang['blog_archives_page_title'] = "Arsip";
$lang['blog_authors_list_page_title'] = "Penulis";
$lang['blog_author_posts_page_title'] = "%s Tulisan";
$lang['blog_categories_page_title'] = "Kategori";
$lang['blog_search_page_title'] = "%s Hasil Pencarian";

/*
|--------------------------------------------------------------------------
| Pagination
|--------------------------------------------------------------------------
*/
$lang['blog_page_num_title'] = "Tulisan %1s-%2s";
$lang['blog_prev_page'] = "&lt;&lt; Laman sebelumnya";
$lang['blog_next_page'] = "Laman selanjutnya &gt;&gt;";
$lang['blog_first_link'] = "";
$lang['blog_last_link'] = "";


$lang['blog_error_no_posts_to_comment'] = "Tidak ada tulisan yang dapat diberikan komentar";
$lang['blog_post_is_not_published'] = "Tulisan yang berhubungan dengan komentar ini tidak ditayangkan sehingga notifikasi tidak dikirimkan ketika ada balasan komentar":
$lang['blog_comment_notify_option1'] = "Semua";
$lang['blog_comment_notify_option2'] = "Komentator";
$lang['blog_comment_notify_option3'] = "Tidak Ada";



/***************************************************************************
IMPORTANT: SEVERAL FORM FIELD LABELS ALREADY EXIST IN THE fuel language file
***************************************************************************/

/*
|--------------------------------------------------------------------------
| Posts (several fields are in the main form_label_ common)
|--------------------------------------------------------------------------
*/
$lang['form_label_formatting'] = "Format";
$lang['form_label_author'] = "Penulis";
$lang['form_label_sticky'] = 'Sticky';
$lang['form_label_allow_comments'] = "Memperbolehkan Komentar";
$lang['form_label_categories'] = "Kategori";


/*
|--------------------------------------------------------------------------
| Comments 
|--------------------------------------------------------------------------
*/
$lang['blog_comment_monitor_subject']= "%s: Komentar telah diposkan.";
$lang['blog_comment_monitor_msg']= "Komentar telah diposkan ke tulisan anda. Untuk meninjau komentar silahkan masuk ke sistem FUEL.";
$lang['blog_comment_reply_subject']= "%1s Balas Komentar";
$lang['blog_comment_reply_msg']= "%1s komentar pada tulisan anda telah dibalas %2s.";

$lang['blog_captcha_text'] = "Tuliskan teks yang anda lihat pada gambar di atas. <br />Jika anda tidak dapat melihat tulisannya, segarkan laman anda.";
$lang['blog_comment_is_spam'] = "Komentar yang telah diposkan tidak dapat dikirim, sebab terindikasi sebagai \'spam\'";
$lang['blog_error_captcha_mismatch'] = "Teks yang anda tuliskan tidak cocok dengan gambar";

$lang['blog_email_flagged_as_spam'] = "TERINDIKASI \'SPAM\'!!!";
$lang['blog_email_published'] = "Telah Ditayangkan";
$lang['blog_email_author_name'] = "Nama Penulis";
$lang['blog_email_author_email'] = "Surat Elektronik Penulis";
$lang['blog_email_author_website'] = "Situs Web";
$lang['blog_email_author_ip'] = "IP Penulis";
$lang['blog_email_content'] = "Konten";
$lang['form_label_post_title'] = "Judul Tulisan";
$lang['form_label_comment'] = "Komentar";
$lang['form_label_comment_author_name'] = "Nama Penulis Komentar";
$lang['form_label_is_spam'] = "Apakah \'spam\'";
$lang['form_label_post_published'] = "Tulisan ditayangkan";
$lang['form_label_date_submitted'] = "Tanggal diposkan";
$lang['form_label_ip_host'] = "IP/Host";
$lang['form_label_replies'] = "Balasan";
$lang['form_label_reply'] = "Balas";
$lang['form_label_commentor'] = "Komentator";
$lang['form_label_reply_notify'] = "Beritahu";
$lang['form_label_author_ip'] = "Alamat IP Penulis";


/*
|--------------------------------------------------------------------------
| Settings 
|--------------------------------------------------------------------------
*/
$lang['form_label_uri'] = "URI";
$lang['form_label_theme_path'] = "Lokasi Tema";
$lang['form_label_theme_layout'] = "Tata Letak Tema";
$lang['form_label_theme_module'] = "Modul Tema";
$lang['form_label_use_cache'] = "Gunakan Tembolok";
$lang['form_label_allow_comments'] = "Memperbolehkan Komentar";
$lang['form_label_monitor_comments'] = "Memantau Komentar";
$lang['form_label_use_captchas'] = "Gunakan \'Captcha\'";
$lang['form_label_save_spam'] = "Simpan \'spam\'";
$lang['form_label_akismet_api_key'] = "Kunci \'Akismet\'";
$lang['form_label_multiple_comment_submission_time_limit'] = "Batasan waktu untuk mengeposkan komentar";
$lang['form_label_multiple_comment_submission_time_limit_after_html'] = " (dalam detik)";
$lang['form_label_comments_time_limit'] = "Memperbolehkan komentar untuk berapa durasi";
$lang['form_label_comments_time_limit_after_html'] = "Setelah tulisan dikirimkan pada tanggal (dalam hari)";
$lang['form_label_cache_ttl'] = "Waktu Aktif Tembolok";
$lang['form_label_asset_upload_path'] = "Alamat direktori \'asset\' untuk pengunggahan";
$lang['form_label_per_page'] = "Tiap Halaman";
