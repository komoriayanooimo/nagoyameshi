<div>
     <h2>Add New Store</h2>
 </div>
 <div>
     <a href="{{ route('stores.index') }}"> Back</a>
 </div>
 
 <form action="{{ route('stores.store') }}" method="POST">
     @csrf
 
     <div>
         <strong>Name:</strong>
         <input type="text" name="name" placeholder="Name">
     </div>
     <div>
         <strong>Explanation:</strong>
         <textarea style="height:150px" name="explanation" placeholder="Explanation"></textarea>
     </div>
     <div>
         <strong>Category:</strong>
         <select name="category_id">
         @foreach ($categories as $category)
         <option value="{{ $category->id }}">{{ $category->name }}</option>
         @endforeach
         </select>
     </div>
     <div>
         <button type="submit">Submit</button>
     </div>
 
 </form>