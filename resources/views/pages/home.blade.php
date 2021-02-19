@extends('layouts.default')
@section('content')
    
<div id="content" class="site-content">
    <div id="primary" class="content-area column full">
        <main id="main" class="site-main">
            <div class="grid portfoliogrid">
                @foreach ($films as $film)
                    <article class="hentry">
                    <header class="entry-header">
                    <div class="entry-thumbnail">
                        <a href="{{route('detail', ['id' => $film->id])}}"><img src="img\{{$film->image}}" class="attachment-post-thumbnail size-post-thumbnail wp-post-image" alt="p1"/></a>
                    </div>
                    <h2 class="entry-title">
                        <a href="{{route('detail', ['id' => $film->id])}}" rel="bookmark">{{$film->title}}</a>
                    </h2>
                    <a class='portfoliotype' href='{{route('detail', ['id' => $film->id])}}'>Lançamento:{{$film->year}}</a>
                    </header>
                    <button  type="button" onclick="{{'location.href='}}'{{route('detail', ['id' => $film->id])}}'"  class="button">Ver detalhes</button>
                    </article>
                @endforeach   
            </div>
            <nav class="pagination">
				<a class="previous page-numbers" href="{{$films->previousPageUrl()}}">« Anterior</a>
                <a class="next page-numbers" href="{{$films->nextPageUrl()}}">Próxima »</a>
			</nav>
    		<br/>
        </main>
    </div>
 </div>
 <hr>
  {{--$films->links()--}} 
 <hr>        


@stop