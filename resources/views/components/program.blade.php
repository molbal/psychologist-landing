<div class="card h-100 shadow card-span rounded-3">
    <img class="card-img-top rounded-top-3" src="assets/img/gallery/{{$program->id}}.jpg" alt="{{$program->name}}" style="height: 300px; object-fit: cover;">
    <div class="card-body">
        <h5 class="font-base fs-lg-0 fs-xl-1 my-3">{{$program->name}}</h5><a class="stretched-link" href="{{route('programs.get', ['id' => $program->id, 'name' => Str::of($program->name)->slug()])}}">Részletek</a>
    </div>
</div>
