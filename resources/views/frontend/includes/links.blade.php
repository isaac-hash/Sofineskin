<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!--Boostrap CSS CDN Link-->
    <link rel="stylesheet" href="../assets/frontend/css/bootstrap.min.css" />
    <!--Css Link-->
    <link rel="stylesheet" href="../assets/frontend/css/styles.css" />
    <title>SoFineSkin</title>

    @foreach($utilities as $key => $utilities)

    <link rel="shortcut icon" href="../assets/img/{{$utilities->fav_icon}}" type="image/x-icon">

    <title>{{$utilities->title}}</title>

    <meta content="{{$utilities->key_word}}" name="keywords">

    <meta name="description" content="{{$utilities->description}}">

    <meta name="author" content="{{$utilities->title}}">

    @endforeach




    <style>
        @media screen and (max-width:900px) {
            .dashboard{
                display: none;
            }
        }
    </style>

    
</head>

<body>