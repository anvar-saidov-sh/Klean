# Bugs
### In this markdown I make notes of the bugs in the program that I found but can't fix right now.

```php
{{ is_countable($post->comments) ? count($post->comments) : 0 }} 
// count function not working even though there are comments
```