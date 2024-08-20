@extends('layouts.admin')

@section('content')
    <div class="container">
        <div class="row justify-content-center">


            <div class="col-12">
                <form action="@yield('form-action')" method="POST" id="creation_form" enctype="multipart/form-data">
                    @yield('form-method')
                    @csrf
                    <div class="mb-3">
                        <h2>
                            @yield('page-title')
                        </h2>
                    </div>
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    <div class="input-group-sm container mb-5 w-50">
                        <label for="nome">Nome</label>
                        <input type="text" class="form-control mb-3" aria-label="Sizing example input"
                            aria-describedby="inputGroup-sizing-sm" placeholder="Nome progetto" id="nome"
                            name="nome" value="{{ old('nome', $project->nome ?? '') }}">
                        <label for="Tecnologia">Tecnologia utilizzata</label>
                        <div class="btn-group d-flex flex-wrap mb-3" role="group"
                            aria-lable="Basic checkbox toggle button group">
                            @foreach ($technologies as $technology)
                                <input name="technologies[]" type="checkbox" class="btn-check"
                                    id="tech-check-{{ $technology->id }}" autocomplete="off" value="{{ $technology->id }}">
                                <label class="btn btn-outline-primary"
                                    for="tech-check-{{ $technology->id }}">{{ $technology->name }}</label>
                            @endforeach
                        </div>
                        <label for="type_id">Tipo progetto</label>
                        <select class="form-select form-select-lg mb-3" aria-label="Large select example">
                            @foreach ($types as $type)
                                <option value='{{ $type->id }}'>{{ $type->name }}</option>
                            @endforeach
                        </select>
                        <div class="mb-3">
                            <label for="image">Url immagine</label>
                            <input type="file" name="image" id="image" class="form-control mb-2" minlength="4"
                                maxlength="255" required value="{{ old('image', $post->image ?? '') }}">
                            @error('image')
                                <div class="alert alert-danger mb-3">
                                    {{ message }}
                                @enderror
                            </div>
                            <label for="url_repository">Url_repository</label>
                            <input type="text" class="form-control" aria-label="Sizing example input"
                                aria-describedby="inputGroup-sizing-sm" placeholder="url_repository" id="url_repository"
                                name="url_repository" value="{{ old('url_repository', $project->url_repository ?? '') }}">
                            <div class="d-flex justify-content-between mt-3">
                                <input class="btn btn-warning" type="reset" value="Clear">
                                <input class="btn btn-primary" type="submit" value="@yield('page-title')">
                            </div>
                        </div>

                    </div>
                </form>
            </div>
            <div class="row justify-content-center">
                <div class="col-4"><a href="{{ route('admin.projects.index') }}"
                        class="card-link d-flex justify-content-center">Torna alla lista dei progetti</a></div>
            </div>
        </div>
    </div>
@endsection
