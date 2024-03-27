<x-layouts.main>
    <x-slot:title>
        Create a post
    </x-slot:title>
    <x-page-header>
        Create a post
    </x-page-header>
    <div class="container-fluid py-5 mb-5">
        <div class="container py-5">
            <div class="contact-form">
                <div id="success"></div>
                <form action={{route('posts.store')}} method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="control-group">
                        <input type="text" class="form-control p-4" name="title" placeholder="Title"  value="{{ old('title') }}"/>
                        @error('title')
                            <p class="help-block text-danger">{{$message}}</p>
                        @enderror
                    </div>
                    <div class="control-group m-4">
                        <select name="category_id">
                            @foreach ($categories as $category)
                                <option value="{{$category->id}}">{{$category->name}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="control-group mt-4 mb-4"> 
                        {{-- required="required" data-validation-required-message="Please enter a title"
                         required="required" data-validation-required-message="Please enter your short content"
                          required="required" data-validation-required-message="Please enter your content" --}}
                        <input type="file" class="form-control p-3" id="subject" placeholder="Image" name="photo"/>
                        @error('photo')
                            <p class="help-block text-danger">{{$message}}</p>
                        @enderror
                    </div>

                    <div class="control-group">
                        <textarea class="form-control p-4" rows="3" name="short_content" placeholder="Short content">{{old('short_content') }}</textarea>
                        @error('short_content')
                            <p class="help-block text-danger">{{$message}}</p>
                        @enderror
                    </div>
                    <div class="control-group">
                        <textarea class="form-control p-4" rows="6" name="content" placeholder="Content">{{old('content') }}</textarea>
                        @error('content')
                            <p class="help-block text-danger">{{$message}}</p>
                        @enderror
                    </div>
                    <div>
                        <button class="btn btn-primary btn-block py-3 px-5" type="submit">Create a post</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-layouts.main>