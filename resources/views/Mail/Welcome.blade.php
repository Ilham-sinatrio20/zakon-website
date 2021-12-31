@component('mail::message')
# Transaksi Anda Sukses

Halo, {{ $email['nama_klien'] }}, <br><br>
Dikarenakan anda sudah melakukan transaksi di website kami,
maka kami mengirimkan feedback email ini untuk mencatat transaksi anda.


<table class="table table-bordered">
    <tbody>
        <tr class="align-middle">
            <td>Nama</td>
            <td></td>
            <td>{{ $email['nama_klien'] }}</td>
        </tr>
        <tr class="align-middle">
            <td>Tanggal Meeting</td>
            <td></td>
            <td>{{ date('d-m-Y', strtotime($email['tgl_meet'])) }}</td>
        </tr>
        <tr class="align-middle">
            <td>Waktu Meeting</td>
             <td></td>
            <td>{{ $email['waktu_meet'] }}</td>
        </tr>
        <tr class="align-middle">
            <td>Jenis Meet</td>
            <td></td>
            <td>{{ $email['jenis_meet'] }}</td>
        </tr>
    </tbody>
</table>


Terima Kasih,<br>
Zakon Law
@endcomponent
