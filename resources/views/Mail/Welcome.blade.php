@component('mail::message')
# Transaksi Anda Sukses

Halo, {{ $email['nama_klien'] }}, <br><br>
Dikarenakan anda sudah melakukan transaksi di website kami,
maka kami mengirimkan feedback email ini untuk mencatat transaksi anda.

Nama            : {{ $email['nama_klien'] }}<br>
Tanggal Meeting : {{ $email['tgl_meet'] }}<br>
Waktu Meeting   : {{ $email['waktu_meet'] }}<br>
Jenis Meet      : {{ $email['jenis_meet'] }}<br>

Terima Kasih,<br>
Zakon Law
@endcomponent
