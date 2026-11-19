<h1>Home : First page</h1>

{{ 5 + 2 }}

<br><br>

{{ "Hello world" }}

<br><br>

{{ "<h1>Hello world</h1>" }}

{!! "<h1>Yahoo Baba</h1>" !!} 
        
{{-- {!! "<script>alert('Yahoo Baba')</script>" !!} --}}

{{-- comment statement --}}  

@php
    $user = "Yahoo Baba";
@endphp

{{ $user }}