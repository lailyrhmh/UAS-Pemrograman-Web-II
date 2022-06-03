@extends('dashboard.main')

@section('content')
            
<div class="tabs-container">
    <ul class="nav nav-tabs">
        <li><a class="nav-link active" data-toggle="tab" href="#tab-1"> Product info</a></li>
    </ul>
    <div class="tab-content">
        <div id="tab-1" class="tab-pane active">
            <div class="panel-body">

                <fieldset>
                    <div class="form-group row"><label class="col-sm-2 col-form-label">ID Album    :</label>
                        <div class="col-sm-10"><input type="text" class="form-control" placeholder="Input Album ID"></div>
                    </div>
                    <div class="form-group row"><label class="col-sm-2 col-form-label">Album Title :</label>
                        <div class="col-sm-10"><input type="text" class="form-control" placeholder="Input Album Name"></div>
                    </div>
                    <div class="form-group row"><label class="col-sm-2 col-form-label">Artist       :</label>
                        <div class="col-sm-10"><input type="text" class="form-control" placeholder="Input Artist"></div>
                    </div>
                    <div class="form-group " id="data_1"><label class="font-normal">Release Date: </label>
                        <div class="input-group date">
                            <span class="input-group-addon"><i class="fa fa-calendar"></i></span><input type="text" class="form-control" value="03/04/2014">
                        </div>
                    </div>                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                 
                    <div class="form-group row"><label class="col-sm-2 col-form-label">Song List      :</label>
                        <div class="col-sm-10"><input type="text" class="form-control" placeholder="Input Song"></div>
                    </div>
                    <div class="form-group row"><label class="col-sm-2 col-form-label">Version         :</label>
                        <div class="col-sm-10"><input type="text" class="form-control" placeholder="Input Album Version"></div>
                    </div>
                    <div class="form-group row"><label class="col-sm-2 col-form-label">Label           :</label>
                        <div class="col-sm-10"><input type="text" class="form-control" placeholder="Input Producer"></div>
                    </div>
                    <div class="input-group"><label class="col-sm-2 col-form-label"> Cover             :</label>
                        <div class="custom-file">
                            <input id="inputGroupFile01" type="file" class="custom-file-input">
                            <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
                        </div>
                    </div>
                    <br/>
                    <div class="form-group row"><label class="col-sm-2 col-form-label">Meta Tag Title:</label>
                        <div class="col-sm-10"><input type="text" class="form-control" placeholder="..."></div>
                    </div>
                    <div class="form-group row"><label class="col-sm-2 col-form-label">Meta Tag Description:</label>
                        <div class="col-sm-10"><input type="text" class="form-control" placeholder="Sheets containing Lorem"></div>
                    </div>
                    <div class="form-group row"><label class="col-sm-2 col-form-label">Meta Tag Keywords:</label>
                        <div class="col-sm-10"><input type="text" class="form-control" placeholder="Lorem, Ipsum, has, been"></div>
                    </div>
                    <div class="hr-line-dashed"></div>
                    <div class="form-group row">
                        <div class="col-sm-4 col-sm-offset-2">
                            <button class="btn btn-white btn-sm" type="submit">Cancel</button>
                            <button class="btn btn-primary btn-sm" type="submit">Save changes</button>
                        </div>
                    </div>
                </fieldset>

            </div>
        </div>
@endsection