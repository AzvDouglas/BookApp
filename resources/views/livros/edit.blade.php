@extends('layouts.app', ['pageTitle' => 'Edição de Livro'])

@section('content')
    <div class="container">
        <h2>Edit Livro</h2>
        <form action="{{ route('livros.update', $livro->id) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="form-group">
                <label for="isbn">ISBN</label>
                <input type="text" id="isbn" name="isbn" value="{{ $livro->isbn }}" required>
            </div>
            <!-- Add more fields for other attributes here -->

            <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>
@endsection

@push('styles')
    <link rel="stylesheet" href="{{ asset('css/livros-edit.css') }}">
@endpush
