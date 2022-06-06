@extends('dashboard.main')

@section('content')
    <div class="tabs-container">
        <ul class="nav nav-tabs">
            <li><a class="nav-link active" data-toggle="tab" href="#tab-1"> Album List</a></li>
        </ul>
        <div class="tab-content">
            <div id="tab-1" class="tab-pane active">
                <div class="panel-body">
                    <form action="{{ route('album.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf <!-- {{ csrf_field() }} -->
                        {{-- <fieldset> --}}
                        {{-- <div class="form-group row"><label class="col-sm-2 col-form-label">ID Album    :</label>
                        <div class="col-sm-10"><input type="text" class="form-control" placeholder="Input Album ID"></div>
                    </div> --}}
                        <div class="form-group row"><label class="col-sm-2 col-form-label">Album Title :</label>
                            <div class="col-sm-10"><input type="text" name="title" id="title" class="form-control"
                                    placeholder="Input Album Title"></div>
                        </div>
                        <div class="form-group row"><label class="col-sm-2 col-form-label">Artist :</label>
                            <div class="col-sm-10" name="talent_id" id="title" class="form-control">
                                <select class="form-control" >
                                    <option>Select Artist</option>
                                    @foreach ($tal as $album)
                                    <option value="{{ $album->id }}">{{ $album->talent_name }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="form-group row"><label class="col-sm-2 col-form-label">Description:</label>
                            <div class="col-sm-10">
                                <div class="summernote">
                                    <textarea name="description" id="description" class="form-control" id="desc" cols="30" rows="5"></textarea>
                                </div>
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
                                <a href="{{ route('album.index') }}" class="btn btn-white btn-sm" type="button">Cancel</a>
                                <button class="btn btn-primary btn-sm" type="submit">Save changes</button>
                            </div>
                        </div>
                        {{-- </fieldset> --}}
                    </form>

                </div>
            </div>
        @endsection
