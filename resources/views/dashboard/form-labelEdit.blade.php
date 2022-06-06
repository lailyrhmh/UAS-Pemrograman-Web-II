@extends('dashboard.main')

@section('content')
            
<div class="tabs-container">
    <ul class="nav nav-tabs">
        <li><a class="nav-link active" data-toggle="tab" href="#tab-1"> Label List </a></li>
    </ul>
    <div class="tab-content">
        <div id="tab-1" class="tab-pane active">
            <div class="panel-body">
            <form action="{{ route('label.update', $labels->id) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <!-- <div class="form-group row"><label class="col-sm-2 col-form-label">ID Label   :</label>
                        <div class="col-sm-10"><input type="text" class="form-control" placeholder="Input Label ID"></div>
                    </div> -->
                    <div class="form-group row"><label class="col-sm-2 col-form-label">Label Name :</label>
                        <div class="col-sm-10"><input type="text" name="label_name" id="label_name" class="form-control" 
                        placeholder="Input Label Name" value="{{ old('label_name', $labels->label_name) }}"></div>
                    </div>
                    <div class="form-group row"><label class="col-sm-2 col-form-label">Label Branch      :</label>
                        <div class="col-sm-10"><input type="text" name="branch" id="branch" class="form-control" 
                        placeholder="Input label Branch" value="{{ old('branch', $labels->branch) }}"></div>
                    </div>
                    <div class="hr-line-dashed"></div>
                    <div class="form-group row">
                        <div class="col-sm-4 col-sm-offset-2">
                            <button class="btn btn-white btn-sm" type="submit">Cancel</button>
                            <button class="btn btn-primary btn-sm" type="submit">Save changes</button>
                        </div>
                    </div>
            </form>
            </div>
        </div>
@endsection