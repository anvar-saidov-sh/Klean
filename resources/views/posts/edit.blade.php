<x-layouts.main>
    <x-slot:title>
        Edit post #{{$post->id}}
    </x-slot:title>
    <x-page-header>
        Edit post #{{$post->id}}
    </x-page-header>
    <div class="container-fluid py-5 mb-5">
        <div class="container py-5">
            <div class="contact-form">
                <div id="success"></div>
                <form action={{route('posts.update', ['post' => $post->id])}} method="POST" enctype="multipart/form-data">
                    @method('PUT')
                    @csrf
                    <div class="control-group">
                        <input type="text" class="form-control p-4" name="title" placeholder="Title"  value="{{ $post->title }}"/>
                        @error('title')
                            <p class="help-block text-danger">{{$message}}</p>
                        @enderror
                    </div>
                    <div class="control-group"> 
                        {{-- required="required" data-validation-required-message="Please enter a title"
                         required="required" data-validation-required-message="Please enter your short content"
                          required="required" data-validation-required-message="Please enter your content" --}}
                        <input type="file" class="form-control p-3" id="subject" placeholder="Image" name="photo"/>
                        @error('photo')
                            <p class="help-block text-danger">{{$message}}</p>
                        @enderror
                    </div>
                    <div class="control-group">
                        <textarea class="form-control p-4" rows="3" name="short_content" placeholder="Short content">{{ $post->short_content }}</textarea>
                        @error('short_content')
                            <p class="help-block text-danger">{{$message}}</p>
                        @enderror
                    </div>
                    <div class="control-group">
                        <textarea class="form-control p-4" rows="6" name="content" placeholder="Content">{{ $post->content }}</textarea>
                        @error('content')
                            <p class="help-block text-danger">{{$message}}</p>
                        @enderror
                    </div>
                    <div>
                        <button class="btn btn-primary btn-block py-3 px-5" type="submit">Edit a post</button>
                        <a class="btn btn-primary btn-block py-3 px-5" href={{ route('posts.show',['post' => $post->id])}}>Cancel</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-layouts.main>