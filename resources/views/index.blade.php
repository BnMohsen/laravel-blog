<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog Posts</title>
</head>
<body>
    <h1>Blog Posts</h1>
    <a href="/posts/create">Create a New Post</a>
    <hr>
    <?php foreach($posts as $post): ?>
        <h2><a href="/posts/<?= $post->id ?>"><?= $post->title ?></a></h2>
    <?php endforeach; ?>
</body>
</html>
