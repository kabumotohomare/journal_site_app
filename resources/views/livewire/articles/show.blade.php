<?php

use function Livewire\Volt\{state};
use App\Models\Article;
//
state(['article' => fn(Article $article) => $article]);
?>

<div>
    <h1>論文詳細</h1>
    <h2>{!! nl2br(e($article->title)) !!}</h2>
    <p>{!! nl2br(e($article->body)) !!}</p>
</div>
