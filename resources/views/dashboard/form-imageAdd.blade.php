@extends('dashboard.main')

@section('content')

<div class="tabs-container">
    <ul class="nav nav-tabs">
        <li><a class="nav-link active" data-toggle="tab" href="#tab-1"> Form Image </a></li>
    </ul>
    <div class="tab-content">
        <div id="tab-1" class="tab-pane active">
            <div class="panel-body">
                <form action="{{ route('image.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                    <div class="input-group row" ><label class="col-sm-2 col-form-label">Image:</label>
                        <div class="fallback">
                            <input id="image" name="image" type="file" multiple>
                            <!-- <label class="custom-file-label" for="image">Choose file</label> -->
                        </div>
                    </div>
                    <div class="hr-line-dashed"></div>
                    <div class="form-group row">
                        <div class="col-sm-4 col-sm-offset-2">
                            <a href="{{ route('album.create') }}" class="btn btn-white btn-sm" type="submit">Cancel</a>
                            <button class="btn btn-primary btn-sm" type="submit">Save changes</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection