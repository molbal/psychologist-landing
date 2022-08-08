@php
/** @var \App\Models\GalleryImage $image */
@endphp
<div class="col-sm-12 col-md-4 col-lg-3 text-center">
    <a href="{{$image->getUrl()}}" data-lightbox="{{$image->id}}" class="image-link" data-title="{{$image->caption}}" style="width: 100%; display: inline-block">
    <img class="rounded shadow mb-0" src="{{$image->getUrl()}}"  alt="{{$image->caption}}" style="width: 100%; height: 400px; object-fit: cover;">
    </a>
    <p class="text-lead text-center w-100 mb-4 mt-2">{{$image->caption}}</p>
</div>
