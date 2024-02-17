<x-mail::message>
# Halo Admin

Ada transaksi baru yang masuk. Silahkan lihat detailnya :

<x-mail::button :url="$url">
Detail Transaksi
</x-mail::button>

Apabila anda mengalami masalah saat mengklik tombol diatas, silahakan copy url berikut ke browser anda : {{ $url }}

Terimakasih,<br>
{{ config('app.name') }}
</x-mail::message>
