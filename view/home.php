

<div class="card shadow mt-5">
  <div class="card-header">
    <h1 class="text-dark" style="font-width:500">Add New Event</h1>
  </div>
  <div class="card-body py-5">

   <form method="POST" action="">
    <div class="mb-4">
        <input type="text" name="title" class="form-control py-3" placeholder="Event Title">
    </div>
    <!-- date group -->
    <div class="mb-3 row">
        <label class="col-8" for="start">Start Date
            <input type="date" name="start" id="start" class="form-control">
        </label>
         <label class="col-4" for="start_time">Start Time
            <input type="text" name="start_time" id="start_time" class="form-control">
        </label>
    </div>

    <!-- date group -->
    <div class="mb-4 row">
        <label class="col-8" for="end">End Date
            <input type="date" name="end" id="end" class="form-control">
        </label>
         <label class="col-4" for="end_time">End Time
            <input type="text" name="end_time" id="end_time" class="form-control">
        </label>
    </div>

    <!-- Events Descrption -->
    <div class="mb-3">
        <label for="description">Description <span class="text-secondary">(optional)</span></label>
        <textarea name="description" class="form-control" id="description" rows="4"></textarea>
    </div>
</form>

    <a href="#" class="btn btn-primary">Save Event</a>
  </div>
</div>
