<?php

use function Livewire\Volt\{state};
use App\Models\Article;

state(['articles' => fn() => Article::all()]);

?>

<div>
    <h1>論文一覧</h1>
    @foreach ($articles as $article)
        <a href="{{ route('articles/show', $article) }}">
            <p>{!! nl2br(e($article->title)) !!}</p>
        </a>
    @endforeach
</div>
