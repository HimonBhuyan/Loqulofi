@php
    $crestSize = $size ?? 'default'; // 'small', 'header', 'default', 'large', 'hero', 'footer'
    $crestType = $type ?? 'crest'; // 'crest' or 'full'
    $imgSrc = ($crestType === 'full') ? 'assets/images/liqulofi_logo_official.png' : 'assets/images/liqulofi_crest_official.png';
    $dim = match($crestSize) {
        'small'  => 'height: 44px; max-width: 60px;',
        'header' => 'height: 64px; max-width: 85px;',
        'large'  => 'height: 160px; max-width: 220px;',
        'hero'   => 'height: 140px; max-width: 200px;',
        'footer' => 'height: 80px; max-width: 105px;',
        default  => 'height: 64px; max-width: 85px;'
    };
@endphp
<div class="brand-crest {{ $crestSize }}" style="display: inline-flex; align-items: center; justify-content: center; position: relative;">
    <img src="{{ $imgSrc }}" 
         alt="Liqulofi Private Limited - Royal Crest" 
         style="{{ $dim }}; width: auto; object-fit: contain; filter: drop-shadow(0 4px 16px rgba(184, 134, 11, 0.4));" 
         class="crest-official-img"
         loading="eager">
</div>
