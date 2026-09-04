<?php
/**
 * Admin Main
 *
 * @package blesta
 * @subpackage blesta.language.id_id
 * @copyright Copyright (c) 2026, Phillips Data, Inc.
 * @license http://www.blesta.com/license/ The Blesta License Agreement
 * @link http://www.blesta.com/ Blesta
 */

$lang['AdminMain.!success.ai_settings_updated'] = 'Pengaturan AI telah berhasil diperbarui.';
$lang['AdminMain.!success.settings_updated'] = 'Pengaturan telah berhasil diperbarui.';
$lang['AdminMain.ai.badge_experimental'] = 'EKSPERIMENTAL';
$lang['AdminMain.ai.boxtitle_settings'] = 'Pengaturan AI';
$lang['AdminMain.ai.button_configure_ai'] = 'Buka Pengaturan AI Sistem';
$lang['AdminMain.ai.field_add_ai_disclaimer'] = 'Tambahkan Sanggahan yang Dihasilkan AI';
$lang['AdminMain.ai.field_add_ai_disclaimer_desc'] = 'Menambahkan pemberitahuan pada balasan yang dibuat secara otomatis yang mengindikasikan bahwa balasan tersebut dibuat oleh AI (Disarankan untuk transparansi)';
$lang['AdminMain.ai.field_analyze_trigger'] = 'Pemicu Analisis AI';
$lang['AdminMain.ai.field_analyze_trigger_desc'] = 'Mengontrol saat analisis AI dipicu untuk menghasilkan respons dan menjalankan alat.';
$lang['AdminMain.ai.field_analyze_trigger_tooltip'] = 'Pilih kapan AI harus menganalisis tiket untuk mengetahui tanggapan potensial dan penggunaan alat. "Setiap Balasan" menganalisis setiap pesan baru. "Tiket Dibuka" hanya menganalisis pembukaan tiket awal.';
$lang['AdminMain.ai.field_assistant_name'] = 'Nama Tampilan Asisten AI';
$lang['AdminMain.ai.field_assistant_name_desc'] = 'Biarkan kosong untuk menggunakan nama default: "Dukungan"';
$lang['AdminMain.ai.field_assistant_name_placeholder'] = 'Dukungan';
$lang['AdminMain.ai.field_assistant_name_tooltip'] = 'Nama yang ditampilkan untuk balasan yang dihasilkan AI di utas tiket. Ini mempersonalisasi asisten AI untuk tim dukungan Anda.';
$lang['AdminMain.ai.field_auto_reply_enabled'] = 'Mengaktifkan Balasan Tiket AI Otomatis';
$lang['AdminMain.ai.field_auto_reply_enabled_desc'] = 'Izinkan AI untuk membalas tiket secara otomatis ketika ia memiliki tingkat kepastian yang tinggi tentang jawabannya.';
$lang['AdminMain.ai.field_confidence_threshold'] = 'Ambang Batas Keyakinan';
$lang['AdminMain.ai.field_confidence_threshold_desc'] = 'Ambang batas yang lebih tinggi = lebih konservatif (lebih sedikit balasan otomatis, akurasi lebih tinggi). Direkomendasikan: 70% atau lebih tinggi.';
$lang['AdminMain.ai.field_confidence_threshold_tooltip'] = 'AI hanya akan secara otomatis membalas tiket jika tingkat kepercayaannya memenuhi atau melampaui ambang batas ini. Nilai yang lebih tinggi (90-100%) lebih konservatif dan lebih aman. Nilai yang lebih rendah (60-89%) akan menghasilkan lebih banyak balasan otomatis tetapi dengan risiko kesalahan yang lebih tinggi.';
$lang['AdminMain.ai.field_custom_disclaimer'] = 'Teks Penafian Khusus';
$lang['AdminMain.ai.field_custom_disclaimer_desc'] = 'Teks ini akan ditambahkan ke semua balasan tiket yang dibuat oleh AI.';
$lang['AdminMain.ai.field_custom_disclaimer_placeholder'] = 'Respons ini dihasilkan dengan bantuan AI.';
$lang['AdminMain.ai.field_custom_disclaimer_tooltip'] = 'Sesuaikan pesan penafian yang ditambahkan ke balasan yang dibuat oleh AI. Biarkan kosong untuk menggunakan pesan default.';
$lang['AdminMain.ai.field_enabled'] = 'Mengaktifkan Fitur AI untuk Manajer Dukungan';
$lang['AdminMain.ai.field_enabled_desc'] = 'Memungkinkan fitur-fitur bertenaga AI dalam sistem tiket termasuk respons otomatis, ringkasan, dan alat bantu.';
$lang['AdminMain.ai.field_max_queue_age_hours'] = 'Usia Antrian Maksimum (Jam)';
$lang['AdminMain.ai.field_max_queue_age_hours_desc'] = 'Buang antrian balasan AI yang lebih lama dari beberapa jam ini. Harus antara 1 dan 8760 (1 tahun). Nilai default adalah 24.';
$lang['AdminMain.ai.field_max_queue_age_hours_tooltip'] = 'Balasan klien yang mengantre yang lebih lama dari nilai ini akan dibuang oleh cron dan tidak diproses. Mencegah AI membalas tiket yang sudah basi jika cron telah dinonaktifkan dan tumpukan tiket menumpuk.';
$lang['AdminMain.ai.field_max_tokens'] = 'Token Max';
$lang['AdminMain.ai.field_max_tokens_desc'] = 'Mengontrol panjang maksimum respons yang dihasilkan AI. Default: 4000';
$lang['AdminMain.ai.field_max_tokens_tooltip'] = 'Jumlah maksimum token (kata/potongan kata) yang dapat dihasilkan oleh AI dalam satu respons. Nilai yang lebih tinggi memungkinkan respons yang lebih lama tetapi menghabiskan lebih banyak sumber daya. Kisaran umum: 100-4000 untuk sebagian besar tugas.';
$lang['AdminMain.ai.field_model'] = 'Model AI';
$lang['AdminMain.ai.field_model_desc'] = 'Model ini akan digunakan untuk semua fitur AI di Manajer Dukungan.';
$lang['AdminMain.ai.field_model_tooltip'] = 'Pilih model AI yang akan digunakan secara khusus untuk fitur Manajer Dukungan. Model yang berbeda memiliki kemampuan dan harga yang berbeda.';
$lang['AdminMain.ai.field_override_max_tokens'] = 'Mengesampingkan Token Maks';
$lang['AdminMain.ai.field_override_max_tokens_desc'] = 'Default sistem: %1$s';
$lang['AdminMain.ai.field_override_model'] = 'Mengesampingkan Model AI Default';
$lang['AdminMain.ai.field_override_model_desc'] = 'Default sistem: %1$s';
$lang['AdminMain.ai.field_override_temperature'] = 'Mengesampingkan Suhu';
$lang['AdminMain.ai.field_override_temperature_desc'] = 'Default sistem: %1$s';
$lang['AdminMain.ai.field_require_human_review'] = 'Memerlukan Tinjauan Manusia Sebelum Mengirim';
$lang['AdminMain.ai.field_require_human_review_desc'] = 'Balasan yang dibuat secara otomatis ditampilkan di dalam tiket untuk digunakan oleh staf (Disarankan)';
$lang['AdminMain.ai.field_restricted_departments'] = 'Membatasi Balasan Otomatis ke Departemen';
$lang['AdminMain.ai.field_restricted_departments_desc'] = 'Pilih departemen tiket mana yang dapat menerima balasan AI otomatis. Hapus centang semua untuk mengizinkan semua departemen.';
$lang['AdminMain.ai.field_restricted_departments_tooltip'] = 'Hanya izinkan balasan otomatis untuk departemen tiket tertentu. Biarkan semua tidak dicentang untuk mengizinkan semua departemen.';
$lang['AdminMain.ai.field_submit'] = 'Menyimpan Pengaturan AI';
$lang['AdminMain.ai.field_system_prompt'] = 'Permintaan Sistem Manajer Dukungan';
$lang['AdminMain.ai.field_system_prompt_desc'] = 'Prompt ini digunakan secara khusus untuk fitur Support Manager AI dan menggantikan prompt sistem global.';
$lang['AdminMain.ai.field_system_prompt_tooltip'] = 'Tentukan instruksi spesifik untuk AI saat menangani tiket dukungan. Perintah ini menggantikan perintah sistem global dan mendefinisikan perilaku AI secara khusus dalam sistem tiket.';
$lang['AdminMain.ai.field_temperature'] = 'Suhu';
$lang['AdminMain.ai.field_temperature_desc'] = 'Suhu yang lebih rendah = lebih fokus, suhu yang lebih tinggi = lebih kreatif. Default: 1.0';
$lang['AdminMain.ai.field_temperature_tooltip'] = 'Mengontrol keacakan dalam respons. Nilai yang lebih rendah (0,0-0,7) menghasilkan output yang lebih terfokus dan deterministik. Nilai yang lebih tinggi (1,3-2,0) menghasilkan output yang lebih kreatif dan bervariasi. Rentang 0,0 hingga 2,0';
$lang['AdminMain.ai.field_tool_assign_staff'] = 'Tetapkan ke Anggota Staf';
$lang['AdminMain.ai.field_tool_assign_staff_desc'] = 'Izinkan AI untuk menetapkan tiket ke anggota staf tertentu berdasarkan instruksi yang diminta sistem.';
$lang['AdminMain.ai.field_tool_change_priority'] = 'Ubah Prioritas Tiket';
$lang['AdminMain.ai.field_tool_change_priority_desc'] = 'Izinkan AI untuk menyesuaikan prioritas tiket (naik atau turun) ketika prioritas yang tidak sesuai dipilih oleh klien atau terdeteksi oleh analisis.';
$lang['AdminMain.ai.field_tool_close_ticket'] = 'Tutup Tiket';
$lang['AdminMain.ai.field_tool_close_ticket_desc'] = 'Izinkan AI untuk menutup tiket dalam kasus spam, pesan yang terpental, atau masalah yang sudah terselesaikan dengan jelas.';
$lang['AdminMain.ai.field_tool_instructions'] = 'Petunjuk Penggunaan Alat';
$lang['AdminMain.ai.field_tool_instructions_desc'] = 'Memberikan instruksi dan skenario spesifik di mana alat bantu harus digunakan. Teks ini akan disertakan dalam prompt sistem ketika alat diaktifkan.';
$lang['AdminMain.ai.field_tool_instructions_placeholder'] = 'Contoh: - Menugaskan masalah teknis yang terkait dengan server Linux ke John, server Windows ke Dave - Hanya menutup tiket yang jelas-jelas merupakan spam, tanggapan otomatis, atau pelanggan menunjukkan bahwa tiket tersebut telah terselesaikan pada balasan terakhir - Meningkatkan prioritas untuk masalah mendesak yang menyebutkan \'down\' atau \'offline\' ke status Darurat - Menurunkan prioritas tiket Darurat jika bukan keadaan darurat yang sebenarnya';
$lang['AdminMain.ai.field_tool_instructions_tooltip'] = 'Berikan panduan khusus kepada AI tentang kapan dan bagaimana cara menggunakan alat yang diaktifkan. Misalnya, tentukan nama anggota staf dan bidang keahlian mereka untuk penugasan tiket.';
$lang['AdminMain.ai.field_tools_available'] = 'Alat yang Tersedia';
$lang['AdminMain.ai.field_tools_available_tooltip'] = 'Pilih alat bantu mana yang boleh digunakan oleh AI. Setiap alat memungkinkan tindakan spesifik yang dapat dilakukan oleh AI saat memproses tiket.';
$lang['AdminMain.ai.field_tools_enabled'] = 'Aktifkan Alat';
$lang['AdminMain.ai.field_tools_enabled_desc'] = 'Izinkan AI untuk menggunakan alat bantu untuk manajemen tiket seperti mengubah prioritas, menutup tiket, atau menugaskan ke anggota staf.';
$lang['AdminMain.ai.heading_experimental'] = 'Fitur Eksperimental';
$lang['AdminMain.ai.heading_features'] = 'Fitur AI';
$lang['AdminMain.ai.heading_model'] = 'Konfigurasi Model';
$lang['AdminMain.ai.heading_parameters'] = 'Parameter Model';
$lang['AdminMain.ai.heading_replies'] = 'Balasan Otomatis';
$lang['AdminMain.ai.heading_system_prompt'] = 'Permintaan Sistem';
$lang['AdminMain.ai.heading_tools'] = 'Alat AI';
$lang['AdminMain.ai.option_every_reply'] = 'Setiap Balasan';
$lang['AdminMain.ai.option_ticket_opened'] = 'Hanya Tiket yang Dibuka';
$lang['AdminMain.ai.page_title'] = 'Manajer Dukungan &gt; Pengaturan AI';
$lang['AdminMain.ai.warning_not_configured_text'] = 'Fitur AI untuk Manajer Dukungan memerlukan kunci API Blesta AI. Konfigurasikan kunci API Anda di Pengaturan Sistem &gt; Kecerdasan Buatan sebelum mengaktifkan fitur AI.';
$lang['AdminMain.ai.warning_not_configured_title'] = 'Diperlukan Kunci API Blesta AI';
$lang['AdminMain.settings.boxtitle_settings'] = 'Pengaturan';
$lang['AdminMain.settings.field_avatar'] = 'Avatar';
$lang['AdminMain.settings.field_default_avatar'] = 'Gambar Avatar Default';
$lang['AdminMain.settings.field_submit'] = 'Memperbarui Pengaturan';
$lang['AdminMain.settings.heading_avatar_settings'] = 'Pengaturan Avatar';
$lang['AdminMain.settings.option_default'] = 'Gunakan avatar khusus saja';
$lang['AdminMain.settings.option_fallback'] = 'Gunakan Gravatar tetapi timpa jika avatar khusus telah diatur';
$lang['AdminMain.settings.option_gravatar'] = 'Gunakan Gravatar';
$lang['AdminMain.settings.page_title'] = 'Manajer Dukungan &gt; Pengaturan';
$lang['AdminMain.settings.text_avatar_recommendation'] = 'Direkomendasikan: 150x150px, JPG atau PNG, maksimal 2MB';
$lang['AdminMain.settings.text_remove_avatar'] = 'Menghapus Gambar';

