@extends('layouts.app')

@section('content')
<div class="wrapper create-pizza">
    <h1>Create a New Pizza</h1>
    <form action="/pizzas" method="POST">
    @csrf
        <!-- Cross Side Request Forgury -->
        <label for="name">Your Name:</label>
        <input type="text" id="name" name="name">
        <label for="type">Choose Pizza type:</label>
        <select name="type" id="type">
            <option value="Margherita">Margherita</option>
            <option value="Hawaiian">Hawaiian</option>
            <option value="Veg-Supreme">Veg-Supreme</option>
            <option value="Volcano">Volcano</option>
        </select>
        <label for="base">Choose base type:</label>
        <select name="base" id="base">
            <option value="Cheesy-crust">Cheesy-crust</option>
            <option value="Garlic-crust">Garlic-crust</option>
            <option value="Thin & Crispy">Thin & Crispy</option>
            <option value="Thick">Thick</option>
        </select>
        <fieldset>
            <label >Extra Toppings:</label><br />
            <input type="checkbox" name="toppings[]" value="mushrooms">Mushrooms <br />
            <input type="checkbox" name="toppings[]" value="peppers">Peppers <br />
            <input type="checkbox" name="toppings[]" value="garlic">Garlic <br />
            <input type="checkbox" name="toppings[]" value="Olives">Olives <br />
        </fieldset>
        <input type="submit" value="Order Pizza">

    </form>
</div>
@endsection