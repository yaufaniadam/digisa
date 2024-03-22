<x-mail::message>
# Halo Admin

Ada pendaftaran pengguna baru yang masuk. Siliahkan periksa detailnya :

<x-mail::button :url="$url">
Pendaftaran
</x-mail::button>

Apabila anda mengalami masalah saat mengklik tombol diatas, silahakan copy url berikut ke browser anda : {{ $url }} 

Terimakasih,<br>
{{ config('app.name') }}
</x-mail::message>
