@extends('layouts.app')

@section('title', 'Teste Angular')

@section('content')
    <h1>Testando Angular</h1>
    <div ng-app="testApp" ng-controller="testController">
        <h2>@{{ message }}</h2>
        <button class="btn btn-success" ng-click="mostrarMensagem()">Clique para mostrar mensagem Angular</button>
    </div>

    <!-- Remova o carregamento direto do Angular -->
    <script>
        var app = angular.module('testApp', []);
        app.controller('testController', function($scope) {
            $scope.message = 'Angular está funcionando!';
            $scope.mostrarMensagem = function() {
                alert('O Angular está funcionando corretamente!');
            };
        });
    </script>
@endsection
