@extends('Layout.master')
@section('title', 'Home')

@section('style')
    <style>
        .parent {
            display: grid;
            grid-template-columns: repeat(5, 1fr);
            grid-template-rows: 1fr;
            grid-column-gap: 0px;
            grid-row-gap: 0px;
            height: 100vh;
            margin-top: 150px;
            text-align: center;
        }

        .div1 {
            grid-area: 1 / 1 / 5 / 2;
            background-color: rgb(127, 138, 148);
            border-radius: 10px;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
        }

        .team-member {
            margin-bottom: 20px;
        }

        #nav-linked {
            display: flex;
            flex-direction: column;
            align-items: stretch;
            height: 300px;
            width: 100%;
            flex-wrap: wrap;
            align-content: center;
            justify-content: space-evenly;
            margin-left: 30%;

        }

        #nav-linked .nav-link {
            width: 100%;
            height: 60px;
            border-radius: 10px 0 0 10px;
            transition: background-color 0.3s ease, font-size 0.3s ease;
            display: flex;
            justify-content: center;
            align-items: center;
            text-decoration: none;
            color: white;
        }

        #nav-linked .nav-link:hover {
            background-color: rgb(90, 92, 92);
            font-size: x-large;
        }

        .div5 {
            grid-area: 1 / 2 / 5 / 6;
            background-color: rgb(64, 66, 66);
            padding: 20px;
            display: flex;
            justify-content: center;
            align-items: center;
            border-radius: 10px;
        }

        .content-test div {
            display: none;
        }

    </style>
@endsection

@section('content')

    <div class="parent">
        <div class="div1">
            <div class="team-member">
                <a href="#"> <img class="mx-auto rounded-circle" src="assets/img/team/1.jpg" alt="..." /></a>
                <h4>Parveen Anand</h4>
                <p class="text-muted">Lead Designer</p>
                <div class="social-buttons">
                    <a class="btn btn-dark btn-social mx-2" href="#!" aria-label="Parveen Anand Twitter Profile"><i
                            class="fab fa-twitter"></i></a>
                    <a class="btn btn-dark btn-social mx-2" href="#!" aria-label="Parveen Anand Facebook Profile"><i
                            class="fab fa-facebook-f"></i></a>
                    <a class="btn btn-dark btn-social mx-2" href="#!" aria-label="Parveen Anand LinkedIn Profile"><i
                            class="fab fa-linkedin-in"></i></a>
                </div>
            </div>
            <div id="nav-linked">
                <a class="nav-link active" href="#test-profile">Profile</a>
                <a class="nav-link" href="#test-concours">Concours</a>
                <a class="nav-link" href="#test-post">Posts</a>
            </div>
        </div>

        <div class="div5">
            <div class="content-test">
                <div class="text-1 active" id="test-profile">
                    <h2>Profile</h2>
                    @foreach ($users as $user)
                        <p> {{$user->fname}} </p>
                        <p> {{$user->email}} </p>
                    @endforeach
                </div>

                <div class="text-2" id="test-concours">
                    <h2>Concours</h2>
                    <p>Lorem ipsum dolor sit</p>
                </div>
                <div class="text-3" id="test-post">
                    <h2>Posts</h2>
                    <p>Lorem ipsum dolor sit</p>
                </div>
            </div>
        </div>
    </div>


@endsection

@section('script')
    <script></script>

@endsection
