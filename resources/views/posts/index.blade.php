<x-app-layout> 
 
    <div class="container py-8">  
      
      <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            @foreach ($posts as $post)

                <article class="w-full h-80 bg-cover bg-center @if($loop->first) md:col-span-2 @endif" style="background-image:url(@if($post->image) {{Storage::url($post->image->url)}} @else https://cdn.pixabay.com/photo/2016/12/22/15/50/list-1925752_1280.jpg @endif )">
                    <div class="w-full h-full px-8 flex flex-col justify-center">
                        <div class="">
                            @foreach ($post->tags as $tag)
                                <a href="{{route('posts.tag', $tag)}}" class="inline-block px-3 h-6 bg-{{$tag->color}}-600 text-white rounded-full ">{{$tag->name}}</a>
                            @endforeach
                        </div>
                        <h1 class="text-4xl text-white leading-8 font-bold mt-2">
                            <a href="{{route('posts.show', $post)}}">
                                {{$post->name}}
                            </a>
                            
                        </h1>
                        <div class="flex flex-row justify-between">
                            <div class="w-max inline-flex ml-4 items-center">
                                <svg class="w-4" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                                </svg>
                                <span class="text-xs ml-1 antialiased">{{$post->created_at->diffForHumans()}}</span>

                                <span class="text-xs ml-1 antialiased">{{$post->updated_at->diffForHumans()}}</span>

                            </div>
                        </div> 

                        <p>Publicado por {{$post->user->name}} </p>
                    </div> 
                </article>
            @endforeach
        </div>   
        <div class="mt-4">
            {{$posts->links()}}
        </div> 
        

    </div>
</x-app-layout>