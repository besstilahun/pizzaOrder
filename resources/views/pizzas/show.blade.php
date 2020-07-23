@extends ('layouts.app')

@section ('content')

    <div class="wrapper pizza-details">
            <div class="content"> 

                <div class="title m-b-md">
                    <h1>Order for {{ $pizza->name }}</h1>
                </div>
                <div>
                    <p class="base">The base is: {{ $pizza->base }}</p>
                    <p class="type">Type: {{ $pizza->type }} </p>

                        <p class= "topping">Extra toppings: </p>
                            <ul>
                            @foreach($pizza->topping as $toppings)
                            <li> {{ $toppings }}</li> 
                            @endforeach
                            </ul>
                         
                        <!-- destroy list -->
                        <form action="{{ route ( 'pizzas.destory' ,$pizza->id) }}" method = "POST">
                        @csrf
                        @method('DELETE')
                        <button>Complete order!</button>
                        </form>
                    <a class="back"href="/pizzas"><- Back to all pizzas</a>
                    
                </div>
            </div>
    </div>

@endsection