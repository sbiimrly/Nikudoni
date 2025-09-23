@props([
    'align' => 'center',   // center, left, right
    'size' => '4xl',       // default text size
    'lgSize' => '6xl',     // responsive size di layar besar
    'color' => 'black',    // warna text
    'leading' => 'normal'  // normal, relaxed, loose
])

<h1 
    {{ $attributes->merge([
        'class' => "
            text-$size 
            lg:text-$lgSize 
            leading-10 
            lg:leading-20 
            text-$color-500  
            font-semibold 
            pt-4 
            text-$align
        "
    ]) }}
>
    {{ $slot }}
</h1>
