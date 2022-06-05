@extends('dashboard.main')

@section('content')
    <div class="wrapper wrapper-content animated fadeInRight ecommerce">


        <div class="ibox-content m-b-sm border-bottom">
            <div class="row">
                <div class="col-sm-4">
                    <a type="button" href="{{ route('album.create') }}" class="btn btn-w-m btn-primary">Add Album</a>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-12">
                    <div class="ibox">
                        <div class="ibox-content">

                            <table class="footable table table-stripped toggle-arrow-tiny" data-page-size="15">
                                <thead>
                                    <tr>

                                        <th>Album ID</th>
                                        <th data-hide="phone">Album Title</th>
                                        <th data-hide="phone">Artist</th>
                                        <th data-hide="phone">Description</th>
                                        <th data-hide="phone">Release Date</th>
                                        <th data-hide="phone">Total Version</th>
                                        <th></th>
                                        <th class="text-right"> Action</th>

                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse ($albums as $album)
                                        <tr>
                                            <td>
                                                {{ $album->id }}
                                            </td>
                                            <td>
                                                {{ $album->title }}
                                            </td>
                                            <td>
                                                {{ $album->artist }}
                                            </td>
                                            <td>
                                                {{ $album->description }}
                                            </td>
                                            <td>
                                                30/11/2020
                                            </td>
                                            <td>
                                                Mini Album
                                            </td>
                                            <td>

                                            </td>
                                            <td class="text-right">
                                                <div class="btn-group">

                                                    {{-- <a href="/form-album"
                                                        class="btn btn-xs btn-outline btn-primary">Edit</i>
                                                    </a>
                                                    <a href="/" class="btn btn-xs btn-outline btn-danger">Delete</a> --}}
                                                    <form onsubmit="return confirm('Apakah Anda Yakin ?');"
                                                        action="{{ route('album.destroy', $album->id) }}" method="POST">
                                                        <a href="/detail-album"
                                                            class="btn btn-xs btn-outline btn-primary">View</i>
                                                        </a>
                                                        <a href="{{ route('album.edit', $album->id) }}"
                                                            class="btn btn-xs btn-outline btn-primary">Edit</a>
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit"
                                                            class="btn btn-xs btn-outline btn-danger">Hapus</button>
                                                    </form>
                                                </div>
                                            </td>
                                        </tr>
                                    @empty
                                        <tr>
                                            <td class="text-center text-mute" colspan="4">Data Album tidak tersedia</td>
                                        </tr>
                                    @endforelse
                                </tbody>
                            </table>
                        @endsection
