@extends ('layouts.app')

@section ('content')

 <div class="wrapper create-pizza">

    <h1>Create a new Pizza</h1>
    <form action=" {{route('pizzas.store')}} " method="post"> 
    @csrf
        <label for="name">Your name: </label>
        <input type="text" id="name" name="name">

        <label for="type">Choose pizza type: </label>
        <select name="type" id="type"> 
            <option value=""> </option>
            <option value="Margherita">Margherita</option>
            <option value="hawaiian">Hawaiian</option>
            <option value="volcano">Volcano</option>
            <option value="Veg-Supreme">Veg-Supreme</option>
        </select>

        <label for="type">Choose base type: </label>
        <select name="base" id="base">
            <option value=""> </option>
            <option value="cheesy curst">cheesy curst</option>
            <option value="garllica crust">garllica crust</option>
            <option value="thin & crispy">Thin & crispy</option>
            <option value="thick & crispy">Thick & crispy</option>
        </select> <br>

        <label >Extra topping:</label> <br>
        <input type= "checkbox" name= "topping[]" value= "Mushrooms">Mushrooms <br>
        <input type= "checkbox" name= "topping[]" value= "Garlic">Garlic <br>
        <input type= "checkbox" name= "topping[]" value= "Olive">Olive <br>
        <input type= "checkbox" name= "topping[]" value= "Pepper">Pepper <br>

        <input type="submit" value="Order Pizza">
    </form>
</div>

@endsection