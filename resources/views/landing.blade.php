@extends('layouts.app')

@section('content')


        <Hero></Hero>
{{--        <section class="jumbotron text-center">--}}
{{--            <div class="container">--}}
{{--                <h1>Giuseppe Restaurant</h1>--}}
{{--                <p class="lead text-muted">We enjoy bringing happiness to your table.</p>--}}
{{--                <p>--}}
{{--                    <a href="#" class="btn btn-primary my-2">Main call to action</a>--}}
{{--                    <a href="#" class="btn btn-secondary my-2">Secondary action</a>--}}
{{--                </p>--}}
{{--            </div>--}}
{{--        </section>--}}

        <div class="py-5 bg-light">
            <div class="container">
                <product-card></product-card>
            </div>
        </div>

    <div class="album text-muted">

        <div class="container">

            <div class="row">

                <h1>This is a demo text</h1>

                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed egestas dolor vulputate quam convallis
                    consequat. Quisque eu lorem eget magna lacinia suscipit. Maecenas condimentum vehicula eros. Fusce
                    massa lacus, blandit et leo sed, accumsan commodo sem. Sed eget pulvinar tellus. Praesent ex diam,
                    sodales at consequat id, viverra ut dolor. In eget orci sit amet magna sagittis mattis sit amet sed
                    augue. Vivamus facilisis libero ligula, vel sodales ipsum sollicitudin id. Duis vitae urna rutrum,
                    dignissim arcu ac, elementum augue. Quisque id interdum ligula. Donec tincidunt feugiat massa sed
                    aliquam. Duis eu vehicula turpis.</p>

            </div>

        </div>

    </div>

@endsection
<script>
    // import Hero from "../js/components/client/Hero";
    // export default {
    //     components: {Hero}
    // }
</script>
