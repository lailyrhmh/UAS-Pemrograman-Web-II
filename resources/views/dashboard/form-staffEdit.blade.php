@extends('dashboard.main')

@section('content')
    <div class="tabs-container">
        <ul class="nav nav-tabs">
            <li><a class="nav-link active" data-toggle="tab" href="#tab-1"> Staff List</a></li>
        </ul>
        <div class="tab-content">
            <div id="tab-1" class="tab-pane active">
                <div class="panel-body">
                    <form action="{{ route('staff.update', $staffs->id) }}" method="POST">
                        @csrf
                        <!-- {{ csrf_field() }} -->
                        @method('PUT')

                        {{-- <fieldset> --}}
                        {{-- <div class="form-group row"><label class="col-sm-2 col-form-label">ID Album    :</label>
                        <div class="col-sm-10"><input type="text" class="form-control" placeholder="Input Album ID"></div>
                    </div> --}}
                        <div class="form-group row"><label class="col-sm-2 col-form-label">Staff Name :</label>
                            <div class="col-sm-10"><input type="text" name="staff_name" id="staff_name" class="form-control"
                                    placeholder="Input Staff Name" value="{{ old('staff_name', $staffs->staff_name) }}">
                                </div>
                        </div>
                        <div class="form-group row"><label class="col-sm-2 col-form-label">Staff Division :</label>
                        <div class="col-sm-10"><input type="text" name="division" id="division" class="form-control"
                                placeholder="Input Staff Division" value="{{ old('division', $staffs->division) }}"></div>
                        </div>
                        <div class="form-group row"><label class="col-sm-2 col-form-label">Label ID :</label>
                            <select class="form-control"  name="label_id" id="label_id">
                                <option value="{{ $staffs->label_id }}">{{ $staffs->label->label_name }}</option>
                                @foreach ($label as $item)
                                <option value="{{ $item->id }}">{{ $item->label_name }}</option>
                                @endforeach
                            </select>
                        </div>
                        {{-- <div class="form-group row"><label class="col-sm-2 col-form-label">Description:</label>
                            <div class="col-sm-10">
                                <div class="summernote">
                                    <textarea name="description" id="description" class="form-control" id="desc" cols="30"
                                        rows="5">{{ old('description', $albums->description) }}</textarea>
                                </div>
                            </div>
                        </div> --}}
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
