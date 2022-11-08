<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <script src="https://cdn.tailwindcss.com"></script>

        <title>Calculator</title>
    </head>
    <body>
        <div class="mt-20 mx-20 grid justify-items-center">
            <form action="{{ route('calculat') }}" method="POST">
                @csrf
                <div class="flex flex-col">
                    <div class="mb-5">
                        <label for="first_argument">First Argument: </label>
                        <input type="number" name="first_argument" id="first_argument" class="border border-gray-600" value="{{ @old('first_argument') }}">

                        @error('first_argument')
                        <div class="mt-2">
                            <span class="text-red-400">{{ $message }}</span>
                        </div>
                        @enderror
                    </div>

                    <div class="mb-5">
                        <label for="second_argument">Second Argument :</label>
                        <input type="number" name="second_argument" id="second_argument" class="border border-gray-600"value="{{ @old('second_argument')}}">

                        @error('second_argument')
                        <div class="mt-2">
                            <span class="text-red-400">{{ $message }}</span>
                        </div>
                        @enderror
                    </div>

                    <div class="mb-5">
                        <label>Operator: </label>
                        <label for="addition">+</label>
                        <input type="radio" name="operator" id="addition" value="addition" class="mr-3">
                        <label for="subtraction">-</label>
                        <input type="radio" name="operator" id="subtraction" value="subtraction" class="mr-3">
                        <label for="multiplication">*</label>
                        <input type="radio" name="operator" id="multiplication" value="multiplication" class="mr-3">
                        <label for="division">/</label>
                        <input type="radio" name="operator" id="division" value="division">

                        @error('operator')
                        <div class="mt-2">
                            <span class="text-red-400">{{ $message }}</span>
                        </div>
                        @enderror
                    </div>

                    <input type="submit" value="Calculat" class="bg-blue-500 text-gray-100 mx-10">

                </div>
            </form>

            @isset ($result)
                <div class="mt-10 border border-gray-700 w-1/5">
                    <p>= {{ $result }}</p>
                </div>
            @endisset
        </div>
    </body>
</html>
