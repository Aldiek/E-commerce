
<div class="container" style="padding: 30px 0">
    <div>
        <style>
            nav svg{
                height: 20px;
            }
            nav .hidden{
                display: block !important;
            }
            </style>
    </div>

    <div class="alert alert-dark" role="alert">
        All Sliders
        <a href="{{route('admin.addhomeslider')}}" class="btn btn-success pull-right"> Add New Slide</a>

      </div>
      @if (Session::has('message'))
      <div class="alert alert-success" role="alert">
          {{Session::get('message')}}
      </div>

      @endif

    <table class="table table-bordered">
        <thead>
          <tr>
            <th scope="col">Id</th>
            <th scope="col">Image</th>
            <th scope="col">Title</th>
            <th scope="col">Subtitle</th>
            <th scope="col">Price</th>
            <th scope="col">Link</th>
            <th scope="col">Status</th>
            <th scope="col">Date</th>
            <th scope="col">Action</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($sliders as $slider)


          <tr>
            <td>{{$slider->id}}</td>
            <td><img src="{{asset('assets/images/sliders')}}/{{$slider->image}} " width="120"/></td>
            <td>{{$slider->title}}</td>
            <td>{{$slider->subtitle}}</td>
            <td>{{$slider->price}}</td>
            <td>{{$slider->link}}</td>
            <td>{{$slider->status == 1 ? 'Active' : 'Inactive' }}</td>
            <td>{{$slider->created_at}}</td>
            <td>
                <a href="{{route('admin.edithomeslider',['slide_id'=>$slider->id])}}" >
                    <i class="fa fa-edit fa-2x"> </i>
                </a>
                <a href="#" wire:click.prevent="deleteSlide({{$slider->id}})" style="margin-left:10px" >
                    <i class="fa fa-times fa-2x text-danger"> </i>
                </a>
            </td>
          </tr>
          @endforeach
        </tbody>
      </table>
      {{-- {{$sliders->links()}}
 --}}

</div>
