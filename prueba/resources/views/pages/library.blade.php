@extends('layouts.app')

@section('content')
    <div class="home_container" style="padding-top: 40px;">
            <table class="table" id="tbl_library">
                <thead>
                    <th align="center">Author</th>
                    <th align="center">Title</th>
                    <th align="center">Year</th>
                </thead>
                <tbody>
                    @foreach($arrBooks['docs'] as $row)
                        <tr>
                            <td>{{$row['author_name'][0]}}</td>
                            <td>{{$row['title']}}</td>
                            <td>{{$row['first_publish_year']}}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
    </div>
    <script>
        $(function(){
            showDatatable('tbl_library');
        })
    </script>
@endsection
