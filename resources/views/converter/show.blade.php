<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
    <title>Converter</title>
</head>
<body>
<div class="bg-blue-400 min-h-screen flex items-center justify-center font-sans text-blue-800">
    <div class="grid grid-cols-1 grid-rows-3 bg-blue-200 rounded gap-y-2">
        <div>
            <img class="object-cover h-20 w-full rounded" src="{{asset('/storage/images/currencies.jpg')}}" alt="picture"/>
        </div>
        <div class="p-4">
            <form method="post" action="/submit">
                <select name="currency" class="border border-gray-300 rounded h-9 pl-5 pr-10 bg-blue-500
                text-white hover:border-gray-400 appearance-none">>
                    @foreach($currencies as $currency)
                        <option value="{{$currency->symbol}}">{{$currency->symbol}}</option>
                    @endforeach
                </select>
                <input type="number" name="amount" class="focus:outline-none focus:ring focus:border-blue-400 rounded
                placeholder-blue-400" placeholder="enter amount">
                <button type="submit" class="bg-blue-500 active:bg-pink-600 uppercase text-white font-bold
                                        hover:shadow-md shadow text-xs px-4 py-2 rounded outline-none focus:outline-none
                                        sm:mr-2 mb-1 ">
                    Convert
                </button>
            </form>
        </div>
        <div class="text-3xl text-center">
            @if(!empty($choice))
                <p>
                    {{ $choice[0] }} {{ $choice[1] }} = {{ number_format((1 / ($choice[2] / 100000) * $choice[0] ), 2) }} EUR
                </p>
            @endif
        </div>
    </div>
</div>
</body>
</html>
