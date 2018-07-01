<?php
$num = 20;
?>

{{ "Exemplo de estrutura condicional" }}

@if($num<20)
    <p>Número é menor que 20</p>

@elseif($num==20)
    <p>Número é igual que 20</p>
@else
    <p>Número é maior que 20</p>

@endif

{{ "Exemplo de For" }}

@for($i = 0; $i<20; $i++)
   <p> Valor: {{$i}} </p>
@endfor

{{"Exemplo de While"}}

<?php
$k = 0;
?>

@while($k<20)
    <p> Valor: {{ $k }} </p>
    <?php $k++; ?>
@endwhile

{{"Exemplo Foreach"}}

<?php
$array = [1, 2, 3, 4, 5];
?>
@foreach($array as $value)
    <p>Chave: {{$loop->index}}, Valor: {{ $value }}</p>
@endforeach


{{"Exemplo For else"}}
<?php
$array = [];
?>
@forelse($array as $value)
    <p>Chave: {{$loop->index}}, Valor: {{ $value }}</p>
@empty
    <p>Nenhum elemento encontrado no array</p>
@endforelse
