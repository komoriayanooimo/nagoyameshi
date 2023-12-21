<div>
     <h2> Show Store</h2>
 </div>
 <div>
     <a href="{{ route('stores.index') }}"> Back</a>
 </div>
 
 <div>
     <strong>Name:</strong>
     {{$store->name}}
 </div>
 
 <div>
     <strong>Explanation:</strong>
     {{$store->explanation}}
 </div>
