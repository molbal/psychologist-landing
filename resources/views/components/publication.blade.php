<div class="card h-100 shadow card-span rounded-3">
{{--    <img class="card-img-top rounded-top-3" src="assets/img/gallery/{{$program->id}}.jpg" alt="{{$program->name}}" style="height: 300px; object-fit: cover;">--}}
    <div class="card-body">
        <span class="fs--1 text-primary"><img src="{{asset('assets/img/publication/'.$publication->type.'.png')}}" style="width: 16px; height: 16px; margin-right:0.5rem; opacity: 0.8" alt="">
            {{$publication->getTranslatedType()}}</span><span class="mx-3">&middot;</span>
        <svg class="bi bi-calendar2 me-2" xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="currentColor" viewBox="0 0 16 16">
            <path d="M3.5 0a.5.5 0 0 1 .5.5V1h8V.5a.5.5 0 0 1 1 0V1h1a2 2 0 0 1 2 2v11a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2h1V.5a.5.5 0 0 1 .5-.5zM2 2a1 1 0 0 0-1 1v11a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V3a1 1 0 0 0-1-1H2z"></path>
            <path d="M2.5 4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5H3a.5.5 0 0 1-.5-.5V4z"> </path>
        </svg>
        <span class="fs--1 text-900">{{$publication->year}}</span>
        <h5 class="font-base fs-lg-0 fs-xl-1 my-3">{{$publication->name}}</h5>
        <p class="text-justify">{!!  $publication->description !!}</p>
        <a class="stretched-link" href="{{$publication->link}}" target="_blank"></a>
    </div>
</div>
