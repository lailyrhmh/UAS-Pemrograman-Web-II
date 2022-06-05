@extends('dashboard.main')

@section('content')
<div class="wrapper wrapper-content animated fadeInRight">
    <div class="ibox-content m-b-sm border-bottom">
        <div class="row">
            <div class="col-sm-4">
                <a type="button" href="{{ route('talent.create') }}" class="btn btn-w-m btn-primary">Add Talent</a>
        </div>
    </div>
    
    <div class="row">
        @forelse ($talents as $talent)
        <div class="col-lg-4">
            <div class="contact-box">
                <a class="row" href="profile.html">
                <div class="col-4">
                    <div class="text-center">
                        <img alt="image" class="rounded-circle m-t-xs img-fluid" src="img/a2.jpg">
                    </div>
                </div>
                <div class="col-8">
                    <h3><strong>{{ $talent->talent_name }}</strong></h3>
                    <p><i class="fa fa-building"></i> BE:LIFT LAB</p>
                    <address>
                        <strong>Debut Date</strong><br>
                        30 November 2020 <br>
                    </address>
    
                </div>
                <td class="text-left">
                        
                        <form onsubmit="return confirm('Apakah Anda Yakin ?');"
                            action="{{ route('talent.destroy', $talent->id) }}" method="POST">
                            <div class="btn-group col-4">
                    
                            <a href="/detail-talent" class="btn btn-xs btn-outline btn-primary">View</i></a>
                            <a href="{{ route('talent.edit', $talent->id) }}" class="btn btn-xs btn-outline btn-primary">Edit</a>
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-xs btn-outline btn-danger">Hapus</button>
                        </div>
                        </form>
                    
                </td>
                    </a>
            </div>
            
        </div>
        @empty
    <tr>
        <td class="text-center text-mute" colspan="4">Data Talent tidak tersedia</td>
    </tr>
    @endforelse
    </div>
    
@endsection