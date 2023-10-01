@extends('layouts.app')

@section('content')
    <!-- start banner Area -->
    <section class="banner-area relative" id="home">
        <div class="overlay overlay-bg"></div>
        <div class="container">
            <div class="row fullscreen d-flex align-items-center justify-content-between">
                <div class="banner-content col-lg-6 col-md-6 ">
                    <h6 class="text-white ">Need a ride? just call</h6>
                    <h1 class="text-uppercase">
                        911 999 911
                    </h1>
                    <p class="pt-10 pb-10 text-white">
                        Whether you enjoy city breaks or extended holidays in the sun, you can always improve your travel
                        experiences by staying in a small.
                    </p>
                    <a href="tel:+923155395245" class="primary-btn text-uppercase">Call for taxi</a>
                </div>
                <div class="col-lg-4  col-md-6 header-right">
                    <h4 class="pb-30">Book Your Taxi Online!</h4>
                    <form class="form" method="GET" action="{{ route('taxi.booking') }}">
                        <div class="from-group">
                            <input class="form-control txt-field" type="text" name="name" placeholder="Your name"
                                onfocus="this.placeholder = ''" onblur="this.placeholder = 'Your name'">
                        </div>
                        <div class="from-group">
                            <input class="form-control txt-field" type="email" name="email" placeholder="Email address"
                                onfocus="this.placeholder = ''" onblur="this.placeholder = 'Email address'">

                        </div>
                        <div class="from-group">
                            <input class="form-control txt-field" type="tel" name="phone" placeholder="Phone number"
                                onfocus="this.placeholder = ''" onblur="this.placeholder = 'Phone number'">
                        </div>
                        <div class="form-group">
                                <input name="datetime" class="form-control" type="datetime-local">
                                
                        </div>
                        <div class="form-group">
                            <input id="addressInput" name="from" type="text" class="form-control addressInput"
                                placeholder="Enter an address or location">
                            <ol class="suggestions" id="suggestions"></ol>
                        </div>
                        <div class="form-group">
                            <input id="addressInput2" name="destination" type="text" class="form-control addressInput"
                                placeholder="Enter an address or location">
                            <ol class="suggestions" id="suggestions2"></ol>
                        </div>




                        <div class="form-group">

                            <button class="btn btn-default btn-lg btn-block text-center text-uppercase">Make
                                reservation</button>

                        </div>
                    </form>




                </div>
            </div>
        </div>
    </section>
    <!-- End banner Area -->
@endsection

@section('script')
    <script>
        const addressInput = document.getElementById('addressInput');
        const suggestionsList = document.getElementById('suggestions');
        const addressInput2 = document.getElementById('addressInput2');
        const suggestionsList2 = document.getElementById('suggestions2');

        addressInput.addEventListener('input', () => {
            const query = addressInput.value;

            // Clear previous suggestions
            suggestionsList.innerHTML = '';

            if (query.length > 2) {
                // Make an AJAX request to the Nominatim API
                const apiUrl = `https://nominatim.openstreetmap.org/search?format=json&q=${query}`;

                fetch(apiUrl)
                    .then(response => response.json())
                    .then(data => {
                        // Display suggestions in the list
                        data.slice(0, 3).forEach(suggestion => {
                            const li = document.createElement('li');
                            li.textContent = suggestion.display_name;
                            li.addEventListener('click', () => {
                                // Populate the input field when a suggestion is clicked
                                addressInput.value = suggestion.display_name;
                                suggestionsList.innerHTML = '';
                            });
                            suggestionsList.appendChild(li);
                        });
                    })
                    .catch(error => {
                        console.error(error);
                    });
            }
        });
        addressInput2.addEventListener('input', () => {
            const query = addressInput2.value;

            // Clear previous suggestions
            suggestionsList2.innerHTML = '';

            if (query.length > 2) {
                // Make an AJAX request to the Nominatim API
                const apiUrl = `https://nominatim.openstreetmap.org/search?format=json&q=${query}`;

                fetch(apiUrl)
                    .then(response => response.json())
                    .then(data => {
                        // Display suggestions in the list
                        data.slice(0, 3).forEach(suggestion => {
                            const li = document.createElement('li');
                            li.textContent = suggestion.display_name;
                            li.addEventListener('click', () => {
                                // Populate the input field when a suggestion is clicked
                                addressInput2.value = suggestion.display_name;
                                suggestionsList2.innerHTML = '';
                            });
                            suggestionsList2.appendChild(li);
                        });
                    })
                    .catch(error => {
                        console.error(error);
                    });
            }
        });
    </script>
@endsection
