<x-layout>
    
    <x-nav />
    
    @if (session()->has('approve'))
    <div class="row justify-content-center">
        <div class="col-5 alert alert-success text-center shadow rounded">
            {{ session('approve') }} 
        </div>
    </div>
    @endif
    @if (session()->has('downgrade'))
    <div class="row justify-content-center">
        <div class="col-5 alert alert-success text-center shadow rounded">
            {{ session('downgrade') }} 
        </div>
    </div>
    @endif
    
    <div class="container marginCustom">
        <div class="row">
            
            {{-- TABELLA PER GLI APPLICANTS REVISORI --}}
            <div class="col-12 my-5">
                <h1 class="display-6 my-5">{{__("ui.Rev_app")}}</h1>
            </div>
            <div class="col-12"> 
                <table class="table table-dark table-borderless table-responsive">
                    <thead class="table-secondary">
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">{{__("ui.Name")}}</th>
                            <th scope="col">{{__("ui.email")}}</th>
                            <th scope="col">{{__("ui.Handle")}}</th>
                            <th scope="col">{{__("ui.Acts")}}</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($revisors_requested as $revisor)
                        <tr>
                            <th scope="row">{{$revisor->id}}</th>
                            <td>{{$revisor->name}}</td>
                            <td>{{$revisor->email}}</td>
                            <td>{{$revisor->created_at}}</td>
                            <td>
                                <form class="d-flex flex-column gap-3" action="{{route('approveRevisor', ['email' => $revisor->email])}}" method="POST">
                                    @csrf
                                    <button type="submit" class="btn colorBtn2 p-1 m-0">{{__("ui.Promote")}}</button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>     
            </div>
            {{-- TABELLA PER ATTUALI REVISORI  --}}
            <div class="col-12 my-5">
                <h1 class="display-6 my-5">{{__("ui.Act_Rev")}}</h1>
            </div>
            <div class="col-12">
                <table class="table table-dark table-borderless table-responsive">
                    <thead class="table-secondary">
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">{{__("ui.Name")}}</th>
                            <th scope="col">{{__("ui.email")}}</th>
                            <th scope="col" class="d-none d-sm-block">{{__("ui.Created_Date")}}</th>
                            <th scope="col">{{__("ui.Acts")}}</th>
                        </tr>
                    </thead>
                    <tbody>
                        {{-- @dump($revisors_in_charge) --}}
                        @foreach ($revisors_in_charge as $revisor)
                        {{-- @dump($revisor) --}}
                        <tr>
                            <th scope="row">{{$revisor->id}}</th>
                            <td>{{$revisor->name}}</td>
                            <td>{{$revisor->email}}</td>
                            <td class="d-none d-sm-block">{{$revisor->created_at}}</td>
                            <td>
                                {{-- @dump($revisor) --}}
                                <form class="d-flex flex-column gap-3" action="{{route('downgrade', ['revisor' => $revisor])}}" method="POST">
                                    @csrf
                                    @method('PATCH')
                                    <button type="submit" class="btn colorBtn p-1 m-0 justify-content-start "> {{__("ui.Downgrade")}} </button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
        <div class="row">
            {{-- TABELLA ARTICOLI APPROVATI E RIFIUTATI  --}}
            <div class="col-12 my-5">
                <h1 class="display-6 my-5">{{__("ui.App_Rej")}}</h1>
            </div>
            <div class="col-12">
                <table class="table table-dark table-responsive table-striped">
                    <thead class="table-secondary">
                        <tr class="border">
                            <th scope="col">#</th>
                            <th scope="col">{{__("ui.Author")}}</th>
                            {{-- <th scope="col">{{__("ui.email")}}</th> --}}
                            <th scope="col">{{__("ui.Title")}}</th>
                            <th scope="col" class="d-none d-sm-block">{{__("ui.Price")}}</th>
                            <th scope="col">{{__("ui.State")}}</th>
                            <th scope="col">{{__("ui.Acts")}}</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($article_revisioned as $article)
                        <tr>
                            <th scope="row">{{$article->id}}</th>
                            <td>{{$article->user->name}}</td>
                            {{-- <td>{{$article->user->email}}</td> --}}
                            <td>{{$article->title}}</td>
                            <td class="d-none d-sm-block">€ {{$article->price}}</td>
                            @if($article['is_accepted']===null) 
                            <td>{{__("ui.Rev")}}</td>
                            @elseif($article['is_accepted']==false)
                            <td>{{__("ui.Rej")}}</td>
                            @else 
                            <td>{{__("ui.Acc")}}</td>
                            @endif
                            <td>   
                                <form class="d-flex flex-column gap-3" action="{{route('undo', ['article' => $article])}}" method="POST">
                                    @csrf
                                    @method('PATCH')
                                        <button type="submit" class="btn colorBtn p-1 m-0 justify-content-start" > {{__('ui.Undo')}} </button>
                                </form>
                            </td>
                        </tr>    
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    
</x-layout>