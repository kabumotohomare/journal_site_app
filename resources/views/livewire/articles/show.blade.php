<?php

use function Livewire\Volt\{state, mount};
use App\Models\Article;
//
state(['article' => fn(Article $article) => $article]);

// ルートモデルバインディング
mount(function (Article $article) {
    $this->article = $article;
});

// 編集のロジック
$edit = function () {
    return redirect()->route('articles/edit', $this->article);
};

//削除のロジック
$destroy = function () {
    $this->article->delete();
    return redirect()->route('articles/index');
};
?>

<div>
    <h1>論文詳細</h1>
    <h2>{!! nl2br(e($article->title)) !!}</h2>
    <p>{!! nl2br(e($article->body)) !!}</p>
    <button onclick=location.href='/articles'>一覧に戻る</button>
    <button wire:click="edit">編集する</button>
    <button wire:click="destroy" wire:confirm="削除しますか？">削除する</button>
</div>
