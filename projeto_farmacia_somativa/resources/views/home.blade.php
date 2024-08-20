@extends('.layouts.app')

@section('content')
    <div class="home-title" style="border-bottom: 3px solid black; padding: 15px;">
        <h2>Página Inicial - Sistema Farmacêutico</h2>
    </div>
    <br>
    @if ($errors->any())
    <div class="alert alert-danger">
        <strong>Oops!</strong> Houve alguns problemas com sua entrada.<br><br>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif
    <br>
@endsection
