<x-mail::layout>
{{-- Header --}}
<x-slot:header>
<x-mail::header :url="config('app.url')">
<img src="https://lh3.googleusercontent.com/pw/AP1GczNIq1iOzSGYcta8ZCDHXFYzIlYGmPGzF_fGIB4fnWpdwJwkZX-LOnXbI5l-KVpQHssDl_28-Gwo8WS32y-bQO_OkWu9TknqvIm89LkLLWTueHuuG1rpoIrr_gLnOXOhJEfKVujaYfatXk3umlV4ESM4BCz47txvZGFNO0PxStKH6diZmfi4iN_iGfj05VQPVeB2u-2gQd1RTQEvU6t2qgzvRbeEm8afGIv4Io5ezdHnaQBZdzyI_zwirsAsqe6qo_918f0n8Ou8hFZzTs7oxtZGrLRvFCVZpa1A_vaFNcPwbbe3qcfa3bBNCDB9mO3UeFeFVZrWyTVn0I8IzyZ_y6w2QentEMymQ2SNqdVvvXpTTlIK01azziTgPwaLI4ftbEmZ7xbLEQFmaGfl0jafW7P0kFp-EIIOci04Qy4sbFaj3pvsSoeN1vMMDWZx9w6cuLIx-vfDEsw5zGDqsuPkW8s_PUz25cBgLF94d0x-rjOKX2yzHyX0pq9JAO-w3RbjzO9KEjX7SFPCwESoAUehCdXwhjhIPkJAW-XOyRea51rKvDf42PhhTn7dAjL20I0INpwev0oIEjXQWqeGVtXJzzE_WUUOKLk_Aea6CoR45Smg-RugxarL1bjUnM77stXS6nA6ZltI4bmDR7ZtdhUAsR6kkQzQJ6sc0fFy8dqQpWW3sExpYwKtOGS4tfCE9N28PPICH7X9e5vQmLdFF7SgHfMOCZKnW7IVQGPWAjR47fLDc2fwtTUxIfra7K2KHM7dkbldoJMHCqERC7fkQHWNo8_NdrJ9Ym2ppVkC3HUaKFJV5ia87viZRVWN2WnD2_myw44qjtgWde5qnso6UmKHyZapMTDLUzgToSYRv6-ALQAwVsCMZAgcdMYyxDLoOcfSkxhSEy_2o444vnOTwSqvN5s=w500-h195-s-no-gm?authuser=0" alt="">
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
