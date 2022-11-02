@extends('layouts.home')

@section('content')
    <div class="col-md-6">
        <table class="table">
            <thead>
                <tr>
              <tr>
                <th scope="col">No</th>
                <th scope="col">User Id</th>
                <th scope="col">Category Id</th>
                <th scope="col">Link</th>
                <th scope="col">Status</th>
              </tr>
                </tr>
            </thead>
            <tbody>
                <?php $i = 1?>
                @foreach ($data_tugas as $d )
                <tr>
                    <th scope="row">{{$i++}}</th>
                    <td>{{$d->user_id}}</td>
                    <td>{{$d->category_id}}</td>
                    <td>{{$d->link}}</td>
                    <td>{{$d->status}}</td>
                  </tr>
                @endforeach
            </tbody>
          </table>
    </div>
@endsection
