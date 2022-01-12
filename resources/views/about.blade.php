<x-home-master>
    @section('content')
    <style>
        .card {
            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
            margin: 8px;
        }
    </style>
        <div class="mt-4" style="height:843px; font-size:20px;">
            <div class="row">
                <div class="col">
                    <div class="text-center d-flex flex-column" style="color:white; background-color: #4e73df; background-image: linear-gradient(#4e73df, #224abe);">  
                        <h1 class="display-4">About Us</h1>
                        <p>This Project was conducted by 3 Final year Students of Near East University TRNC.</p>
                    </div>
                </div>  
            </div>

            <div class="row mt-3 text-center">

                <div class="col">
                    <div class="card">

                        <div class="d-flex justify-content-center mt-3 mb-2">
                            <img class="border border-dark" src="{{ asset('Profile-Images/Doğancan.jpg') }}" alt="about-image">
                        </div>

                        <h2 class="mb-3">Doğancan Örskıran</h2>
                        <p>Department of Computer Informations Sysytems</p>
                        <p style="font-weight:900">Web Design/Development</p>
                    </div>
                </div>

                <div class="col">
                    <div class="card">

                        <div class="d-flex justify-content-center mt-3 mb-2">
                            <img class="border border-dark" src="{{ asset('Profile-Images/Aminu.jpeg') }}" alt="about-image">
                        </div>

                        <h2 class="mb-3">Aminu Ibrahim</h2>
                        <p>Department of Computer Informations Sysytems</p>
                        <p style="font-weight:900">Networking and Documentation</p>

                    </div>
                </div>

                <div class="col">
                    <div class="card">

                        <div class="d-flex justify-content-center mt-3 mb-2">
                            <img class="border border-dark" src="{{ asset('Profile-Images/Dion.jpeg') }}" alt="about-image">
                        </div>

                        <h2 class="mb-3">Dion Mtandwa</h2>
                        <p>Department of Computer Informations Sysytems</p>
                        <p style="font-weight:900">UI/UX Design</p>

                    </div>
                </div>

            </div>

            <div class="row">
                <div class="col mt-4">
                    <div class="d-flex justify-content-center">
                        <a class="btn-lg text-decoration-none btn-primary mt-3" href="{{route('show.contact')}}">Contact Us</a>
                    </div>
                </div>
            </div>
        </div>    
    @endsection
</x-home-master>