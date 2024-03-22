<x-mail::message>
# Halo

Pembayaran anda dengan id transaksi {{ $transaction->id }} telah kami terima. Silahkan klik tombol di bawah ini untuk melihat detail transaksi :

<x-mail::button :url="$url">
Transaksi
</x-mail::button>

Apabila anda mengalami masalah saat mengklik tombol diatas, silahakan copy url berikut ke browser anda : {{ $url }} 

Terimakasih,<br>
{{ config('app.name') }}
</x-mail::message>
