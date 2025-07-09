@php
    $bannerImg = $banner ?? asset('assets/img/service-banner.png');
@endphp


<style>
    .services-banner {
        {{ $hasBanner ? 'background-size: cover;' : 'background-size: contain;' }}
        background-color: #110D95;
        background-image: url({{ $bannerImg }});
        background-position: bottom right;
        background-repeat: no-repeat;
        color: #fff;
        padding-block: 40px;
    }
</style>
