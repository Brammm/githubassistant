<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Generate helpful GitHub Assistant images">
    <meta name="author" content="@Brammm">
    <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">

    <!-- Twitter Card data -->
    <meta name="twitter:card" value="Generate helpful GitHub Assistant images">
    <meta name="twitter:title" content="GitHub Assistant Generator">
    <meta name="twitter:description" content="Generate helpful GitHub Assistant images">
    <meta name="twitter:creator" content="@brammm">
    <meta name="twitter:image" content="https://githubassistant.online/img.php?s=Hello+there...">

    <!-- Open Graph data -->
    <meta property="og:title" content="GitHub Assistant Generator" />
    <meta property="og:type" content="website" />
    <meta property="og:url" content="https://githubassistant.online/" />
    <meta property="og:image" content="https://githubassistant.online/img.php?s=Hello+there..." />
    <meta property="og:description" content="Generate helpful GitHub Assistant images" />

    <title>GitHub Assistant Generator</title>

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">

    <!-- Custom styles for this template -->
    <link href="cover.css" rel="stylesheet">
</head>

<body class="text-center">

<div class="cover-container d-flex w-100 h-100 p-3 mx-auto flex-column">
    <header class="masthead mb-auto">
        <div class="inner">
            <h3 class="masthead-brand">GitHub Assistant</h3>
        </div>
    </header>

    <main role="main" class="inner cover">
        <h1 class="cover-heading">Introducing: the GitHub Assistant</h1>
        <p class="lead">With the recent acquisition of <a href="https://github.com">GitHub</a> by <a href="https://microsoft.com">Microsoft</a>, it was only a matter of time before the first integrations appeared.</p>
        <img src="/img.php" alt="GitHub Assistant at work" height="300" />
        <h2>Generate your own</h2>
        <form method="get" action="img.php">
            <div class="input-group">
                <input type="text" name="s" class="form-control" placeholder="Enter text">
                <div class="input-group-append">
                    <button type="submit" class="btn btn-primary">Generate</button>
                </div>
            </div>
        </form>
        <h2>How to use</h2>
        Paste the generated image link in a comment with the following Markdown:
        <pre><code>
![](https://githubassistant.online/img.php?s=Hello+there...)
        </code></pre>
    </main>

    <footer class="mastfoot mt-auto">
        <div class="inner">
            <p>Made by <a href="https://twitter.com/brammm">@brammm</a>, for shits 'n giggles.</p>
        </div>
    </footer>
</div>


<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
</body>
</html>
