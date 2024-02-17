<x-mail::message>
# Kepada pengguna {{ $user->name }},

Pendaftaran akun anda telah kami terima. Silahkan login untuk melakukan transaksi :

<x-mail::button :url="$url">
Login
</x-mail::button>
Apabila anda mengalami masalah saat mengklik tombol diatas, silahakan copy url berikut ke browser anda : {{ $url }} 

Terimakasih,<br>
{{ config('app.name') }}
</x-mail::message>
