<div class="row row-cols-1 row-cols-md-2 g-4">
    
      
    @foreach ($users as $rows)
    <div class="col-md-3 mb-3">
      <div class="card">
        <img src="{{asset('assets/users/bag.png')}}" class="card-img-top mt-3" alt="...">
        <div class="card-body">
          <h5 class="card-title">{{$rows->name}}</h5>
          <span class="badge bg-primary">{{$rows->phone}}</span>
          <span class="badge bg-secondary">{{$rows->email}}</span>
          <span class="badge bg-success">{{$rows->username}}</span>
        </div>
      </div>
    </div>
    
    @endforeach
  
  </div>