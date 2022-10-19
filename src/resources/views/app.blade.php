<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" value="{{ csrf_token() }}" />
    <title>Vue JS Furnitures Management</title>
    <link href="{{ mix('css/app.css') }}" type="text/css" rel="stylesheet" />
</head>
<body>
<div id="app"></div>
<script src="{{ mix('js/app.js') }}" type="text/javascript"></script>
<script src="https://unpkg.com/vue@2"></script>
<script src="https://cdn.jsdelivr.net/npm/vue@2/dist/vue.min.js"></script>
</body>
</html>