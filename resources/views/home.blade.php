@extends('layouts.app')

@section('content')
<div class="container">
    <!-- Add icon library -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <div class="card-group">
        <div class="card h-100">
            <img src="/images/curso.png" class="card-img-top" alt="Imagem do Curso">
            <div class="card-body">
                <h5 class="card-title">Logica de Programação - 1</h5>
                <p class="card-text">Neste curso você aprendera a história da programação e como ela é interpretada pelo computador.
                </p>
                <a href="cursos.php" class="btn btn-primary">Iniciar Curso</a>
            </div>
        </div>
        <div class="card h-100">
            <img src="/images/curso.png" class="card-img-top" alt="Imagem do Curso">
            <div class="card-body">
                <h5 class="card-title">Logica de Programação - 2</h5>
                <p class="card-text">Neste curso você aprendera o basico de logica de programação, como utilizar estruturas de decisão e de repetição.
                </p>
                <a href="#" class="btn btn-primary">Iniciar Curso</a>
            </div>
        </div>
        <div class="card h-100">
            <img src="/images/curso.png" class="card-img-top" alt="Imagem do Curso">
            <div class="card-body">
                <h5 class="card-title">Logica de Programação - 3</h5>
                <p class="card-text">Neste curso você aprendera funções de logica de programação, como utilizar estruturas de decisão e de repetição.
                </p>
                <a href="#" class="btn btn-primary">Iniciar Curso</a>
            </div>
        </div>
        <div class="card h-100">
            <img src="/images/curso.png" class="card-img-top" alt="Imagem do Curso">
            <div class="card-body">
                <h5 class="card-title">Logica de Programação - 4</h5>
                <p class="card-text">Neste curso você aprendera o avançado de logica de programação, como utilizar estruturas de decisão e de repetição.
                </p>
                <a href="#" class="btn btn-primary">Iniciar Curso</a>
            </div>
        </div>
    </div>
</div>
@endsection
