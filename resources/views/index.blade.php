@extends('template/template')

@section('judul', 'Index')

@section('indexContent')
    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">First</th>
                <th scope="col">Last</th>
                <th scope="col">Handle</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <th scope="row">1</th>
                <td>{{ $nama_depan_1 }}</td>
                <td>Ferdynand</td>
                <td>@mdo</td>
            </tr>
            <tr>
                <th scope="row">2</th>
                <td>Stanley</td>
                <td>Phangkawira</td>
                <td>@fat</td>
            </tr>
            <tr>
                <th scope="row">3</th>
                <td>Bryan</td>
                <td>Hartanto</td>
                <td>@twitter</td>
            </tr>
        </tbody>
    </table>
@endsection
