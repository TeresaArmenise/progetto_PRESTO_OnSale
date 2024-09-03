<x-layout>
    
    <x-nav />
    
    <div class="container marginCustom">
        <div class="row">
            <div class="col-12 text-center my-5">
                <h1 class="display-6 my-5">{{__("ui.Rev_app")}}</h1>
            </div>
            <div class="col-12">
                
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">{{__("ui.Name")}}</th>
                            <th scope="col">{{__("ui.email")}}</th>
                            <th scope="col">{{__("ui.Handle")}}</th>
                            <th scope="col">{{__("ui.Acts")}}</th>
                        </tr>
                    </thead>
                    <tbody>
                        {{-- @foreach ($users as $user)
                        <tr>
                            <th scope="row">{{$user->id}}</th>
                            <td>{{$user->name}}</td>
                            <td>{{$user->email}}</td>
                            <td></td>
                            <td></td>
                        </tr>
                        @endforeach --}}
                    </tbody>
                </table>
                
            </div>
        </div>
        <div class="row">
            <div class="col-12 text-center my-5">
                <h1 class="display-6 my-5">{{__("ui.App_Rej")}}</h1>
            </div>
            <div class="col-12">
                
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">A</th>
                            <th scope="col">{{__("ui.Title")}}</th>
                            <th scope="col">{{__("ui.Description")}}</th>
                            <th scope="col">{{__("ui.Price")}}</th>
                            <th scope="col">{{__("ui.State")}}</th>
                            <th scope="col">{{__("ui.Act")}}</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($article_revisioned as $article)
                        <tr>
                            <th scope="row">{{$article->id}}</th>
                            <td>{{$article->user->name}}</td>
                            <td>{{$article->user->email}}</td>
                            <td>{{$article->title}}</td>
                            <td>{{$article->description}}</td>
                            <td>€ {{$article->price}}</td>
                            @if($article['is_accepted']===null) 
                            <td>{{__("ui.Rev")}}</td>
                            @elseif($article['is_accepted']==false)
                            <td>{{__("ui.Rej")}}</td>
                            @else 
                            <td>{{__("ui.Acc")}}</td>
                            @endif
                            <td>   
                                <form action="{{route('undo', ['article' => $article])}}" method="POST">
                                    @csrf
                                    @method('PATCH')
                                    <div class="container-fluid">
                                        <div class="row">
                                            <div class="col-12 text-center ps-5 pe-4 mb-5">
                                                <button type="submit" class="btn btnAnnulla fw-bold m-0 p-3"> {{__('ui.cancel_last')}} </button>
                                            </div>
                                        </div>
                                    </div>
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