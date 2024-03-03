<x-mail::layout>
{{-- Header --}}
<x-slot:header>
<x-mail::header :url="config('app.url')">
<img src="https://lh3.googleusercontent.com/pw/AP1GczMfkqSsfPfiPgPjU9ENghVUb2toGgO0BshHwzfvTMjgHPQnJhdK8X1x39QBPA_Qr1CMaEVfECK4VDb35jAdKAylQExFQmp-EfoW124EFqk4ZIgZN6GoBZoq6LbAgH7oJN85qDvrlFdLgLl7kojgUMM5OAy_mFAJWcPzhYnQMCsBlyYeAPotoaC1FVXoLvRE880bfcFxeiJQLwxwkazmrcc__E8DK-_N_ZDAlkq_8ubyHNYtIrAhHR7aa2Py1z8PWqSN9nUzKB2w2fbNPZs1vA1nCzFFAdPGo7M6Uily4qrLJZcXwPLV7OkpujRwfwG5ngOqOUGQqIYve_01B3ZKM5tt5dIKBl8cnVT4iX2odpeCdMGOvvQSvZxm_bKrOUw6Fg6jgIxemzzjscYJouQbskS3sE3sWeuv1aqN_AD2VZRadHyLDSOCePcMgaiN5lmV47aKhQNvzTaMojL1CTCB_QqHt_SI6FALubXEndtTTwlkXUnXnwHh4IhCeQgOBstowuB67eZSpwZdc0URLrrbr4PJphJemTH19P79qhsbxnz56miJlY_KZIiCYDjfH1s7X9xiRGbOjEdBBu9qPtHF_6FE5ar5x1fhmkwvv0ZCvnfiXP6Di_1oyE-kMOmF-KfRP2O2ScxkZlnQWLb9rn9DDUEXv-DnNnLrN282QdIdZMpK9hdlnSGonnLzlxTnAOtLvEYug6OlLOLTQR4jCQjda25xn_2v5d1qf61pWJnKSzBgh9RHMJcVnucAsVK04kyOjjMm2zeEI0m5tdxLXrjTUYw4AF9hFW00vchjulnTMyJbZKz0COQaNjQc1B1TQ4Bs9hZvqAjJrU4Z0x0wMWa34EW1srs2Y9fG_ttHcbHy9BhjtGyYo5SQvoFuu9Na4aJOpyVS_VkCC3RGkr4RWuBfQq4=w429-h117-s-no-gm?authuser=0" alt="">
</x-mail::header>
</x-slot:header>

{{-- Body --}}
{{ $slot }}

{{-- Subcopy --}}
@isset($subcopy)
<x-slot:subcopy>
<x-mail::subcopy>
{{ $subcopy }}
</x-mail::subcopy>
</x-slot:subcopy>
@endisset

{{-- Footer --}}
<x-slot:footer>
<x-mail::footer>
© {{ date('Y') }} {{ config('app.name') }}. @lang('All rights reserved.')
</x-mail::footer>
</x-slot:footer>
</x-mail::layout>
