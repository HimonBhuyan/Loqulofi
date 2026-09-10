@php
    $items = $items ?? [];
@endphp

@if(!empty($items))
<nav class="breadcrumb-wrapper" aria-label="Breadcrumb">
    <div class="container">
        <ol class="breadcrumb-list" itemscope itemtype="https://schema.org/BreadcrumbList">
            @foreach($items as $index => $item)
                <li class="breadcrumb-item {{ $loop->last ? 'active' : '' }}" 
                    itemprop="itemListElement" 
                    itemscope 
                    itemtype="https://schema.org/ListItem">
                    
                    @if(!$loop->last && !empty($item['url']))
                        <a href="{{ $item['url'] }}" class="breadcrumb-link" itemprop="item">
                            @if($loop->first)
                                <i class="fa-solid fa-house breadcrumb-home-icon"></i>
                            @endif
                            <span itemprop="name">{{ $item['label'] }}</span>
                        </a>
                        <span class="breadcrumb-separator">
                            <i class="fa-solid fa-chevron-right"></i>
                        </span>
                    @else
                        <span class="breadcrumb-current" itemprop="name">{{ $item['label'] }}</span>
                    @endif
                    <meta itemprop="position" content="{{ $index + 1 }}" />
                </li>
            @endforeach
        </ol>
    </div>
</nav>
@endif
