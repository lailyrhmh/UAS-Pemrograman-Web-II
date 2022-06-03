@extends('dashboard.main')

@section('content')
            
<div class="tabs-container">
    <ul class="nav nav-tabs">
        <li><a class="nav-link active" data-toggle="tab" href="#tab-1"> Label List </a></li>
    </ul>
    <div class="tab-content">
        <div id="tab-1" class="tab-pane active">
            <div class="panel-body">

                <fieldset>
                    <div class="form-group row"><label class="col-sm-2 col-form-label">ID Label   :</label>
                        <div class="col-sm-10"><input type="text" class="form-control" placeholder="Input Label ID"></div>
                    </div>
                    <div class="form-group row"><label class="col-sm-2 col-form-label">Label Name :</label>
                        <div class="col-sm-10"><input type="text" class="form-control" placeholder="Input Label Name"></div>
                    </div>
                    <div class="form-group row"><label class="col-sm-2 col-form-label">Label Branch      :</label>
                        <div class="col-sm-10"><input type="text" class="form-control" placeholder="Input label Branch"></div>
                    </div>
                    <div class="form-group row"><label class="col-sm-2 col-form-label">Description:</label>
                        <div class="col-sm-10">
                            <div class="summernote">
                                <h3>Lorem Ipsum is simply</h3>
                                dummy text of the printing and typesetting industry. <strong>Lorem Ipsum has been the industry's</strong> standard dummy text ever since the 1500s,
                                when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic
                                when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic
                                typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with
                                <br/>

                            </div>
                        </div>
                    </div>
                    <div class="form-group " id="data_1"><label class="font-normal">Established Date: </label>
                        <div class="input-group date">
                            <span class="input-group-addon"><i class="fa fa-calendar"></i></span><input type="text" class="form-control" value="03/04/2014">
                        </div>
                    </div>                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                 
                    <div class="form-group row"><label class="col-sm-2 col-form-label">Total Staffs      :</label>
                        <div class="col-sm-10"><input type="text" class="form-control" placeholder="Input Total Staffs"></div>
                    </div>
                    <div class="form-group row"><label class="col-sm-2 col-form-label">Total Talents :</label>
                        <div class="col-sm-10"><input type="text" class="form-control" placeholder="Input Total Talents"></div>
                    </div>
                    <br/>
                    <div class="input-group"><label class="col-sm-2 col-form-label">Image             :</label>
                        <div class="custom-file">
                            <input id="inputGroupFile01" type="file" class="custom-file-input">
                            <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
                        </div>
                    </div>
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