@extends('layout.master')

@section('title', 'halaman Peserta')
@section('subtitle', 'Mahasiswa')


@section('content')
    <table>
        <thead>
            @foreach ($dataPesertas as $item)
                <tr>
                    <td>{{ $item->nama }}</td>

                </tr>
                <tr>
                    <td>{{ $item->email }}</td>
                </tr>
                <tr>
                    <td>{{ $item->asal_pt }}</td>
                </tr>
                <tr>
                    <td>{{ $item->url }}</td>
                </tr>
            @endforeach
        </thead>
    </table>
@endsection
