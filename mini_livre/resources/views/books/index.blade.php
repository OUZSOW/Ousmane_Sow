@extends('layout.template')

@section('content')
    <div>
        <h1>Liste des livres</h1>
        <ul>
            @foreach ($books as $book)
                <li>
                    <a href="{{ url('/books/' . $book->id) }}">
                        {{ $book->title }} - {{ $book->author }}
                    </a>
                </li>
            @endforeach
        </ul>
        {{ $books->links() }}
    </div>

@endsection
