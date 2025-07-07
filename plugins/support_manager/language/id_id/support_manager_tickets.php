<?php
/**
 * Support Manager Tickets
 *
 * @package blesta
 * @subpackage blesta.language.id_id
 * @copyright Copyright (c) 2025, Phillips Data, Inc.
 * @license http://www.blesta.com/license/ The Blesta License Agreement
 * @link http://www.blesta.com/ Blesta
 */

$lang['SupportManagerTickets.reassign_note'] = 'Tiket ini dialihkan ke %1$s. Balasan klien sebelumnya telah ditugaskan kembali ke klien ini dan mungkin dibuat oleh orang lain.';
$lang['SupportManagerTickets.log.unassigned'] = 'Tidak Ditugaskan';
$lang['SupportManagerTickets.log.ticket_staff_id'] = 'Ditugaskan ke %1$s.';
$lang['SupportManagerTickets.log.status'] = 'Status telah diubah menjadi %1$s.';
$lang['SupportManagerTickets.log.priority'] = 'Prioritas telah diubah menjadi %1$s.';
$lang['SupportManagerTickets.log.summary'] = 'Ringkasan telah diperbarui.';
$lang['SupportManagerTickets.log.department_id'] = 'Departemen telah diubah menjadi %1$s.';
$lang['SupportManagerTickets.type.log'] = 'Log';
$lang['SupportManagerTickets.type.note'] = 'Catatan';
$lang['SupportManagerTickets.type.reply'] = 'Balas';
$lang['SupportManagerTickets.status.trash'] = 'Sampah';
$lang['SupportManagerTickets.status.closed'] = 'Ditutup';
$lang['SupportManagerTickets.status.on_hold'] = 'Ditunda';
$lang['SupportManagerTickets.status.in_progress'] = 'Sedang Berlangsung';
$lang['SupportManagerTickets.status.awaiting_reply'] = 'Menunggu Balasan Klien';
$lang['SupportManagerTickets.status.open'] = 'Menunggu Balasan Staf';
$lang['SupportManagerTickets.priority.low'] = 'Rendah';
$lang['SupportManagerTickets.priority.medium'] = 'Sedang';
$lang['SupportManagerTickets.priority.high'] = 'Tinggi';
$lang['SupportManagerTickets.priority.critical'] = 'Kritis';
$lang['SupportManagerTickets.priority.emergency'] = 'Darurat';
$lang['SupportManagerTickets.merge.reply'] = 'Tiket ini telah digabungkan menjadi tiket #%1$s.';
$lang['SupportManagerTickets.!error.client_id.company'] = 'Setidaknya satu tiket tidak dimiliki oleh perusahaan yang sama dengan klien yang diberikan.';
$lang['SupportManagerTickets.!error.ticket_ids[].exists'] = 'Setidaknya satu ID tiket tidak valid.';
$lang['SupportManagerTickets.!error.tickets.department_matches'] = 'Setidaknya salah satu tiket tidak dapat ditugaskan ke departemen yang diberikan karena bukan milik perusahaan yang sama.';
$lang['SupportManagerTickets.!error.tickets.service_matches'] = 'Setidaknya salah satu tiket tidak dapat ditugaskan ke layanan yang diberikan karena tiket tersebut bukan milik klien terkait.';
$lang['SupportManagerTickets.!error.merge_into.itself'] = 'Tiket tidak dapat digabungkan dengan tiket itu sendiri.';
$lang['SupportManagerTickets.!error.tickets.valid'] = 'Setidaknya satu tiket yang dipilih tidak valid, ditutup, atau bukan milik klien yang sama dengan tiket yang dipilih.';
$lang['SupportManagerTickets.!error.replies.notes'] = 'Catatan balasan tiket tidak boleh dipisah menjadi tiket terpisah tanpa menyertakan balasan tiket.';
$lang['SupportManagerTickets.!error.replies.valid'] = 'Setidaknya satu ID balasan tiket tidak valid, atau semua balasan telah dipilih. Anda harus menyisakan setidaknya satu balasan yang tersisa.';
$lang['SupportManagerTickets.!error.client_id.attached_to'] = 'Balasan tiket tidak boleh berasal dari klien yang berbeda.';
$lang['SupportManagerTickets.!error.details.empty'] = 'Silakan masukkan beberapa detail tentang tiket ini.';
$lang['SupportManagerTickets.!error.type.new_valid'] = 'Tiket baru harus memiliki jenis balasan \'reply\'.';
$lang['SupportManagerTickets.!error.type.format'] = 'Pilih jenis balasan yang valid.';
$lang['SupportManagerTickets.!error.ticket_id.exists'] = 'ID tiket tidak valid.';
$lang['SupportManagerTickets.!error.date_closed.format'] = 'Tanggal penutupan tiket dalam format tanggal yang tidak valid.';
$lang['SupportManagerTickets.!error.date_updated.format'] = 'Tanggal pembaruan tiket dalam format tanggal yang tidak valid.';
$lang['SupportManagerTickets.!error.date_added.format'] = 'Tanggal penambahan tiket dalam format tanggal yang tidak valid.';
$lang['SupportManagerTickets.!error.status.trash'] = 'Tiket yang dibuang tidak dapat diedit.';
$lang['SupportManagerTickets.!error.status.format'] = 'Pilih status yang valid.';
$lang['SupportManagerTickets.!error.priority.format'] = 'Pilih prioritas yang valid.';
$lang['SupportManagerTickets.!error.summary.length'] = 'Panjang ringkasan tidak boleh lebih dari 255 karakter.';
$lang['SupportManagerTickets.!error.summary.empty'] = 'Silakan masukkan ringkasan.';
$lang['SupportManagerTickets.!error.email.format'] = 'Masukkan alamat email yang valid.';
$lang['SupportManagerTickets.!error.client_id.set'] = 'Tiket tersebut adalah milik klien lain dan klien yang ditugaskan tidak dapat diubah.';
$lang['SupportManagerTickets.!error.client_id.exists'] = 'ID klien tidak valid.';
$lang['SupportManagerTickets.!error.service_id.belongs'] = 'Layanan yang dipilih tidak valid.';
$lang['SupportManagerTickets.!error.service_id.exists'] = 'Layanan yang dipilih untuk tiket ini tidak ada.';
$lang['SupportManagerTickets.!error.by_staff_id.exists'] = 'Anggota staf yang ditetapkan untuk melakukan pengeditan tidak ada.';
$lang['SupportManagerTickets.!error.contact_id.valid'] = 'Kontak tidak dapat membalas tiket tanpa klien yang valid.';
$lang['SupportManagerTickets.!error.contact_id.exists'] = 'Kontak yang dipilih untuk balasan tiket ini tidak ada.';
$lang['SupportManagerTickets.!error.staff_id.exists'] = 'ID staf tidak valid.';
$lang['SupportManagerTickets.!error.department_id.exists'] = 'Silakan pilih departemen yang valid.';
$lang['SupportManagerTickets.!error.code.format'] = 'Kode tiket harus terdiri dari angka saja.';
$lang['SupportManagerTickets.!error.priority.valid'] = 'Pilihlah prioritas yang valid untuk departemen ini.';
$lang['SupportManagerTickets.!error.contacts.valid'] = 'Setidaknya salah satu kontak tiket tidak valid.';
$lang['SupportManagerTickets.!error.recipients.valid'] = 'Setidaknya salah satu penerima tiket tidak valid.';
$lang['SupportManagerTickets.!error.recipients.duplicated'] = 'Setidaknya salah satu penerima tiket diduplikasi.';
$lang['SupportManagerTickets.log.service_id'] = 'Layanan terkait telah diubah menjadi ID internal: #%1$s.';
$lang['SupportManagerTickets.!error.custom_fields.empty'] = '"%1$s" wajib diisi dan tidak boleh kosong.';

