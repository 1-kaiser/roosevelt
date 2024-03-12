<x-mail::layout>
{{-- Header --}}
<x-slot:header>
<x-mail::header :url="config('app.url')">
<img src="https://lh3.googleusercontent.com/pw/AP1GczOFRS20wFFVDSkd2KPiEFESSsXEzbuLj-zG9H_Ghs9v-aopWsXOkI9ceiUeOUWBB0L-7t2K_bCJtRf40AahmhO2sRcIAevEQIA0oInJ7lcimikPo_0dYNws1o2JNTt29uJ8YsRAxgIg68uKGsxoaz8WMSrw9wtgH46qKBxs_8JmbPfRVHcbh3gtadIaf58useuLMZKzrNzZ0HtF7Ka4dZ4TtRHFtHZZGbLt0jzMbiZfrMah-H5wluMF2IkdAUo59wUfGORU3ExMojY2ytb6lr87DqGPJqTTwwzhLsAwv2H1Lq7f89iONGH_wJpa_P1U7VWU7v2LhDf3zyegtDSFBiNR0KInSA2Q1s3uRWzLD7YNYbVaH2Ray5yLVihW4e8Z2NFgqdiPpzeCJjIf6wPpgFBu5BZ58oUU7gdX00qfSpD5yUPYft-Gho0l7v56EmrTMxtF_04JZOSkW0G3TcUqX0G2A27PLIdqrfo8IATbgjITNynNaz2Jk4M3z9TKPHWIvpg_TR9iSh76RnZ193tCYFpVOA8PbrpA82zVZgMLxZV8P_E9LXhGKkxVjMg4fAlPhkZkJv9Xola0kQAa43-coE7yzNhgxg7me4ebRJb3KIKRIiSyLw7Glei7JZlNMwgjPLKdAurtTKD9A49Z1vlBN0fj6P80Fl9QijhIthbg9KjCatjGebSvVCd6zyEaB7s8sRa4Jv7lhhpIsbxLAUb1Ks4TsHQETDlYGWcGfjkObzcpE0Vf0B-9gtwGnf81_Qs64kswKeB-nWNsNdBj89ieKJnMjU9Hyb2IpbNLXZvaYfBW01Jw3xr0nNrlLdPKEEd6nTQ6OQdcwG08EtxXMj1c77Frb5imGn7Vcphs2bSlgdem6n9m--p4gE2XEZ1ReAefaG4DsrxWaCLBTYT7L5HcZf94=w500-h195-s-no-gm?authuser=0" alt="" class="w-20 h-12">
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
