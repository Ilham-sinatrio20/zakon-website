@component('mail::message')
# Response for Your Feedback

Hai! {{ $mail['nama_sender'] }}, <br><br>
Terima kasih telah mengirim masukkan ke website kami, kamih harap
masukkan ini bisa berguna dalam pengembangan pelayanan yang
kami lakukan<br>

Terima Kasih,<br>
Zakon Law
@endcomponent























{{-- @component('mail::button', ['url' => ''])
Thanks your feedback for our website. We hope that your feedback will be useful for us to
improve our service
@endcomponent --}}
