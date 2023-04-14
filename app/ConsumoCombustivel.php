<?php
 

 class ConsumoCombustivel
 {
    public string $numeroSerie;
    public float $capacidadeTanque;
    public string $portador;

    function abastecer (Litros $litros)
    {
        //recebe a quanti a ser abastecida
    }
    function rodar (Rodado $rodado)
    {
        //quntia restante
    }
    function contar(Contar $contar)
    {
        //litros ainda disponiveis no carro
    }
 }