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
                    <div class="form-group row"><label class="col-sm-2 col-form-label">ID Album:</label>
                        <div class="col-sm-10"><input type="text" class="form-control" placeholder="Input Album ID"></div>
                    </div>
                    <div class="form-group row"><label class="col-sm-2 col-form-label">Album Title:</label>
                        <div class="col-sm-10"><input type="text" class="form-control" placeholder="Input Album Name"></div>
                    </div>
                    <div class="form-group row"><label class="col-sm-2 col-form-label">Artist :</label>
                        <div class="col-sm-10"><input type="text" class="form-control" placeholder="Input Artist"></div>
                    </div>
                    <div class="form-group row"><label class="col-sm-2 col-form-label">Release Date:</label>
                        <div class="col-sm-10"><input type="text" class="form-control"  id ="datetime"  placeholder="dd-mm-yyyy" required/> </div>
                        {{-- <input type="text"  name="tglsewa"  id ="datetime"  placeholder="Tanggal Sewa dd-mm-yyyy" required/>   --}}
                    </div>
                    <div class="form-group row"><label class="col-sm-2 col-form-label">Song List :</label>
                        <div class="col-sm-10"><input type="text" class="form-control" placeholder="Input Song"></div>
                    </div>
                    <div class="form-group row"><label class="col-sm-2 col-form-label">Price :</label>
                        <div class="col-sm-10"><input type="text" class="form-control" placeholder="$12.00"></div>
                    </div>
                    <div class="form-group row"><label class="col-sm-2 col-form-label">Version :</label>
                        <div class="col-sm-10"><input type="text" class="form-control" placeholder="Input Album Version"></div>
                    </div>
                    <div class="form-group row"><label class="col-sm-2 col-form-label">Producer :</label>
                        <div class="col-sm-10"><input type="text" class="form-control" placeholder="Input Producer"></div>
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
                    <div class="input-group"><label class="col-sm-2 col-form-label">Cover:</label>
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
                </fieldset>

            </div>
        </div>
        <div id="tab-2" class="tab-pane">
            <div class="panel-body">

                <fieldset>
                    <div class="form-group row"><label class="col-sm-2 col-form-label">ID:</label>
                        <div class="col-sm-10"><input type="text" class="form-control" placeholder="543"></div>
                    </div>
                    <div class="form-group row"><label class="col-sm-2 col-form-label">Model:</label>
                        <div class="col-sm-10"><input type="text" class="form-control" placeholder="..."></div>
                    </div>
                    <div class="form-group row"><label class="col-sm-2 col-form-label">Location:</label>
                        <div class="col-sm-10"><input type="text" class="form-control" placeholder="location"></div>
                    </div>
                    <div class="form-group row"><label class="col-sm-2 col-form-label">Tax Class:</label>
                        <div class="col-sm-10">
                            <select class="form-control" >
                                <option>option 1</option>
                                <option>option 2</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row"><label class="col-sm-2 col-form-label">Quantity:</label>
                        <div class="col-sm-10"><input type="text" class="form-control" placeholder="Quantity"></div>
                    </div>
                    <div class="form-group row"><label class="col-sm-2 col-form-label">Minimum quantity:</label>
                        <div class="col-sm-10"><input type="text" class="form-control" placeholder="2"></div>
                    </div>
                    <div class="form-group row"><label class="col-sm-2 col-form-label">Sort order:</label>
                        <div class="col-sm-10"><input type="text" class="form-control" placeholder="0"></div>
                    </div>
                    <div class="form-group row"><label class="col-sm-2 col-form-label">Status:</label>
                        <div class="col-sm-10">
                            <select class="form-control" >
                                <option>option 1</option>
                                <option>option 2</option>
                            </select>
                        </div>
                    </div>
@endsection