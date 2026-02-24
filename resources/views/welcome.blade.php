@extends('layouts.app')

@section('content')

<!-- Home Page -->

<x-home.herosection />

<x-home.afterhero />



<!-- services section home page -->

<x-home.servicessection />

<!-- estimate cost -->
<x-home.estimatecost />

<!-- about section home page -->
<x-home.about />



<!--before-after-section  -->

<!-- cta -->
<x-home.cta />

<!-- work-flow -->
<x-home.workflow />

<!-- sitaarch -->
<x-home.sitaarch />



<x-home.faq />



@endsection