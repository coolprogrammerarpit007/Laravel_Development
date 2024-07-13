<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Home Page</title>
    <!-- Required Meta Tags -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="UTF-8">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <!-- Showing data into blade.php file -->
    <h1>Welcome: {{$name ?? 'Guest'}}</h1>
    <h3>Today is: {{date('d-m-y')}}</h3>

    <!-- conditional statment syntax in blade.php file -->
    {{-- @if($name == ""){
        {{"Name is Empty"}}
    }
    @elseif($name == 'Rohit')
        {{"Name is Rohit"}}
    @else
        {{"Name is Something Else!"}}
    @endif

    {{-- unless and endunless directives --}}
    {{-- @unless($name == 'wscubetech') --}}
        {{-- {{'Name is not WSCube Tech'}} --}}
    {{-- @endunless --}} 
        {{-- {{'Name is the WSCUBE Tech'}} --}}

    {{-- @isset() and @endisset() directives in the blade file to check whether a variable exist or not --}} 
    {{-- this directives check whether the variable exist or not --}}

    {{-- @isset($name)
        {{'Name is Empty!'}}
    @endisset --}}

    {{-- @for and @endfor directive
    @for ($i = 0; $i < 10; $i++)
        {{-- {{"Hello Arpit"}}."<br>" --}}
        {{-- <p>{{$i}}</p> --}}
    {{-- @endfor --}} 

    {{-- @while and @endwhile directive  --}}
    {{-- @php
        $i = 1;
    @endphp
    @while ($i < 20)
        <p>{{$i}}</p>
    @php
        $i++;
    @endphp        
    @endwhile --}}

    {{-- @foreach directive --}}
    {{-- @php
        $friends = ['John','Steve','Kingsley','Sirius'];
    @endphp
    @foreach ($friends as $item=>$value)
        <h3>Friend: {{$item}} : {{$value}}</h3>
    @endforeach --}}
    {{-- Countries data shown in the select tag --}}
    
    {{-- @php
    $countries = [
    "Afghanistan", "Albania", "Algeria", "Andorra", "Angola", "Antigua and Barbuda",
    "Argentina", "Armenia", "Australia", "Austria", "Azerbaijan", "Bahamas",
    "Bahrain", "Bangladesh", "Barbados", "Belarus", "Belgium", "Belize", "Benin",
    "Bhutan", "Bolivia", "Bosnia and Herzegovina", "Botswana", "Brazil", "Brunei",
    "Bulgaria", "Burkina Faso", "Burundi", "Cabo Verde", "Cambodia", "Cameroon",
    "Canada", "Central African Republic", "Chad", "Chile", "China", "Colombia",
    "Comoros", "Congo (Congo-Brazzaville)", "Costa Rica", "Croatia", "Cuba",
    "Cyprus", "Czechia (Czech Republic)", "Denmark", "Djibouti", "Dominica",
    "Dominican Republic", "Ecuador", "Egypt", "El Salvador", "Equatorial Guinea",
    "Eritrea", "Estonia", "Eswatini (fmr. Swaziland)", "Ethiopia", "Fiji", "Finland",
    "France", "Gabon", "Gambia", "Georgia", "Germany", "Ghana", "Greece", "Grenada",
    "Guatemala", "Guinea", "Guinea-Bissau", "Guyana", "Haiti", "Honduras", "Hungary",
    "Iceland", "India", "Indonesia", "Iran", "Iraq", "Ireland", "Israel", "Italy",
    "Jamaica", "Japan", "Jordan", "Kazakhstan", "Kenya", "Kiribati", "Kuwait",
    "Kyrgyzstan", "Laos", "Latvia", "Lebanon", "Lesotho", "Liberia", "Libya",
    "Liechtenstein", "Lithuania", "Luxembourg", "Madagascar", "Malawi", "Malaysia",
    "Maldives", "Mali", "Malta", "Marshall Islands", "Mauritania", "Mauritius",
    "Mexico", "Micronesia", "Moldova", "Monaco", "Mongolia", "Montenegro", "Morocco",
    "Mozambique", "Myanmar (formerly Burma)", "Namibia", "Nauru", "Nepal",
    "Netherlands", "New Zealand", "Nicaragua", "Niger", "Nigeria", "North Korea",
    "North Macedonia", "Norway", "Oman", "Pakistan", "Palau", "Palestine State",
    "Panama", "Papua New Guinea", "Paraguay", "Peru", "Philippines", "Poland",
    "Portugal", "Qatar", "Romania", "Russia", "Rwanda", "Saint Kitts and Nevis",
    "Saint Lucia", "Saint Vincent and the Grenadines", "Samoa", "San Marino",
    "Sao Tome and Principe", "Saudi Arabia", "Senegal", "Serbia", "Seychelles",
    "Sierra Leone", "Singapore", "Slovakia", "Slovenia", "Solomon Islands", "Somalia",
    "South Africa", "South Korea", "South Sudan", "Spain", "Sri Lanka", "Sudan",
    "Suriname", "Sweden", "Switzerland", "Syria", "Taiwan", "Tajikistan", "Tanzania",
    "Thailand", "Timor-Leste", "Togo", "Tonga", "Trinidad and Tobago", "Tunisia",
    "Turkey", "Turkmenistan", "Tuvalu", "Uganda", "Ukraine", "United Arab Emirates",
    "United Kingdom", "United States of America", "Uruguay", "Uzbekistan", "Vanuatu",
    "Vatican City", "Venezuela", "Vietnam", "Yemen", "Zambia", "Zimbabwe"
];
    @endphp
    <select id="world-countries">
        @foreach ($countries as $index=>$country)
            <option value="$index">{{$country}}</option>
        @endforeach
    </select> --}}

    {{-- @break and @continue directive  --}}

    {{-- @for ($i = 0; $i <= 15; $i++)
        @if ($i == 13)
            @continue
        @endif
        {{$i}}
    @endfor --}}

    {{-- @includes is used to include file --}}
    {{-- @yield directive is used to display the contents of a given section --}}
    {{-- @section directive, defines a section of content --}}
    {{-- @extends directive to specify which layout the child view should inherit --}}

</body>
</html>
