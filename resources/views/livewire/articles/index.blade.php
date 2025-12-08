<?php

use function Livewire\Volt\{state};
use App\Models\Article;

state(['articles' => fn() => Article::all()]);

$create = function () {
    return redirect()->route('articles/create');
};
?>

<div>
    <h1>論文一覧</h1>
    @foreach ($articles as $article)
        <a href="{{ route('articles/show', $article) }}">
            <p>{!! nl2br(e($article->title)) !!}</p>
        </a>
    @endforeach

    <button wire:click="create">新規論文投稿</button>
</div>
