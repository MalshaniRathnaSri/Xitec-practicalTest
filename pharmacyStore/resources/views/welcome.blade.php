<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <title>{{env ('APP_NAME')}}</title>
</head>
<body>
    <div>
        <div class="flex justify-center items-center">
            <span class="font-bold lg:text-5xl md:text-3xl text-lg mt-16 text-blue-500 text-center block">WELCOME TO SUWANA <br> NEW PHARMACY STORE</span>
        </div>
        <div class="flex justify-center items-center mt-4">
            <span class="text-center font-semibold lg:text-lg md:text-md text-sm">
                    Discover a new way of managing your health and wellness with Suwana New Pharmacy Store. 
                    <br/>
                    We offer a wide range of prescription medications, over-the-counter drugs, 
                    <br/>health supplements, and wellness products.
            </span>
        </div>

        <div class="flex flex-col lg:flex-row md:flex-row justify-center items-center mt-6 space-x-8 text-2xl font-bold text-blue-400">
            <div class="border-2 border-blue-800 rounded-xl p-4 ">
                <span>Are you Patient?</span>
                <div class="text-sm text-green-400">
                    <a href="{{route ('home')}}">Click Here....</a>
                </div>
            </div>
            <div class="border-2 border-blue-800 rounded-xl p-4">
                <span>Are you Admin?</span>
                <div class="text-sm text-green-400">
                    <a href="{{route ('admin.show')}}">Click Here....</a>
                </div>
            </div>
        </div>
    </div>
</body>
</html>