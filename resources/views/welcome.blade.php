@extends('layouts.app')

@section('content')

<!-- Home Page -->

<x-home.herosection />




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

<x-home.afterhero />

<!-- sitaarch -->
<x-home.sitaarch />



<x-home.faq />



@endsection