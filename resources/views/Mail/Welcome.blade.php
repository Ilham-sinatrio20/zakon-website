@component('mail::message')
# Introduction

The body of your message.

<<<<<<< HEAD
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
=======
@component('mail::button', ['url' => ''])
Button Text
@endcomponent
>>>>>>> 1220a1479a0d7142afa27b7b7515254f07ad9b19

Thanks,<br>
{{ config('app.name') }}
@endcomponent
