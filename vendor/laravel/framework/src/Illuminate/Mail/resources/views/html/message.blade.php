<x-mail::layout>
{{-- Header --}}
<x-slot:header>
<x-mail::header :url="config('app.url')">
<img src="https://lh3.googleusercontent.com/pw/AP1GczNPhSii79KnEoycJvPFxmw3VDsKupI9p9NiSJbzM38IttRVsT4wmVto2xJBbTHXIW9YP_M55wBrO1C3bbaXbnsQlX61HJEmvd7AErusGnowwnLhHXI45VEcYTNoeF_yBNTcYwzZ8SuZJ5ZYW5C2epq9JZI9AKO8cfRPIUTGV0BS1ZalOFVpkV51k_HiKFh8qUOOxPBvoX5OC0V50oa76bDMCOTYL9aQ2pz59z3PaNn2mKJu4OEHUOduAkvCiDl5dK2wgse1CWvegF-VBTfDx1Y_Hs0x1FS52BL9t04mrByDpwFuJNXjVTshwNq6REjtrL4xTd7cHluVMya5_wx-lb6Z3y_WQBjBV4HDWNlBhJdk-ucZcu4qdeTAzx1HWTfOss_bSUFm_DTQc3mkzNmTygrFvc5AT7cwHibhV64bbPJE-O9H5ar1slFUnsZTKLQTjX_FHI7YGa4GfZCSOYt2nObImKnQhkjxmYairwwlNBWQpLGlbjrNp4NP24Hzn_lGY68JIYQr72feRn-6nCP-O8DwiP5dj7XZyn4UL6ZxdMU68EukCbhM5vnm-koc_lpiP3F2WbAH--j7r0FtiXj00fJekvvr1OFCLaIDaZ_fHSVD_RyC7Xvp2J1trhJjQtNpx1vFSVedWlYjjvq8sVZZGyxEzpBXcBDzRZOKfbCgT_B70tou_PqNvl__CIhcW9AnoybZzRIQOAWbXPYu5kQBylCIr4kd-OLh6a2M8ohKelVYoYLxIB9f7SuA99_z3gyghtlbOqJ_3MnpQ-oSmEoXRCKeek-cHmx_PlkLj8G8iCHn1V7bRbgTcVS7KrN3nORNBtjjqU_LaX6mlNbwgD2oXEAN0h4zYvglL1trdsOo4yxMtWTpR3SmbiF8CtqeUeNU6JQkSjDTptSU78KPE9bQ7PM=w429-h117-s-no-gm?authuser=0" alt="">
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
