@extends('layouts.app')
@section('title', 'Characters')

@section('content')
    <div class="bg-main">
        <div class="jumbotron-sec"></div>
        <div class="container-lg position-relative py-5">
            <div class="text-uppercase text-white my_title position-absolute">
                Characters
            </div>
            <div class="row mt-4">
                <div class="col-3 comic-card mb-4">
                    <img class="img-fluid mb-3" src="https://www.repstatic.it/content/nazionale/img/2022/08/19/190035801-0c9c4fb1-3880-4555-acac-e006085a4ca5.jpg" alt="ww">
                    <h6 class="text-uppercase text-white text-center">Wonder Woman</h6>
                </div>
                <div class="col-3 comic-card mb-4">
                    <img class="img-fluid mb-3" src="https://www.consigli.it/wp-content/uploads/2019/03/superman.jpg" alt="superman">
                    <h6 class="text-uppercase text-white text-center">Superman</h6>
                </div>
                <div class="col-3 comic-card mb-4">
                    <img class="img-fluid mb-3" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQWR2TUJb0pjlQI2DlJFIG17CgvBnFhQsPtCGnvb-k8uTZ3T1UhO3EWjS0q-zUHbC-6LaM&usqp=CAU" alt="batman">
                    <h6 class="text-uppercase text-white text-center">Batman</h6>
                </div>
                <div class="col-3 comic-card mb-4">
                    <img class="img-fluid mb-3" src="https://i.pinimg.com/736x/ce/5c/2e/ce5c2e3cf07b729645fa7fd6c4035d9a.jpg" alt="joker">
                    <h6 class="text-uppercase text-white text-center">Joker</h6>
                </div>
                <div class="col-3 comic-card mb-4">
                    <img class="img-fluid mb-3" src="https://avatars.githubusercontent.com/u/3359943?v=4" alt="rick">
                    <h6 class="text-uppercase text-white text-center">Rc2pc2</h6>
                </div>
                <div class="col-3 comic-card mb-4">
                    <img class="img-fluid mb-3" src="https://media-exp1.licdn.com/dms/image/C4E03AQEroTFWUs1IBg/profile-displayphoto-shrink_200_200/0/1631206757311?e=1668038400&v=beta&t=f-cDgYefQHEkIFoMYAp7E7EuQ9ijlJIY_-lp_d7oRjk" alt="stef">
                    <h6 class="text-uppercase text-white text-center">Sergeant</h6>
                </div>
                <div class="col-3 comic-card mb-4">
                    <img class="img-fluid mb-3" src="https://media-exp1.licdn.com/dms/image/C5603AQHJUthYMdCyUg/profile-displayphoto-shrink_200_200/0/1517534974508?e=1668038400&v=beta&t=aImYtmjestexjczkAS6o-y5bKzfhHrFE9YKNVBqNgAI" alt="SuperTutor">
                    <h6 class="text-uppercase text-white text-center">Super Tutor</h6>
                </div>
                <div class="col-3 comic-card mb-4">
                    <img class="img-fluid mb-3" src="https://bleedingcool.com/wp-content/uploads/2020/07/NW75_2-1200x900.jpg" alt="Nightwing">
                    <h6 class="text-uppercase text-white text-center">Nightwing</h6>
                </div>
            </div>
        </div>
        <div class="bg-sec py-5">
            <div class="container-lg">
                <div class="row justify-content-around">
                    <div class="col-2 d-flex justify-content-center align-items-center">
                        <img  class="w-25" src="images/buy-comics-digital-comics.png" alt="digital">
                        <h5 class="text-uppercase text-white ms-2 fs-6">Digital Comics</h5>
                    </div>
                    <div class="col-2 d-flex justify-content-center align-items-center">
                        <img  class="w-25" src="images/buy-comics-merchandise.png" alt="merch">
                        <h5 class="text-uppercase text-white ms-2 fs-6">DC Merchandise</h5>
                    </div>
                    <div class="col-2 d-flex justify-content-center align-items-center">
                        <img  class="w-25" src="images/buy-comics-subscriptions.png" alt="subscriptions">
                        <h5 class="text-uppercase text-white ms-2 fs-6">Subscriptions</h5>
                    </div>
                    <div class="col-2 d-flex justify-content-center align-items-center">
                        <img  class="w-25" src="images/buy-comics-shop-locator.png" alt="Comic Shop Locator">
                        <h5 class="text-uppercase text-white ms-2 fs-6">Comic Shop Locator</h5>
                    </div>
                    <div class="col-2 d-flex justify-content-center align-items-center">
                        <img  class="w-25" src="images/buy-dc-power-visa.svg" alt="DC Power Visa">
                        <h5 class="text-uppercase text-white ms-2 fs-6">DC Power Visa</h5>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection