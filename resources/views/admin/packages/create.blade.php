@extends('layouts.admin')

@section('title')
    Add Package
@endsection

@section('content')

    <div class="card">
        <div class="card-header">
            <h4>Add New Package</h4>

        </div>
        <div class="card-body">

            <form action="{{ url('/admin/packages') }}" method="post">
                <h5 class="font-weight-bold">Package Information</h5>
                <hr>
                <div class="form-group">
                    <label for="name">Package Name</label>
                    <input class="form-control" type="text" id="name" name="name"
                        placeholder="Ex : Staycation at Villa Sabang">
                </div>

                <div class="form-group">
                    <label for="price">Price (IDR)</label>
                    <input class="form-control" type="number" step="10000" min="100000" max="200000" value="100000">
                </div>

                <div class="form-group">
                    <label for="duration">Duration (days)</label>
                    <input class="form-control" type="number" name="duration" id="duration" min="1" max="5" value="1">
                </div>
                <div class="form-group">
                    <label for="province">Province</label>
                    <input list="provinceList" id="province" class="form-control">
                    <datalist id="provinceList">
                        @foreach ($provinces as $province)
                            <option value="{{ $province->name }}">{{ $province->name }}</option>
                        @endforeach
                    </datalist>
                </div>



                <div class="form-group">

                    <label for="city">City</label>
                    <select name="city" id="city" class="form-control">
                        <option value="---">Pick A Province First</option>
                    </select>
                </div>

                <h5 class="font-weight-bold mt-3">Accommodation Details</h5>
                <hr>
                <div class="form-group">
                    <label for="name">Package Name</label>
                    <input class="form-control" type="text" id="name" name="name"
                        placeholder="Ex : Staycation at Villa Sabang">
                </div>




            </form>
        </div>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>


    <script>
        let provinceSelect = document.getElementById('province');

        provinceSelect.addEventListener('change', () => {

            let provinceValue = provinceSelect.value;

            fetch('/region/' + provinceValue)
                .then(response => response.json())
                .then(data => {
                    let citySelect = document.getElementById('city');
                    citySelect.innerHTML = "";

                    data.forEach((city) => {
                        let citySplitted = city.name.split(" ");
                        citySplitted.shift();
                        citySplitted = citySplitted.join(" ");
                        citySelect.innerHTML += `
                        <option value ="${citySplitted}">${citySplitted}</option>
                    `;
                    })

                });
        })
    </script>
@endsection
