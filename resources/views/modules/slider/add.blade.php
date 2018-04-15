@extends('layouts.admin')

@section('content')
    <form class="wp" action="{{ route('createSlide') }}" method="POST" enctype="multipart/form-data">
        {{ csrf_field() }}
        <div>
            <input type="file" name="file" required>
        </div>
        <div>
            <textarea name="description" id="textarea" required></textarea>
        </div>
        <button>Добавить</button>
    </form>
@endsection