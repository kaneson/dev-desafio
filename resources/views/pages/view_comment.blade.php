@extends('layouts.default')
@section('content')
    
<div id="content" class="site-content">
    <div id="primary" class="content-area column full">
        @foreach ($comments as $comment)
        <div id="comments" class="comments-area">
            <div id="respond" class="comment-respond">
                <h3 id="reply-title" class="comment-reply-title">ATUALIZE SEU COMENTÁRIO</h3>
                <form action="{{route('comment_update')}}" id="form_comment" method="post"  class="comment-form" novalidate="">
                    @csrf
                    <input type="hidden" name="film_id" value="{{$comment->film_id}}" id="film_id">
                    <p class="comment-notes">
                        <span id="email-notes">Seu nome e endereço de e-mail não serão publicados.</span> Os campos obrigatórios estão marcados *
                    </p>
                    <p class="comment-form-comment">
                        <label for="comment">Comentário</label><textarea id="comment" name="comment" required cols="45" rows="8" minlength="10" >{{$comment->comment}}</textarea>
                    </p>
                    <p class="comment-form-author">
                        <label for="name">Nome  </label><input id="name" name="name" type="text"  value="{{$comment->name}}" size="30">
                    </p>
                    <p class="comment-form-email">
                        <label for="email">E-mail </label><input id="email" name="email" type="email"  value="{{$comment->email}}" size="30" aria-describedby="email-notes">
                    </p>

                    <p class="form-submit">
                        <input name="submit" type="submit" id="submit" class="submit" value="Atualizar Comentário"><input type="hidden" name="id" value="{{$comment->id}}" id="id">
                        <input type="hidden" name="comment_parent" id="comment_parent" value="0">
                    </p>
                </form>
            </div>
        </div>
        
        <nav class="navigation post-navigation" role="navigation">
            <hr>
            <a href="{{route('detail', ['id' => $comment->film_id])}}" rel="prev"> <span class="meta-nav">←</span> Retornar</a>
            <hr>
        </nav>
        @endforeach                 
    </div>
 </div>

@stop