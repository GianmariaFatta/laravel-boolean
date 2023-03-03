@include ('includes.alert')

@if($tool->exists)
<form action="{{ route('tools.update', $tool->id) }}" method="POST" novalidate>
    {{-- METODO PUT non esistente in HTML ma GESTITO del WEB MIDDLEWARE --}}
@method('PUT')
@else
    <form action="{{ route('tools.store') }}" method="POST" novalidate>
 @endif

     {{-- AUTORIZZO IL TOKEN CSRF  --}}
    @csrf
    {{-- ------------------------ --}}

    <div class="row">

        {{-- SE NEI VALUE degli input METTIAMO gli old mentianiamo
            i "vecchi campi" che c'erano altrimenti passiamo i nostri --}}
        {{-- NAME --}}
        <div class="col-6">
            <div class="mb-3">
                <label for="name" class="form-label">Tool name</label>
                <input name="name" type="text" class="form-control" id="name" placeholder="Name of new Tool"
                value="{{ old('name', $tool->name)}}" required>
            </div>
        </div>
        
        {{-- THUMB --}}
        <div class="col-4">
            <div class="mb-3">
                <label for="thumb" class="form-label">Tool Poster</label>
                <input name="thumb" type="url" class="form-control" id="thumb" placeholder="Url of new tool Image" 
                value="{{ old('thumb', $tool->thumb)}}" required>
            </div>
        </div>
        
        <div class="col-2">
            <p>Preview Image :</p>
            <img src="{{ old('thumb', $tool->thumb ?? 'https://picsum.photos/seed/picsum/536/354') }}" id="preview"
                alt="preview" class="img-fluid">
        </div>

        {{-- DESCRIPTION --}}
        <div class="col-6">
            <div class="mb-3">
                <label for="description" class="form-label">Description of new tool</label>
                <textarea name="description" id="description" class="form-control"  cols="30">
                    {{ old('description', $tool->description)}}
                </textarea>
            </div>
        </div>
        
        {{-- CATEGORY --}}
        <div class="col-6">
            <div class="mb-3">
                <label for="category" class="form-label">Tool category</label>
                <input name="category" type="text" class="form-control" id="category" placeholder="category of new Tool"
                value="{{ old('category', $tool->category)}}" required>
            </div>
        </div>

        {{-- RELEASE_YEAR --}}
        <div class="col-6">
            <div class="mb-3">
                <label for="release_year" class="form-label">Tool release_year</label>
                <input name="release_year" type="date" class="form-control" id="release_year" placeholder="release_year of new Tool"
                value="{{ old('release_year', $tool->release_year)}}" required>
            </div>
        </div>

        {{-- LATEST VERSION --}}
        <div class="col-6">
            <div class="mb-3">
                <label for="latest_version" class="form-label">Tool latest_version</label>
                <input name="latest_version" type="text" class="form-control" id="latest_version" placeholder="latest_version of new Tool"
                value="{{ old('latest_version', $tool->latest_version)}}" required>
            </div>
        </div>
        
        {{-- DESCRIPTION --}}
        <div class="col-6">
            <div class="mb-3">
                <label for="download_link" class="form-label">Download Link of new tool</label>
                <textarea name="download_link" id="download_link" class="form-control"  cols="30">
                    {{ old('download_link', $tool->download_link)}}
                </textarea>
            </div>
        </div>

        {{-- SUPPORTED OS --}}
        <div class="col-6">
            <div class="mb-3">
                <label for="supported_os" class="form-label">Tool supported OS</label>
                <input name="supported_os" type="text" class="form-control" id="supported_os" placeholder="Supported OS of new Tool"
                value="{{ old('supported_os', $tool->supported_os)}}" required>
            </div>
        </div>

        {{-- VOTE --}}
        <div class="col-6">
            <div class="mb-3">
                <label for="vote" class="form-label">Tool Vote</label>
                <input name="vote" type="number" min="1" max="5" step="1" class="form-control" id="vote" placeholder="Vote"
                value="{{ old('vote', $tool->vote)}}" required>
            </div>
        </div>

    </div>

    {{-- BUTTON FOR SUBMIT --}}
    <div class="d-flex justify-content-end">
        <button class="btn btn-success my-3" type="submit">Save</button>
    </div>
</form>

