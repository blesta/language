<?php
/**
 * Admin System Ai
 *
 * @package blesta
 * @subpackage blesta.language.id_id
 * @copyright Copyright (c) 2026, Phillips Data, Inc.
 * @license http://www.blesta.com/license/ The Blesta License Agreement
 * @link http://www.blesta.com/ Blesta
 */

$lang['AdminSystemAi.!error.api_key_required'] = 'Masukkan kunci API.';
$lang['AdminSystemAi.!error.auth_failed'] = 'Otentikasi gagal. Periksa nama pengguna dan kunci lisensi Anda.';
$lang['AdminSystemAi.!error.connection_failed'] = 'Tidak dapat terhubung ke API AI: %1$s';
$lang['AdminSystemAi.!error.invalid_api_key'] = 'Kunci API tidak valid.';
$lang['AdminSystemAi.!error.invalid_request'] = 'Permintaan tidak valid.';
$lang['AdminSystemAi.!error.key_already_exists'] = 'Kunci API telah dibuat untuk langganan Blesta AI Anda dan tidak dapat diperoleh kembali. Silakan cabut kunci yang ada melalui halaman Kelola AI untuk layanan Anda di account.blesta.com, lalu coba lagi.';
$lang['AdminSystemAi.!error.no_license_key'] = 'Kunci lisensi Blesta tidak ditemukan. Silakan konfigurasikan lisensi Anda terlebih dahulu.';
$lang['AdminSystemAi.!error.privacy_not_acknowledged'] = 'Anda harus menyetujui pemberitahuan privasi sebelum menyimpan.';
$lang['AdminSystemAi.!error.request_failed'] = 'Permintaan gagal. Silakan coba lagi.';
$lang['AdminSystemAi.!error.username_required'] = 'Masukkan nama pengguna account.blesta.com Anda.';
$lang['AdminSystemAi.!success.api_key_fetched'] = 'Kunci API berhasil diambil dari akun Blesta Anda.';
$lang['AdminSystemAi.!success.settings_updated'] = 'Pengaturan AI berhasil diperbarui!';
$lang['AdminSystemAi.index.boxtitle_ai'] = 'Pengaturan AI';
$lang['AdminSystemAi.index.degraded_model'] = 'Model yang saat ini dipilih, "%1$s", tidak lagi tersedia. Fitur AI untuk sementara menggunakan "%2$s". Silakan pilih model default baru di bawah ini, lalu simpan.';
$lang['AdminSystemAi.index.field.ai_api_key'] = 'Kunci API';
$lang['AdminSystemAi.index.field.ai_chatbot_staff_groups'] = 'Akses Grup Staf';
$lang['AdminSystemAi.index.field.ai_default_model'] = 'Model Default';
$lang['AdminSystemAi.index.field.ai_email_context_depth'] = 'Kedalaman Hubungan';
$lang['AdminSystemAi.index.field.ai_email_context_examples'] = 'Sertakan Contoh Data';
$lang['AdminSystemAi.index.field.ai_email_context_schemas'] = 'Sertakan Definisi Skema';
$lang['AdminSystemAi.index.field.ai_enabled'] = 'Mengaktifkan Fitur AI';
$lang['AdminSystemAi.index.field.ai_feature_chatbot'] = 'Chatbot';
$lang['AdminSystemAi.index.field.ai_feature_email_templates'] = 'Templat Email';
$lang['AdminSystemAi.index.field.ai_feature_package_descriptions'] = 'Deskripsi Paket';
$lang['AdminSystemAi.index.field.ai_global_prompt'] = 'Prompt Sistem Global (Default)';
$lang['AdminSystemAi.index.field.ai_max_tokens'] = 'Token Max';
$lang['AdminSystemAi.index.field.ai_privacy_acknowledged'] = 'Saya telah membaca dan memahami pemberitahuan privasi di atas.';
$lang['AdminSystemAi.index.field.ai_temperature'] = 'Suhu';
$lang['AdminSystemAi.index.field.submit'] = 'Memperbarui Pengaturan';
$lang['AdminSystemAi.index.heading_api'] = 'Konfigurasi API';
$lang['AdminSystemAi.index.heading_beta'] = 'Pemberitahuan Fitur Beta';
$lang['AdminSystemAi.index.heading_email_context'] = 'Pengaturan Konteks Templat Email';
$lang['AdminSystemAi.index.heading_features'] = 'Fitur yang Diaktifkan';
$lang['AdminSystemAi.index.heading_model'] = 'Model Default';
$lang['AdminSystemAi.index.heading_parameters'] = 'Parameter Model';
$lang['AdminSystemAi.index.heading_privacy'] = 'Pemberitahuan Privasi';
$lang['AdminSystemAi.index.heading_privacy_acknowledgment'] = 'Pengakuan Privasi';
$lang['AdminSystemAi.index.heading_prompts'] = 'Petunjuk Sistem';
$lang['AdminSystemAi.index.model_pricing'] = '(%1$s / %2$s kredit per 1.000 token)';
$lang['AdminSystemAi.index.model_recommended'] = '(Direkomendasikan)';
$lang['AdminSystemAi.index.page_title'] = 'Pengaturan &gt; Sistem &gt; AI';
$lang['AdminSystemAi.index.text_api_status'] = 'Status API';
$lang['AdminSystemAi.index.text_balance'] = 'Saldo: %1$s %2$s';
$lang['AdminSystemAi.index.text_beta_notice'] = 'Fitur ini saat ini masih dalam versi beta dan mungkin memberikan hasil yang tidak terduga atau tidak akurat. Gunakan dengan bijaksana.';
$lang['AdminSystemAi.index.text_connected'] = 'Berhasil terhubung ke Blesta AI.';
$lang['AdminSystemAi.index.text_connection_error'] = 'Gagal terhubung ke Blesta AI. Periksa kunci API Anda.';
$lang['AdminSystemAi.index.text_credits_used'] = 'Kredit yang Digunakan (Bulan Ini)';
$lang['AdminSystemAi.index.text_email_context_depth'] = 'Mengontrol seberapa dalam hubungan yang diikuti (misalnya, faktur → klien → kontak). Default: 2';
$lang['AdminSystemAi.index.text_email_context_examples'] = 'Sertakan nilai data sampel untuk membantu AI memahami format dan struktur data.';
$lang['AdminSystemAi.index.text_email_context_schemas'] = 'Sertakan informasi jenis bidang dan skema basis data dalam konteks.';
$lang['AdminSystemAi.index.text_feature_chatbot'] = 'Chatbot bertenaga AI untuk bantuan staf';
$lang['AdminSystemAi.index.text_feature_email_templates'] = 'Pengeditan dan peningkatan templat email dengan bantuan AI';
$lang['AdminSystemAi.index.text_feature_package_descriptions'] = 'Membuat deskripsi produk dan layanan yang menarik';
$lang['AdminSystemAi.index.text_features_intro'] = 'Pilih fitur inti Blesta mana yang harus diaktifkan dengan bantuan AI. Plugin dapat mengakses fitur AI dan dikonfigurasikan secara independen.';
$lang['AdminSystemAi.index.text_fetch_key'] = 'Ambil dari Akun Blesta Saya';
$lang['AdminSystemAi.index.text_global_prompt_help'] = 'Perintah ini berlaku untuk semua fitur AI kecuali jika ditimpa di dalam fitur tersebut.';
$lang['AdminSystemAi.index.text_key_valid'] = 'Kunci API divalidasi dan disimpan';
$lang['AdminSystemAi.index.text_last_api_call'] = 'Panggilan API Terakhir';
$lang['AdminSystemAi.index.text_manual_entry'] = 'Masukkan kunci API Anda secara manual atau ambil secara otomatis dari akun Anda.';
$lang['AdminSystemAi.index.text_no_calls_yet'] = 'Belum ada panggilan';
$lang['AdminSystemAi.index.text_privacy_last_acknowledged'] = 'Terakhir diakui di %1$s.';
$lang['AdminSystemAi.index.text_privacy_notice'] = 'Permintaan dikirim ke penyedia AI pihak ketiga (misalnya, OpenAI, Anthropic) untuk diproses. Layanan AI Blesta tidak menyimpan data percakapan AI; namun, kami tidak mengontrol cara penyedia layanan ini menangani atau menyimpan data. Hindari mengirimkan informasi sensitif atau rahasia.';
$lang['AdminSystemAi.index.text_remaining_credits'] = 'Sisa Kredit';
$lang['AdminSystemAi.index.text_select_model'] = 'Pilih model';
$lang['AdminSystemAi.index.text_staff_groups_help'] = 'Tahan Ctrl (Cmd pada Mac) untuk memilih beberapa grup.';
$lang['AdminSystemAi.index.text_status_active'] = 'Aktif';
$lang['AdminSystemAi.index.text_temperature_range'] = '(0.0 - 2.0)';
$lang['AdminSystemAi.index.text_validating'] = 'Memvalidasi...';
$lang['AdminSystemAi.index.tooltip.ai_api_key'] = 'Kunci API Blesta AI Anda. Dapatkan ini dari account.blesta.com.';
$lang['AdminSystemAi.index.tooltip.ai_chatbot_staff_groups'] = 'Pilih grup staf mana yang dapat mengakses chatbot AI. Beberapa grup dapat dipilih.';
$lang['AdminSystemAi.index.tooltip.ai_default_model'] = 'Model AI default yang digunakan untuk penyelesaian obrolan.';
$lang['AdminSystemAi.index.tooltip.ai_email_context_depth'] = 'Kedalaman maksimum untuk melintasi hubungan model. Nilai yang lebih tinggi mencakup lebih banyak data terkait tetapi meningkatkan penggunaan token. Rentang: 1-5.';
$lang['AdminSystemAi.index.tooltip.ai_enabled'] = 'Mengaktifkan atau menonaktifkan fitur AI di seluruh sistem.';
$lang['AdminSystemAi.index.tooltip.ai_global_prompt'] = 'Instruksi default yang dikirim ke model AI dengan setiap permintaan. Hal ini mendefinisikan perilaku dan konteks AI di semua fitur.';
$lang['AdminSystemAi.index.tooltip.ai_max_tokens'] = 'Jumlah maksimum token yang akan dihasilkan sebagai tanggapan.';
$lang['AdminSystemAi.index.tooltip.ai_temperature'] = 'Mengontrol keacakan. Nilai yang lebih rendah lebih deterministik, nilai yang lebih tinggi lebih kreatif. Rentang: 0,0 hingga 2,0';
$lang['AdminSystemAi.modal.button.authenticate'] = 'Mengotentikasi';
$lang['AdminSystemAi.modal.button.cancel'] = 'Batal';
$lang['AdminSystemAi.modal.field.username'] = 'Nama pengguna';
$lang['AdminSystemAi.modal.field.username_placeholder'] = 'Masukkan nama pengguna akun Anda';
$lang['AdminSystemAi.modal.heading_fetch'] = 'Ambil dari Akun Blesta Saya';
$lang['AdminSystemAi.modal.text_authenticating'] = 'Mengotentikasi...';
$lang['AdminSystemAi.modal.text_info'] = 'Nama pengguna Anda di account.blesta.com dan kunci lisensi Blesta Anda akan digunakan untuk memverifikasi lisensi Anda serta secara otomatis mengambil kunci API Blesta AI yang baru. Jika kunci sudah pernah dibuat, kunci tersebut harus dicabut terlebih dahulu melalui halaman Kelola AI untuk layanan Anda di account.blesta.com sebelum kunci baru dapat diterbitkan.';
$lang['AdminSystemAi.modal.text_subtitle'] = 'Nama pengguna Anda diperlukan untuk mengambil kunci API Anda';

