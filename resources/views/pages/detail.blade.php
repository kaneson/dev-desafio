@extends('layouts.default')
@section('content')
    
<div id="content" class="site-content">
    <div id="primary" class="content-area column full">
        <main id="main" class="site-main">
            @foreach ($films as $film)
            <div id="content" class="site-content">
                <div id="primary" class="content-area column on-thirds single-portfolio">
                    <main id="main" class="site-main">
                        <article class="portfolio hentry">
                            <header class="entry-header">
                            <div class="entry-thumbnail">
                                <img width="200" height="100" src="{{asset('img')}}\{{$film->image}}" class="attachment-post-thumbnail size-post-thumbnail wp-post-image" alt="p1"/>
                            </div>
                            <h1 class="entry-title">{{$film->title}}</h1>
                            <a class='portfoliotype' href='#'>{{$film->year}}</a>
                            </header>
                            <div class="entry-content">
                                <p>
                                </p>
                                <blockquote>
                                    <p>
                                        {{$film->description}}
                                    </p>
                                </blockquote>
                            </div>
                        </article>
                        
                        <nav class="navigation post-navigation" role="navigation">
                            <div class="nav-links">
                            <div class="nav-previous">
                            <a href="{{route('index')}}" rel="prev"> <span class="meta-nav">←</span> Retornar</a>
                            </div>
                            </div>
                        </nav>
                    </main>
                </div>
            </div>
            @endforeach   
            <div id="comments" class="comments-area">
                <div id="respond" class="comment-respond">
                    <h3 id="reply-title" class="comment-reply-title">DEIXE SEU COMENTÁRIO<small><a rel="nofollow" id="cancel-comment-reply-link" href="/demo-moschino/embed-audio/#respond" style="display:none;">Cancelar resposta</a></small></h3>
                    <form action="{{route('comment')}}" id="form_comment" method="post" id="commentform" class="comment-form" novalidate="">
                        @csrf
                        <p class="comment-notes">
                            <span id="email-notes">Seu nome e endereço de e-mail não serão publicados.</span> Os campos obrigatórios estão marcados <span class="required">*</span>
                        </p>
                        <p class="comment-form-comment">
                            <label for="comment">Comentário</label><textarea id="comment" name="comment" required cols="45" rows="8" minlength="10"></textarea>
                        </p>
                        <p class="comment-form-author">
                            <label for="name">Nome  </label><input id="name" name="name" type="text"  value="" size="30">
                        </p>
                        <p class="comment-form-email">
                            <label for="email">E-mail </label><input id="email" name="email" type="email"  value="" size="30" aria-describedby="email-notes">
                        </p>
                        <p class="form-submit">
                            <input name="submit" type="submit" id="submit" class="submit" value="Postar Comentário"><input type="hidden" name="comment_post_ID" value="{{$film->id}}" id="comment_post_ID">
                            <input type="hidden" name="comment_parent" id="comment_parent" value="0">
                        </p>
                    </form>
                </div>
            </div>
            <div class="grid bloggrid">
                @foreach ($comments as $comment)
                <article>
                    <header class="entry-header">
                        <div class="entry-meta">
                            <span class="posted-on"><time class="entry-date published">{{$comment->created_at}}</time></span>						
                        </div>
                    </header>
                    <div class="entry-summary">  
                        <p>
                            {{$comment->comment}} <a class="more-link" href="{{route('view_comment', ['id' => $comment->id])}}">Editar</a>
                        </p>
                    </div>
                </article>
                @endforeach                          
            </div>
        </main>
    </div>
 </div>

@stop