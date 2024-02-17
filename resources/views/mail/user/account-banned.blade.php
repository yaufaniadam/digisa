<x-mail::message>
# Kepada pengguna {{ $user->name }},

Setelah melakukan peninjauan, kami menemukan pelanggaran pada akun anda. Dengan demikian, akun anda kami bekukan.
Apabila anda merasa tidak melakukan pelanggaran, silahkan hubungi admin kami.

Terimakasih,<br>
{{ config('app.name') }}
</x-mail::message>
