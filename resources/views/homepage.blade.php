<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Hello, World!</h1>

    <a href="/about" target="_blank" rel="noopener noreferrer">Go to about page</a>

    <p>A great number is {{ 2 + 2 }}</p>
    <p>The current date is: {{date('d/m/Y')}}</p>
    <p>My name is {{$name}}</p>
    <p>My cat's name is {{$catName}}</p>
</body>
</html>