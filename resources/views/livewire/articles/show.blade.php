<?php

use function Livewire\Volt\{state};
use App\Models\Article;
//
state(['article' => fn(Article $article) => $article]);

//削除のロジック
$destroy = function(){
    $this->article->delete();
    return redirect()->route('articles/index');
};
?>

<div>
    <h1>論文詳細</h1>
    <h2>{!! nl2br(e($article->title)) !!}</h2>
    <p>{!! nl2br(e($article->body)) !!}</p>
    <button wire:click="destroy" wire:confirm="削除しますか？">削除する</button>  
</div>
