@extends('adminlte::page')

@section('content')
<div>
    <div class="row bg-info">
        <div class="col-sm-12 offset-sm-0">
            <b>Pembayaran</b>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-12 offset-sm-1">
            <!--<div class="row">
                <div class="col-sm-3 offset-sm-0 text-right">
                    <b>Salutation :</b>
                </div>
                <div class="col-sm-9 offset-sm-0 text-left">
                    
                </div>
            </div>
        -->
            <!-- <div class="row">
                <div class="col-sm-3 offset-sm-0 text-right">
                    <b>First name (please spell out, i.e., Jane instead of J.)</b>
                </div>
                <div class="col-sm-5 offset-sm-0 text-left">
                    <div class="form-group">
                        <input rows="2" wire:model = "title" class="form-control"></textarea>
                        @error('title') <span class="text-danger">{{ $message }}</span>@enderror
                    </div>
                </div>
            </div> -->
            <!--
            <div class="row">
                <div class="col-sm-3 offset-sm-0 text-right">
                    <b>Middle initial, if any</b>
                </div>
                <div class="col-sm-4 offset-sm-0 text-left">
                    <div class="form-group">
                        <input rows="2" wire:model = "title" class="form-control"></textarea>
                        @error('title') <span class="text-danger">{{ $message }}</span>@enderror
                    </div>
                </div>
            </div>
        -->
            <!-- <div class="row">
                <div class="col-sm-3 offset-sm-0 text-right">
                    <b>*Last name (mixed case, i.e., Smith instead of SMITH)</b>
                </div>
                <div class="col-sm-6 offset-sm-0 text-left">
                    <div class="form-group">
                        <input rows="2" wire:model = "title" class="form-control"></textarea>
                        @error('title') <span class="text-danger">{{ $message }}</span>@enderror
                    </div>
                </div>
            </div> -->


            <div class="row">
                <div class="col-sm-3 offset-sm-0 text-right">
                    <b>Name</b>
                </div>
                <div class="col-sm-5 offset-sm-0 text-left">
                    <div class="form-group">
                        <input type="text" id="Name" class="form-control">
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-sm-3 offset-sm-0 text-right">
                    <b>Email </b>
                </div>
                <div class="col-sm-5 offset-sm-0 text-left">
                    <div class="form-group">
                        <input type="text" id="Email" class="form-control">
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-sm-3 offset-sm-0 text-right">
                    <b>Title </b>
                </div>
                <div class="col-sm-5 offset-sm-0 text-left">
                    <div class="form-group">
                        <input type="text" id="Title" class="form-control">
                    </div>
                </div>
            </div>
            
            <div class="row">
                <div class="col-sm-3 offset-sm-0 text-right">
                    <b>Status Paid </b>
                </div>
                <div class="col-sm-5 offset-sm-0 text-left">
                    <div class="form-group">
                        <select name="status" id="status" class="form-control">
                            <option value="Veified">Veified</option>
                            <option value="Unverified">Unverified</option>
                        </select>
                    </div>
                </div>
            </div>



        </div>
    </div>
    <!--
    <div class="row bg-info">
        <div class="col-sm-12 offset-sm-0">
            <b>Affiliation</b>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-12 offset-sm-1">
            <div class="row">
                <div class="col-sm-3 offset-sm-0 text-right">
                    <b>*Current affiliation (e.g., University of Testing) or none - do NOT include school, department, street address or country</b>
                </div>
                <div class="col-sm-6 offset-sm-0 text-left">
                    <div class="form-group">
                        <input rows="2" wire:model = "title" class="form-control"></textarea>
                        @error('title') <span class="text-danger">{{ $message }}</span>@enderror
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-3 offset-sm-0 text-right">
                    <b>Additional affiliation (e.g., XYZ Company)</b>
                </div>
                <div class="col-sm-6 offset-sm-0 text-left">
                    <div class="form-group">
                        <input rows="2" wire:model = "title" class="form-control"></textarea>
                        @error('title') <span class="text-danger">{{ $message }}</span>@enderror
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-3 offset-sm-0 text-right">
                    <b>Country of second affiliation, if different (rarely used)</b>
                </div>
                <div class="col-sm-6 offset-sm-0 text-left">
                </div>
            </div>
            <div class="row">
                <div class="col-sm-3 offset-sm-0 text-right">
                    <b>Job title (e.g., Associate Professor, Senior Wizard, Research assistant)</b>
                </div>
                <div class="col-sm-4 offset-sm-0 text-left">
                    <div class="form-group">
                        <input rows="2" wire:model = "title" class="form-control"></textarea>
                        @error('title') <span class="text-danger">{{ $message }}</span>@enderror
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-3 offset-sm-0 text-right">
                    <b>Department</b>
                </div>
                <div class="col-sm-5 offset-sm-0 text-left">
                    <div class="form-group">
                        <input rows="2" wire:model = "title" class="form-control"></textarea>
                        @error('title') <span class="text-danger">{{ $message }}</span>@enderror
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row bg-info">
        <div class="col-sm-12 offset-sm-0">
            <b>Affiliation</b>
        </div>
    </div>
    -->
    <hr>
    <div class="row">
        <div class="col-sm-12 offset-sm-0">
            <input id="createCommittee" onclick="post();" type="submit" class="btn btn-success" value="update">
            <!-- <button class="btn btn-success"><i class="fa fa-save"></i> Submit</button> -->
        </div>
    </div>
</div>


<div id="divTbItemized" class="row mt-5" >
    <div class="col-md-12">
        <div class="table-responsive">
            <table name="tableItemized" id="tableItemized" class="table table-bordered table-striped" style="width: 100%; overflow:auto">
            <thead>
                <tr class="text-center">
                    <th>Name</th>
                    <th>Title</th>
                    <th>Email</th>
                    <th>Status</th>
                </tr>
            </thead>
            <tbody id="tBodytbItemized"></tbody>
            </table>
        </div>
    </div>
</div>
@endsection





<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>

<script src="{{ url('script/Committee.js')}}"></script>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<link rel="stylesheet" type="text/css" href="//cdn.datatables.net/1.10.12/css/jquery.dataTables.min.css" />
<script src="//cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<script>
    const token = "{{csrf_token()}}";
  

    
    const pstCreateCommittee = '{{ route('create.pstCreateCommittee') }}';
    const url_get_tableCommittee = '{{ route('view.pstCreateCommittee') }}';
     

</script>



