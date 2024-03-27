# Bugs
### In this markdown I make notes of the bugs in the program that I found but can't fix right now.

```php
{{ is_countable($post->comments) ? count($post->comments) : 0 }} 
// count function not working even though there are comments
```
### Issues with comments problem succesfully fixed

<p>I have another issue with displaying photo from storage</p>


```
@if ($post->photo != null)
    <img class="img-fluid rounded w-100" src={{asset('storage/app/public/'.$post->photo)}}>
    {{-- <p>{{$post->photo}}</p> --}}
@endif


// with this code or ***src{{asset('storage/'.$post->photo)}}*** I cant display photo in blade format
// In addition in create_posts migration ***string('photo')*** shown as tinyint type in database posts table
```