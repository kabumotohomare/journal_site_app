<?php

use function Livewire\Volt\{state};
use App\Models\Article;

//フォームの状態を管理
state(['article', 'title', 'body']);

//ルートディバイディング
mount(function(Article $article){
    $this->article = $article
    $this->title = $article->title;
    $this->body = $article->body;
});


?>

<div>
    //
</div>
