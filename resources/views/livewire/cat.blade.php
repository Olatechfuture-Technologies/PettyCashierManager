<div>

  <form>
    <div class="mb-3 row">
    <label for="staticEmail" class="col-sm-2 col-form-label">Email</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="staticEmail" value="email@example.com">
    </div>
  </div>
  <div class="mb-3 row">
    <label for="inputPassword" class="col-sm-2 col-form-label">Password</label>
    <div class="col-sm-10">
      <input type="password" class="form-control" id="inputPassword">
    </div>
  </div>
  <div class="mb-3 row">
    <label for="inputPassword" class="col-sm-2 col-form-label">Select Category</label>
    <div class="col-sm-10">
      <select wire:model="category" class="form-control" name="category">
            <option value='' selected>Select Category</option>
            @php
                $categories=['abc','efg','ghdu', 'sjeudh'];
            @endphp
            @foreach ($categories as $key => $category)
            <option value="{{ $key }}">{{ $category }}</option>
            @endforeach
        </select>
    </div>
  </div>
  <div class="mb-3 row">
    <label for="inputPassword" class="col-sm-2 col-form-label">Password</label>
    <div class="col-sm-10">
      <input type="password" class="form-control" id="inputPassword">
    </div>
  </div>
  </form>

</div>
