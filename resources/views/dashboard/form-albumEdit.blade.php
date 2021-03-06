@extends('dashboard.main')

@section('content')
    <div class="tabs-container">
        <ul class="nav nav-tabs">
            <li><a class="nav-link active" data-toggle="tab" href="#tab-1"> Album List</a></li>
        </ul>
        <div class="tab-content">
            <div id="tab-1" class="tab-pane active">
                <div class="panel-body">
                    <form action="{{ route('album.update', $albums->id) }}" method="POST">
                        @csrf
                        <!-- {{ csrf_field() }} -->
                        @method('PUT')

                        {{-- <fieldset> --}}
                        {{-- <div class="form-group row"><label class="col-sm-2 col-form-label">ID Album    :</label>
                        <div class="col-sm-10"><input type="text" class="form-control" placeholder="Input Album ID"></div>
                    </div> --}}
                        <div class="form-group row"><label class="col-sm-2 col-form-label">Album Title :</label>
                            <div class="col-sm-10"><input type="text" name="title" id="title" class="form-control"
                                    placeholder="Input Album Title" value="{{ old('title', $albums->title) }}"></div>
                        </div>
                        <div class="form-group row"><label class="col-sm-2 col-form-label">Artist :</label>
                            <div class="col-sm-10" class="form-control">
                                <select class="form-control" name="talent_id" id="talent_id">
                                    <!-- <option disabled value>Select Artist</option> -->
                                    <option value="{{ $albums->talent_id }}">{{ $albums->talent->talent_name }}</option>
                                    @foreach ($talent as $item)
                                    <option value="{{ $item->id }}">{{ $item->talent_name }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="form-group row"><label class="col-sm-2 col-form-label">Description:</label>
                            <div class="col-sm-10">
                                    <textarea name="description" id="description" class="form-control" id="desc" cols="30"
                                        rows="5">{{ old('description', $albums->description) }}</textarea>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-4">
                                <a type="button" href="{{ route('image.create') }}" class="btn btn-w-m btn-primary">Add Image</a>
                            </div>
                        </div>
                        {{-- <div class="form-group" id="data_1"><label class="font-normal">Release Date: </label>
                            <div class="input-group date">
                                <span class="input-group-addon"><i class="fa fa-calendar"></i></span><input type="text"
                                    class="form-control" value="03/04/2014">
                            </div>
                        </div>
                        <div class="form-group row"><label class="col-sm-2 col-form-label">Total Songs :</label>
                            <div class="col-sm-10"><input type="text" class="form-control" placeholder="Input Song">
                            </div>
                        </div>
                        <div class="form-group row"><label class="col-sm-2 col-form-label"> Total Versions :</label>
                            <div class="col-sm-10"><input type="text" class="form-control"
                                    placeholder="Input Album Version"></div>
                        </div>
                        <div class="form-group row"><label class="col-sm-2 col-form-label">Label :</label>
                            <div class="col-sm-10"><input type="text" class="form-control"
                                    placeholder="Input Producer"></div>
                        </div>
                        <div class="input-group"><label class="col-sm-2 col-form-label"> Cover :</label>
                            <div class="custom-file">
                                <input id="inputGroupFile01" type="file" class="custom-file-input">
                                <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
                            </div>
                        </div>
                        <br />
                        <div class="form-group row"><label class="col-sm-2 col-form-label">Meta Tag Title:</label>
                            <div class="col-sm-10"><input type="text" class="form-control" placeholder="..."></div>
                        </div>
                        <div class="form-group row"><label class="col-sm-2 col-form-label">Meta Tag Description:</label>
                            <div class="col-sm-10"><input type="text" class="form-control"
                                    placeholder="Sheets containing Lorem"></div>
                        </div>
                        <div class="form-group row"><label class="col-sm-2 col-form-label">Meta Tag Keywords:</label>
                            <div class="col-sm-10"><input type="text" class="form-control"
                                    placeholder="Lorem, Ipsum, has, been"></div>
                        </div> --}}
                        <div class="hr-line-dashed"></div>
                        <div class="form-group row">
                            <div class="col-sm-4 col-sm-offset-2">
                                <button class="btn btn-white btn-sm" type="submit">Cancel</button>
                                <button class="btn btn-primary btn-sm" type="submit">Save changes</button>
                            </div>
                        </div>
                        {{-- </fieldset> --}}
                    </form>

                </div>
            </div>
        @endsection
