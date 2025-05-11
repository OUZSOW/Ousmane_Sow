@extends('layout.template')

@section('content')
<h1>{{ $book->title }}</h1>
<p><strong>Auteur :</strong> {{ $book->author }}</p>
<p><strong>Publié le :</strong> {{ $book->published_at }}</p>
<p>{{ $book->description }}</p>
<p><strong>Note moyenne :</strong> {{ number_format($book->averageRating(), 1) }}/5</p>


<h2>Avis</h2>
<ul>
    @foreach ($book->reviews as $review)
        <li><strong>{{ $review->user->name }}</strong> : {{ $review->rating }}/5
            <br>{{ $review->comment }}</li>
    @endforeach
</ul>

<h3>Ajouter un avis</h3>
<form action="{{ url('/books/' . $book->id . '/reviews') }}" method="POST">
    @csrf
    <select name="user_id">
        @foreach(\App\Models\User::all() as $user)
            <option value="{{ $user->id }}">{{ $user->name }}</option>
        @endforeach
    </select>
    <input type="number" name="rating" min="1" max="5" required>
    <textarea name="comment" required></textarea>
    <button type="submit">Envoyer</button>
</form>
@endsection
