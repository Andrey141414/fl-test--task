@extends('layouts.app')
@section('content')
    <div class="mt-2">
        <form class="select-theme-form" method="get" action={{route('main')}}>
            <p>Темка</p>
            <select name="theme" id="theme" class="form-select">
                @foreach($all_themes as $themeName)
                    @if($themeName == $current_theme)
                        <option selected value={{$themeName}}>{{$themeName}}</option>
                    @else
                        <option value={{$themeName}}>{{$themeName}}</option>
                    @endif
                @endforeach
            </select>
            <div class="mt-2">
                <button type="submit" class="btn btn-primary">Сохранить</button>
            </div>
        </form>
    </div>

@endsection